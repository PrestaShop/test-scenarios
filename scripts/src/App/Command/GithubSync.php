<?php
namespace Console\App\Command;

use Console\App\Service\Github;
use Github\Exception\RuntimeException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
 
class GithubSync extends AbstractCommand
{
    private const PATTERN_ISSUE_TITLE = '[%s] %s';
    private const PATTERN_ISSUE_BODY = <<<EOD
**Component:** %s
**Scenario:** %s
**Forge:** https://forge.prestashop.com/browse/%s
    
EOD;
    private const BASE_URL_SCENARIOS = 'https://build.prestashop-project.org/test-scenarios/scenarios';

    private const GH_LABEL_TOBEAUTOMATED = 'STATE : To Be Automated';
    private const GH_LABEL_AUTOMATIONINPROGRESS = 'STATE : Automation in progress';
    private const GH_LABEL_AUTOMATED = 'STATE : Automated';
    private const GH_LABELS = [
        self::JIRA_ToBeAutomated => self::GH_LABEL_TOBEAUTOMATED,
        self::JIRA_AutomationInProgress => self::GH_LABEL_AUTOMATIONINPROGRESS,
        self::JIRA_Automated => self::GH_LABEL_AUTOMATED,
    ];
    private const JIRA_LABELS = [
        self::GH_LABEL_AUTOMATIONINPROGRESS => 111,
        self::GH_LABEL_AUTOMATED => 61,
    ];

    /** @var string */
    protected $name = 'github:sync';

    /** @var string */
    protected $description = 'JIRA - Github : Sync';

    /** @var Github */
    private $github;

    /** @var array */
    private $jiraIssues;

    /** @var array */
    private $ghIssues;

    /** @var boolean */
    private $isVerbose = false;

    /** @var OutputInterface */
    private $output;

    protected function configure()
    {
        parent::configure();

        $this
            ->addOption('ghtoken', null, InputOption::VALUE_OPTIONAL, '', getenv('GH_TOKEN') ?? null); 
              
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $time = time();

        $this->apiKey = $input->getOption('apikey');
        $this->requestsCount = 0;
        $this->github = new Github($input->getOption('ghtoken'));
        $this->isVerbose = $input->getOption('verbose');
        $this->output = $output;

        // Fetch scenarios (To Be Automated / Automation In Progress / Automated)
        $this->jiraIssues = [];
        $this->fetchJIRAScenarios();

        // Fetch issues
        $this->ghIssues = [];
        $this->fetchGithubIssues();

        $count = 0;
        try {
            foreach($this->jiraIssues as $key => $jiraIssue) {
                $count++;
                $ghIssue = $this->getGithubIssue($key);
                if (!$ghIssue) {
                    $this->actionCreateGHIssue($jiraIssue);
                    continue;
                }
    
                // Update body if different
                $this->actionUpdateGHIssueBody($ghIssue, $jiraIssue);
    
                // Update Github from JIRA (it there are no labels on GH)
                $this->actionUpdateGHFromJIRA($ghIssue, $jiraIssue);
    
                // Update JIRA from Github
                $this->actionUpdateJIRAFromGH($ghIssue, $jiraIssue);
            }
            
            $this->output->writeLn([
                '',
                'Sync done in ' . (time() - $time) . 's with ' . $this->requestsCount . ' requests.',
            ]);
        } catch(RuntimeException $e) {
            $this->output->writeLn([
                '',
                'Partial sync (' . $count . '/' .  count($this->jiraIssues). ') done in ' . (time() - $time) . 's with ' . $this->requestsCount . ' requests.',
                '',
                '',
                $e->getMessage(),
            ]);
        }
    }

    private function fetchJIRAScenarios(): void
    {
        foreach(['Core', 'Modules'] as $projectName) {
            $folders = $this->getFolders($this->apiKey, $projectName);

            $this->processJIRAFolder($folders, true);
        }
    }

    private function processJIRAFolder(array $folder, bool $isRoot): void
    {
        // Process tests
        $tests = $this->getTests($this->apiKey, $folder['id']);
        foreach($tests as $test) {
            if (!in_array(
                $test['workflowStatus'],
                [
                    self::JIRA_ToBeAutomated,
                    self::JIRA_AutomationInProgress,
                    self::JIRA_Automated,
                ]
            )) {
                continue;
            }
            $this->jiraIssues[$test['key']] = $test;
            $this->jiraIssues[$test['key']]['url'] = self::BASE_URL_SCENARIOS
            . (
                !empty($folder['testRepositoryPath'])
                ? $this->slugify($folder['testRepositoryPath'], true) . DIRECTORY_SEPARATOR
                : DIRECTORY_SEPARATOR
            )
            . $this->slugify($folder['name'], true) . DIRECTORY_SEPARATOR
            . $this->slugify($test['summary'], false) . '.html';
        }
        
        // Process Children
        foreach($folder['folders'] as $folderChild) {
            $this->processJIRAFolder($folderChild, false);
        }
    }

    private function fetchGithubIssues(): array
    {
        $this->ghIssues = $this->github->getClient()->api('issue')->all('PrestaShop', 'test-scenarios');

        return $this->ghIssues;
    }

    private function getGithubIssue(string $keyJIRA): ?array
    {
        foreach($this->ghIssues as $ghIssue) {
            if (strpos($ghIssue['title'], '[' . $keyJIRA . ']') === 0) {
                return $ghIssue;
            }
        }
        
        return null;
    }

    private function getGHIssueTitle(array $jiraIssue): string
    {
        return sprintf(
            self::PATTERN_ISSUE_TITLE, 
            $jiraIssue['key'],
            $jiraIssue['summary'],
        );
    }

    private function getGHIssueBody(array $jiraIssue): string
    {
        return sprintf(
            self::PATTERN_ISSUE_BODY,
            $jiraIssue['components'][0] ?? '',
            $jiraIssue['url'],
            $jiraIssue['key']
        );
    }

    private function actionCreateGHIssue(array $jiraIssue): void
    {
        if($jiraIssue['workflowStatus'] === self::JIRA_Automated) {
            return;
        }
        
        $this->github->getClient()
            ->api('issue')
            ->create(
                'PrestaShop',
                'test-scenarios',
                [
                    'title' => $this->getGHIssueTitle($jiraIssue),
                    'body' => $this->getGHIssueBody($jiraIssue),
                    'labels' => [
                        self::GH_LABELS[$jiraIssue['workflowStatus']]
                    ]
                 ]
            );

        if ($this->isVerbose) {
            $this->output->writeln(sprintf(
                '%s : Created a new Github issue',
                $jiraIssue['key']
            ));
        }
    }

    private function actionUpdateGHIssueBody(array $ghIssue, array $jiraIssue): void
    {
        if ($ghIssue['body'] === $this->getGHIssueBody($jiraIssue)) {
            return;
        }

        $this->github->getClient()
            ->api('issue')
            ->update(
                'PrestaShop',
                'test-scenarios',
                $ghIssue['number'],
                [
                    'title' => $this->getGHIssueTitle($jiraIssue),
                    'body' => $this->getGHIssueBody($jiraIssue),
                ]
            );

        if ($this->isVerbose) {
            $this->output->writeln(sprintf(
                '%s : Updated body & title',
                $jiraIssue['key']
            ));
        }
    }

    private function actionUpdateGHFromJIRA(array $ghIssue, array $jiraIssue): void
    {
        if (!empty($ghIssue['labels'])) {
            return;
        }

        $this->github->getClient()
            ->api('issue')
            ->update(
                'PrestaShop',
                'test-scenarios',
                $ghIssue['number'],
                [
                    'state' => $jiraIssue['workflowStatus'] == self::JIRA_Automated ? 'closed' : 'open',
                    'state_reason' => $jiraIssue['workflowStatus'] == self::JIRA_Automated ? 'completed' : null,
                    'labels' => [
                        self::GH_LABELS[$jiraIssue['workflowStatus']]
                    ]
                ]
            );

        if ($this->isVerbose) {
            $this->output->writeln(sprintf(
                '%s : Github : Updated label',
                $jiraIssue['key']
            ));
        }
    }

    private function actionUpdateJIRAFromGH(array $ghIssue, array $jiraIssue): void
    {
        if (
            !(isset($ghIssue['labels'][0]['name'])
                && $ghIssue['labels'][0]['name'] === self::GH_LABEL_AUTOMATIONINPROGRESS
                && $jiraIssue['workflowStatus'] !== self::JIRA_AutomationInProgress)
            && !(isset($ghIssue['labels'][0]['name'])
                && $ghIssue['labels'][0]['name'] === self::GH_LABEL_AUTOMATED
                && $jiraIssue['workflowStatus'] !== self::JIRA_Automated)
        ) {
            return;
        }

        $ch = curl_init();
    
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Accept: application/json',
            'Content-Type: application/json',
            'Authorization: Basic ' . $this->apiKey,
        ]);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS,'{"transition":{"id":"'.self::JIRA_LABELS[$ghIssue['labels'][0]['name']].'"}}');
        curl_setopt($ch, CURLOPT_URL, 'https://forge.prestashop.com/rest/api/2/issue/' .$jiraIssue['key'].'/transitions');

        $result = curl_exec($ch);
        $info = curl_getinfo($ch);

        curl_close($ch);

        if ($this->isVerbose && isset($info['http_code']) && $info['http_code'] === 204) {
            $this->output->writeln(sprintf(
                '%s : JIRA : Updated state',
                $jiraIssue['key']
            ));
        }
    }
}
