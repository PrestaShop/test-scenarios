<?php
namespace Console\App\Command;

use Console\App\Service\API\TestRail;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Helper\TableSeparator;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
 
class TestRailExportData extends Command
{
    /**
     * @var TestRail;
     */
    protected $testRailClient;

    const PROJECT_NAME = 'Modules';

    const OUTPUT_DIR = 'src/content/tests/modules/';

    protected function configure()
    {
        $this->setName('testrail:export:data')
            ->setDescription('TestRail : Export data');   
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $time = time();

        // Init
        $this->testRailClient = new TestRail(getenv(TESTRAIL_URL));
        $this->testRailClient->set_user(getenv(TESTRAIL_USERNAME));
        $this->testRailClient->set_password(getenv(TESTRAIL_APIKEY));

        $projectId = $this->getProjectId();
        if (empty($projectId)) {
            return false;
        }
        $suites = $this->getSuites($projectId);

        foreach ($suites as $suiteId => $suiteName) {
            $cases = $this->getCases($projectId, $suiteId);
            $this->generatePages($suiteName, $cases);
        }
        
        $output->writeLn(['', 'Output generated in ' . (time() - $time) . 's.']);
    }

    private function getProjectId(): ?int
    {
        $projects = $this->testRailClient->send_get('get_projects');
        foreach ($projects as $value) {
            if ($value['name'] === self::PROJECT_NAME) {
                return $value['id'];
            }
        }
        return null;
    }

    private function getSuites(int $projectId): array
    {
        $data = $this->testRailClient->send_get('get_suites/' . $projectId);
        $suites = [];
        foreach ($data as $value) {
            $suites[$value['id']] = $value['name'];
        }
        return $suites;
    }

    private function getCases(int $projectId, int $idSuite): array
    {
        return $this->testRailClient->send_get('get_cases/' . $projectId . '&suite_id=' . $idSuite);
    }

    private function generatePages(string $moduleName, array $cases)
    {
        $dirName = self::OUTPUT_DIR . $moduleName;
        // Check directory
        if (!is_dir($dirName)) {
            \mkdir($dirName);
        }
        // Check index.md
        $content = <<<EOT
---
title: $moduleName
menuTitle: $moduleName 
pre: ""
chapter: true
---
        
# $moduleName

{{% children %}}
EOT;
        \file_put_contents($dirName . '/_index.md', $content);

        // Cases
        foreach ($cases as $case) {
            $content = '---' . PHP_EOL
                . 'title: ' . $case['title'] . PHP_EOL
                . 'weight: ' .$case['display_order'] . PHP_EOL
                . '---' . PHP_EOL
                . PHP_EOL
                . '# ' . $case['title']. PHP_EOL
                . PHP_EOL
                . '## Preconditions' . PHP_EOL
                . PHP_EOL
                . nl2br(preg_replace('/([\r\n\t]+)$/','', $case['custom_preconds'])). PHP_EOL;
            if ($case['template_id'] == 1 && !empty($case['custom_steps'])) {
                $content .= '## Steps' . PHP_EOL
                    . PHP_EOL
                    . nl2br(preg_replace('/([\r\n\t]+)$/','', $case['custom_steps'])). PHP_EOL
                    . PHP_EOL;
            }
            if ($case['template_id'] == 2 && !empty($case['custom_steps_separated'])) {
                $content .= '## Steps' . PHP_EOL;
                foreach ($case['custom_steps_separated'] as $key => $step) {
                    $content .= '### Step #' . $key . PHP_EOL
                        . '#### Description'. PHP_EOL
                        . $step['content'] . PHP_EOL
                        . '#### Expected result'. PHP_EOL
                        . $step['expected'] . PHP_EOL;
                }
            }
            if ($case['template_id'] == 1 && !empty($case['custom_expected'])) {
                $content .= '## Expected result'. PHP_EOL
                    . PHP_EOL
                    . $case['custom_expected']. PHP_EOL
                    . PHP_EOL;
            }
            \file_put_contents($dirName . '/' .$this->slugify($case['title']). '.md', $content);
        }
    }

    public function slugify(string $text): string
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
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
}
