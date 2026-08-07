<?php
namespace Console\App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
 
abstract class AbstractCommand extends Command
{
    protected $pageWeight = 0;

    private const OUTPUT_DIR = 'src/content/scenarios';

    protected const JIRA_ToBeAutomated = '[Test] To be automated';
    protected const JIRA_AutomationInProgress = '[Test] Automation in progress';
    protected const JIRA_Automated = '[Test] Automated';

    protected const XRAY_AUTH_URL = 'https://xray.cloud.getxray.app/api/v2/authenticate';
    protected const XRAY_GRAPHQL_URL = 'https://xray.cloud.getxray.app/api/v2/graphql';
    protected const XRAY_PROJECT_KEY = 'TEST';

    /** @var int */
    protected $requestsCount = 0;

    /** @var string */
    protected $jirakey = '';

    /** @var string */
    protected $xraykeyclient = '';

    /** @var string */
    protected $xraykeysecret = '';

    /** @var string */
    protected $xrayToken = '';

    /** @var string */
    protected $xrayProjectId = '';

    protected $stats = [];

    protected function configure()
    {
        $this->setName($this->name)
            ->setDescription($this->description)
            ->addOption(
                'jirakey',
                null,
                InputOption::VALUE_OPTIONAL,
                '',
                getenv('JIRA_APIKEY') ?? null
            )
            ->addOption(
                'xraykeyclient',
                null,
                InputOption::VALUE_OPTIONAL,
                '',
                getenv('XRAY_APIKEY_CLIENT') ?? null
            )
            ->addOption(
                'xraykeysecret',
                null,
                InputOption::VALUE_OPTIONAL,
                '',
                getenv('XRAY_APIKEY_SECRET') ?? null
            );
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $time = time();

        $this->jirakey = $input->getOption('jirakey');
        $this->xraykeyclient = $input->getOption('xraykeyclient');
        $this->xraykeysecret = $input->getOption('xraykeysecret');
        $this->requestsCount = 0;
        $this->stats = [];

        $folders = $this->getFolders($this->projectName);

        $this->processFolder($folders);

        $this->processStats();
        
        $output->writeLn(['', 'Output generated in ' . (time() - $time) . 's with ' . $this->requestsCount . ' requests.']);
    }

    private function processStats(): void
    {
        $statsContent = '---' . PHP_EOL
            . 'title: "' . $this->projectName . '"' . PHP_EOL
            . 'disableToc: true' . PHP_EOL
            . '---' . PHP_EOL
            . '## ' . $this->projectName . PHP_EOL
            . PHP_EOL
            . '| Feature | Total | Draft | In Progress | In Review | Blocked | To Be Automated | Automation In Progress | Automated | Deprecated |' . PHP_EOL
            . '|---|:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---:|' . PHP_EOL
        ;
        foreach ($this->stats as $key => $stats) {
            if (array_sum($stats) == 0) {
                continue;
            }
            $statsContent .= '| ' . $key
                . ' | ' . array_sum($stats)
                . ' | ' . ($stats['Sandbox'] ?? '-')
                . ' | ' . ($stats['[Test] In progress'] ?? '-')
                . ' | ' . ($stats['[Test] IN REVIEW'] ?? '-')
                . ' | ' . ($stats['[Test] Blocked'] ?? '-')
                . ' | ' . ($stats[self::JIRA_ToBeAutomated] ?? '-')
                . ' | ' . ($stats[self::JIRA_AutomationInProgress] ?? '-')
                . ' | ' . ($stats[self::JIRA_Automated] ?? '-')
                . ' | ' . ($stats['[Test] Deprecated'] ?? '-')
                . ' | ' . PHP_EOL;
        }

        // Footer
        $numTotal = array_sum(array_map('array_sum', $this->stats));
        $numDraft = array_sum(array_column($this->stats, 'Sandbox'));
        $numInProgress = array_sum(array_column($this->stats, '[Test] In progress'));
        $numInReview = array_sum(array_column($this->stats, '[Test] IN REVIEW'));
        $numBlocked = array_sum(array_column($this->stats, '[Test] Blocked'));
        $numToBeAutomated = array_sum(array_column($this->stats, self::JIRA_ToBeAutomated));
        $numAutomationInProgress = array_sum(array_column($this->stats, self::JIRA_AutomationInProgress));
        $numAutomated = array_sum(array_column($this->stats, self::JIRA_Automated));
        $numDeprecated = array_sum(array_column($this->stats, '[Test] Deprecated'));

        $statsContent .= '| **Total**'
            . ' | **' . $numTotal . '**'
            . ' | **' . $numDraft . '**'
            . ' | **' . $numInProgress . '**'
            . ' | **' . $numInReview . '**'
            . ' | **' . $numBlocked . '**'
            . ' | **' . $numToBeAutomated . '**'
            . ' | **' . $numAutomationInProgress . '**'
            . ' | **' . $numAutomated . '**'
            . ' | **' . $numDeprecated . '**'
            . ' | ' . PHP_EOL;

        $statsContent .= '| **Total**'
            . ' | '
            . ' | **' . ($numDraft == 0 ? '0' : number_format(($numDraft * 100) / $numTotal, 2)) . '%**'
            . ' | **' . ($numInProgress == 0 ? '0' : number_format(($numInProgress * 100) / $numTotal, 2)) . '%**'
            . ' | **' . ($numInReview == 0 ? '0' : number_format(($numInReview * 100) / $numTotal, 2)) . '%**'
            . ' | **' . ($numBlocked == 0 ? '0' : number_format(($numBlocked * 100) / $numTotal, 2)) . '%**'
            . ' | **' . ($numToBeAutomated == 0 ? '0' : number_format(($numToBeAutomated * 100) / $numTotal, 2)) . '%**'
            . ' | **' . ($numAutomationInProgress == 0 ? '0' : number_format(($numAutomationInProgress * 100) / $numTotal, 2)) . '%**'
            . ' | **' . ($numAutomated == 0 ? '0' : number_format(($numAutomated * 100) / $numTotal, 2)) . '%**'
            . ' | **' . ($numInProgress == 0 ? '0' : number_format(($numInProgress * 100) / $numTotal, 2)) . '%**'
            . ' | ' . PHP_EOL;

        file_put_contents(self::OUTPUT_DIR . DIRECTORY_SEPARATOR . $this->statsFile, $statsContent);
    }

    private function processFolder(array $folder, string $folderName = '', bool $isRoot = true): void
    {
        $dirName = self::OUTPUT_DIR
        . (
            !empty($folder['testRepositoryPath'])
            ? $this->slugify($folder['testRepositoryPath'], true) . DIRECTORY_SEPARATOR
            : DIRECTORY_SEPARATOR
        )
        . $this->slugify($folder['name'], true) . DIRECTORY_SEPARATOR;

        // Clean directory
        $this->delTree($dirName);

        // Create directory
        if (!is_dir($dirName)) {
            mkdir($dirName);
        }

        // Create index.md
        $content = $this->getParentContent($folder['name'], $folder['rank'], !$isRoot, $this->pageWeight);
        file_put_contents($dirName . '_index.md', $content);

        $folderName = ($folderName == '' ? '' : ($folderName . ' > ')) . $folder['name'];

        // Process tests
        $tests = $this->getTests($folder);
        $stats = $this->processTests($dirName, $tests);
        
        $this->stats[$folderName] = $stats;
        
        // Process Children
        foreach($folder['folders'] as $folderChild) {
            $this->processFolder($folderChild, $folderName, false);
        }
    }

    private function processTests(string $dirName, array $tests): array
    {
        $stats = [];
        foreach($tests as $test) {
            if (!isset($stats[$test['workflowStatus']])) {
                $stats[$test['workflowStatus']] = 0;
            }
            $stats[$test['workflowStatus']]++;

            $steps = $this->getTestSteps($test['issueId']);
            file_put_contents(
                $dirName . $this->slugify($test['summary'], false). '.md',
                $this->getTestContent($test, $steps)
            );
        }

        ksort($stats);

        return $stats;
    }

    protected function slugify(string $text, bool $isDir): string
    {
        // replace non letter or digits by -
        if ($isDir) {
            $text = preg_replace('~[^\pL\d\/]+~u', '-', $text);
        } else {
            $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        }
        // trim
        $text = trim($text, '-');
        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);
        // lowercase
        $text = strtolower($text);
        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }

    protected function delTree(string $dir)
    {
        if (!is_dir($dir)) {
            return;
        }

        $files = array_diff(scandir($dir), array('.','..'));
        foreach ($files as $file) {
            (is_dir("$dir/$file")) ? $this->delTree("$dir/$file") : unlink("$dir/$file");
        }
        return rmdir($dir); 
    }

    protected function getXrayToken(): string
    {
        if ($this->xrayToken !== '') {
            return $this->xrayToken;
        }

        $this->requestsCount++;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_URL, self::XRAY_AUTH_URL);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
            'client_id' => $this->xraykeyclient,
            'client_secret' => $this->xraykeysecret,
        ]));
        $result = curl_exec($ch);
        curl_close($ch);

        $token = json_decode($result, true);
        if (!is_string($token) || $token === '') {
            throw new \RuntimeException('Xray authentication failed: ' . $result);
        }

        $this->xrayToken = $token;

        return $this->xrayToken;
    }

    private function xrayGraphQL(string $query, array $variables = []): array
    {
        $this->requestsCount++;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Accept: application/json',
            'Content-Type: application/json',
            'Authorization: Bearer ' . $this->getXrayToken(),
        ]);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_URL, self::XRAY_GRAPHQL_URL);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
            'query' => $query,
            'variables' => $variables,
        ]));
        $result = curl_exec($ch);
        curl_close($ch);

        $result = json_decode($result, true);

        if (!empty($result['errors'])) {
            throw new \RuntimeException('Xray GraphQL error: ' . $result['errors'][0]['message']);
        }

        return $result['data'] ?? [];
    }

    private function getXrayProjectId(): string
    {
        if ($this->xrayProjectId !== '') {
            return $this->xrayProjectId;
        }

        $data = $this->xrayGraphQL(
            'query($projectIdOrKey: String!) {
                getProjectSettings(projectIdOrKey: $projectIdOrKey) {
                    projectId
                }
            }',
            ['projectIdOrKey' => self::XRAY_PROJECT_KEY]
        );

        $this->xrayProjectId = $data['getProjectSettings']['projectId'] ?? '';

        return $this->xrayProjectId;
    }

    /**
     * Xray Cloud's getFolder only returns testsCount/name/path for the requested path;
     * "folders" is a JSON blob that may contain either nested folder objects or child paths
     * depending on nesting depth, so children are resolved recursively either way.
     */
    private function fetchXrayFolder(string $path): array
    {
        $data = $this->xrayGraphQL(
            'query($projectId: String, $path: String!) {
                getFolder(projectId: $projectId, path: $path) {
                    name
                    path
                    testsCount
                    folders
                }
            }',
            ['projectId' => $this->getXrayProjectId(), 'path' => $path]
        );

        return $data['getFolder'] ?? [];
    }

    private function resolveXrayFolder(array $folder, int $rank = 0): array
    {
        if (empty($folder)) {
            return [];
        }

        $folder['rank'] = $rank;
        // Xray Cloud has no folder "rank"/testRepositoryPath fields (Server/DC only);
        // testRepositoryPath is rebuilt from path (keeping its leading "/") to keep
        // processFolder()'s dirName concatenation (which relies on that leading slash
        // as the separator after OUTPUT_DIR) unchanged.
        $folder['testRepositoryPath'] = substr($folder['path'], 0, (int) strrpos($folder['path'], '/'));

        $children = $folder['folders'] ?? [];
        $folder['folders'] = [];
        foreach (array_values($children) as $index => $child) {
            $folder['folders'][] = $this->resolveXrayFolder(
                is_array($child) ? $child : $this->fetchXrayFolder($child),
                $index
            );
        }

        return $folder;
    }

    protected function getFolders(string $projectName): array
    {
        $rootFolder = $this->resolveXrayFolder($this->fetchXrayFolder('/'));

        foreach ($rootFolder['folders'] ?? [] as $folder) {
            if ($folder['name'] == $projectName) {
                return $folder;
            }
        }

        return [];
    }

    protected function getTests(array $folder): array
    {
        $tests = [];
        $start = 0;
        $rank = 0;

        do {
            $data = $this->xrayGraphQL(
                'query($projectId: String, $folder: FolderSearchInput, $limit: Int!, $start: Int) {
                    getTests(projectId: $projectId, folder: $folder, limit: $limit, start: $start) {
                        total
                        results {
                            issueId
                            jira(fields: ["key", "summary", "status", "labels", "components", "assignee", "customfield_10521", "customfield_10522"])
                        }
                    }
                }',
                [
                    'projectId' => $this->getXrayProjectId(),
                    'folder' => ['path' => $folder['path'], 'includeDescendants' => false],
                    'limit' => 100,
                    'start' => $start,
                ]
            );

            $total = $data['getTests']['total'] ?? 0;
            foreach ($data['getTests']['results'] ?? [] as $result) {
                $jira = $result['jira'] ?? [];
                $rank++;
                $tests[] = [
                    'issueId' => $result['issueId'] ?? '',
                    'key' => $jira['key'] ?? '',
                    'summary' => $jira['summary'] ?? '',
                    'rank' => $rank,
                    'workflowStatus' => $jira['status']['name'] ?? '',
                    'components' => array_map(
                        fn ($component) => $component['name'] ?? $component,
                        $jira['components'] ?? []
                    ),
                    'labels' => $jira['labels'] ?? [],
                    'assignee' => $jira['assignee']['displayName'] ?? null,
                    'testPath' => $jira['customfield_10521'] ?? null,
                    'specification' => $jira['customfield_10522'] ?? null,
                ];
            }

            $start += 100;
        } while ($start < $total);

        return $tests;
    }

    protected function getTestSteps(string $issueId): array
    {
        $data = $this->xrayGraphQL(
            'query($issueId: String!) {
                getTest(issueId: $issueId) {
                    steps {
                        action
                        result
                        callTestIssueId
                    }
                }
            }',
            ['issueId' => $issueId]
        );

        $finalData = [];
        foreach ($data['getTest']['steps'] ?? [] as $step) {
            if (!empty($step['callTestIssueId'])) {
                $calledData = $this->getTestSteps($step['callTestIssueId']);
                foreach ($calledData as $calledDatum) {
                    $finalData[] = $calledDatum;
                }
            } else {
                $finalData[] = [
                    'step' => ['raw' => $step['action'] ?? ''],
                    'result' => ['raw' => $step['result'] ?? ''],
                ];
            }
        }

        return $finalData;
    }

    protected function getParentContent(string $suiteName, int $weight, bool $withTitle = false, int $pageWeight = 0): string
    {
        return '---
title: ' . $suiteName . '
menuTitle: ' . $suiteName . '
chapter: true' . ($withTitle ? '' : PHP_EOL . 'weight: ' . $pageWeight). '
---

# ' . $suiteName . '

{{% children ' . ($withTitle ? 'titlePages="Tests" titleSections="Categories" ' : '') . '/%}}
';
    }

    protected function getTestContent(array $test, array $steps): string
    {
        $content = '---' . PHP_EOL
            . 'title: "' . addslashes($test['summary']) .'"' . PHP_EOL
            . 'weight: ' .$test['rank'] . PHP_EOL
            . '---' . PHP_EOL
            . PHP_EOL
            . '# ' . addslashes($test['summary'])
            . PHP_EOL;

        ## Details
        $detailsStatus = str_replace('[Test] ', '', $test['workflowStatus']);
        $detailsComponent = $test['components'][0] ?? '';
        $detailsLabel = [];
        foreach($test['labels'] as $label) {
            if (strpos($label, 'Automated_') === 0) {
                $label = str_replace('Automated_', '', $label);
                $detailsLabel[] = implode('.', str_split($label, 1));
            }
        }
        $content .= '## Details' . PHP_EOL;
        if (!empty($detailsComponent)) {
            $content .= '* **Component** : '. $detailsComponent . PHP_EOL;
        }
        $content .= '* **Status** : '. $detailsStatus . PHP_EOL;
        if (!empty($detailsLabel)) {
            $content .= '* **Automated on** : '. implode(', ', $detailsLabel) . PHP_EOL;
        }
        $content .= '* **Scenario** : https://prestashop-jira.atlassian.net/browse/' . $test['key'] . PHP_EOL;
        if (!empty($test['testPath'])) {
            $content .=  '* **Test** : https://github.com/PrestaShop/PrestaShop/tree/develop/'. $test['testPath'] . '.ts' . PHP_EOL;
        }
        if (!empty($test['specification'])) {
            $content .=  '* **Specification** : ' . $test['specification'] . PHP_EOL;
        }
        $content .= PHP_EOL;

        ## Steps
        if (!empty($steps)) {
            $content .= '## Steps' . PHP_EOL;
            $content .= '| ' . 'Step Description'
                . ' | ' . 'Expected result'
                . ' |'  . PHP_EOL;

            $content .= '| ----- | ----- |'  . PHP_EOL;
            foreach ($steps as $step) {
                $stepContent = $step['step']['raw'];
                $stepContent = trim($stepContent);
                $stepContent = str_replace("\r\n", '<br>', $stepContent);
                $stepContent = str_replace(PHP_EOL, '<br>', $stepContent);
                $stepContent = trim($stepContent, " \\-");

                $stepExpected = $step['result']['raw'];
                $stepExpected = trim($stepExpected);
                $stepExpected = str_replace("\r\n", '<br>', $stepExpected);
                $stepExpected = str_replace(PHP_EOL, '<br>', $stepExpected);
                $stepExpected = trim($stepExpected, " \\-");
                
                $content .= '| ' . $stepContent . ' | ' . $stepExpected . ' |'  . PHP_EOL;
            }
        }

        return $content;
    }
}
