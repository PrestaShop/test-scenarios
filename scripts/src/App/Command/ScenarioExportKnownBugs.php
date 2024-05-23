<?php
namespace Console\App\Command;

use Console\App\Service\Github;
use FilesystemIterator;
use Github\Exception\RuntimeException;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
 
class ScenarioExportKnownBugs extends AbstractCommand
{
    private const DIR = 'src/content/scenarios/known-bugs/';

    private const MAIN_FILE = self::DIR . '_index.md';

    private const FILE = self::DIR . '%s.md';

    private const BASE = '---
title: "%s"
weight: %d
---

# Known bugs
';

    /** @var string */
    protected $name = 'scenario:export:knownbugs';

    /** @var string */
    protected $description = 'Scenario QA : Export known bugs';

    protected function configure()
    {
        parent::configure();

        $this
            ->addOption('config', null, InputOption::VALUE_REQUIRED)
            ->addOption('ghtoken', null, InputOption::VALUE_OPTIONAL, '', getenv('GH_TOKEN') ?? null);              
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $time = time();
        $config = \json_decode(\file_get_contents($input->getOption('config')), true);

        // Add the main file for the directory
        $this->processMainFile();

        $github = new Github($input->getOption('ghtoken'));
        $issues = [];

        foreach($config['items'] as $configItem) {
            $generatedFile = sprintf(self::FILE, $configItem['branch']);

            $iteratorGenerated = new FilesystemIterator(self::DIR, FilesystemIterator::SKIP_DOTS);
            $countFiles = iterator_count($iteratorGenerated);

            $files = $results = []; 

            $iterator = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator(
                    $configItem['path'] . 'tests/UI/campaigns/'
                )
            );
            /** @var SplFileInfo $file */
            foreach ($iterator as $file) {
                if ($file->isDir()){ 
                    continue;
                }
                        
                $files[] = $file->getPathname();        
            }

            foreach($files as $file) {
                $trimFile = str_replace($configItem['path'], '', $file);
                $content = file_get_contents($file);
                preg_match_all('/^\s+\/\/\s+@todo\s+:\s+(.*)/m', $content, $matches);
                if (!empty($matches[1])) {
                    $results[$trimFile] = [];
                    foreach($matches[1] as $url) {
                        if (!in_array($url, $results[$trimFile])) {
                            $results[$trimFile][] = $url;
                        }
                    }
                }
            }
            ksort($results);

            file_put_contents(
                $generatedFile,
                sprintf(self::BASE, $configItem['branch'], $countFiles)
            );
            foreach ($results as $file => $urls) {
                file_put_contents($generatedFile, '* **['.$file.'](https://github.com/PrestaShop/PrestaShop/tree/' . $configItem['branch'] . '/' . $file . '.ts)** :' . PHP_EOL, FILE_APPEND);
                foreach($urls as $url) {
                    preg_match('/https:\/\/github.com\/([^\/]+)\/([^\/]+)\/issues\/([0-9]+)/', $url, $matches);
                    if (count($matches) !== 4) {
                        $output->writeLn(sprintf('The URL is not an issue : %s', $url));
                    } else {
                        if (!isset($issues[$url])) {
                            try {
                                $issues[$url] = $github->getClient()->api('issue')->show($matches[1], $matches[2], $matches[3]);
                            } catch (\Github\Exception\RuntimeException $e) {
                                $output->writeLn([
                                    '',
                                    $e->getMessage(),
                                    sprintf('The URL can\'t be fetched : %s', $url)
                                ]);
                            }
                        }
                    }
                    file_put_contents($generatedFile, '  * ['.$matches[2] . '#'.$matches[3] . ' : '.($issues[$url]['title'] ?? $url).'](' . $url.')' . PHP_EOL, FILE_APPEND);
                }
            }
        }
    }

    protected function processMainFile(): void
    {
        if (!is_dir(dirname(self::MAIN_FILE))) {
            mkdir(dirname(self::MAIN_FILE));
        }

        if (!file_exists(self::MAIN_FILE)) {
            file_put_contents(self::MAIN_FILE, '---
title: Known Bugs
menuTitle: Known Bugs
chapter: true
weight: 3
---

## Known bugs per version

{{% children /%}}
');
        }
    }
}
