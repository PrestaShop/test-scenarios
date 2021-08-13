<?php
namespace Console\App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
 
abstract class AbstractCommand extends Command
{
    private const OUTPUT_DIR = 'src/content/scenarios';

    /** @var int */
    private $requestsCount = 0;

    /** @var string */
    private $apiKey = '';

    protected function configure()
    {
        $this->setName($this->name)
            ->setDescription($this->description)
            ->addOption(
                'apikey',
                null,
                InputOption::VALUE_OPTIONAL,
                '',
                getenv('JIRA_APIKEY') ?? null
            );   
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $time = time();

        $this->apiKey = $input->getOption('apikey');
        $this->requestsCount = 0;

        $folders = $this->getFolders($this->apiKey, $this->projectName);

        $this->processFolder($folders, true);
        
        $output->writeLn(['', 'Output generated in ' . (time() - $time) . 's with ' . $this->requestsCount . ' requests.']);
    }

    private function processFolder(array $folder, bool $isRoot): void
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
        $content = $this->getParentContent($folder['name'], $folder['rank'], !$isRoot);
        file_put_contents($dirName . '_index.md', $content);

        // Process tests
        $tests = $this->getTests($this->apiKey, $folder['id']);
        $this->processTests($dirName, $tests);
        
        // Process Children
        foreach($folder['folders'] as $folderChild) {
            $this->processFolder($folderChild, false);
        }
    }

    private function processTests(string $dirName, array $tests): void
    {
        foreach($tests as $test) {
            $steps = $this->getTestSteps($this->apiKey, $test['key']);
            file_put_contents(
                $dirName . $this->slugify($test['summary'], false). '.md',
                $this->getTestContent($test, $steps)
            );
        }
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

    protected function getFolders(string $apiKey, string $projectName): array
    {
        $this->requestsCount++;

        $url = "https://forge.prestashop.com/rest/raven/2.0/api/testrepository/TEST/folders";
        $ch = curl_init();
        $headers = array(
            'Accept: application/json',
            'Content-Type: application/json',
            'Authorization: Basic ' . $apiKey
        );

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);

        $result = json_decode($result, true);
        if (empty($result) || empty($result['folders'])) {
            return [];
        }

        foreach($result['folders'] as $folder) {
            if ($folder['name'] == $projectName) {
                return $folder;
            }
        }
        return [];
    }

    protected function getTests(string $apiKey, int $projectId): array
    {
        $this->requestsCount++;
        
        $url = 'https://forge.prestashop.com/rest/raven/2.0/api/testrepository/TEST/folders/' . (string) $projectId . '/tests';
        $ch = curl_init();
        $headers = array(
            'Accept: application/json',
            'Content-Type: application/json',
            'Authorization: Basic ' . $apiKey
        );

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);

        $result = json_decode($result, true);
        if (empty($result) || empty($result['tests'])) {
            return [];
        }
        
        return $result['tests'];
    }

    protected function getTestSteps(string $apiKey, string $testKey): array
    {
        $this->requestsCount++;
        
        $url = 'https://forge.prestashop.com/rest/raven/1.0/api/test/' . $testKey . '/step';
        $ch = curl_init();
        $headers = array(
            'Accept: application/json',
            'Content-Type: application/json',
            'Authorization: Basic ' . $apiKey
        );

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);

        return  json_decode($result, true);
    }

    protected function getParentContent(string $suiteName, int $weight, bool $withTitle = false): string
    {
        return '---
title: ' . $suiteName . '
menuTitle: ' . $suiteName . '
chapter: true
---

# ' . $suiteName . '

{{% children ' . ($withTitle ? 'titlePages="Tests" titleSections="Categories" ' : '') . '%}}
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
