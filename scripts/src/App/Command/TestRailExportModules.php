<?php
namespace Console\App\Command;

use Console\App\Service\API\TestRail;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Helper\TableSeparator;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
 
class TestRailExportModules extends AbstractTestRailCommand
{
    public const PROJECT_NAME = 'Modules';

    public const OUTPUT_DIR = 'src/content/modules/';

    protected function configure()
    {
        $this->setName('testrail:export:modules')
            ->setDescription('TestRail : Export modules')
            ->addOption(
                'url',
                null,
                InputOption::VALUE_OPTIONAL,
                '',
                getenv('TESTRAIL_URL') ?? null
            )
            ->addOption(
                'username',
                null,
                InputOption::VALUE_OPTIONAL,
                '',
                getenv('TESTRAIL_USERNAME') ?? null
            )
            ->addOption(
                'apikey',
                null,
                InputOption::VALUE_OPTIONAL,
                '',
                getenv('TESTRAIL_APIKEY') ?? null
            );   
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $time = time();

        // Init
        $this->testRailClient = new TestRail($input->getOption('url'));
        $this->testRailClient->set_user($input->getOption('username'));
        $this->testRailClient->set_password($input->getOption('apikey'));

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

    private function generatePages(string $moduleName, array $cases)
    {
        $dirName = self::OUTPUT_DIR . $moduleName;
        // Clean directory
        $this->delTree($dirName);
        // Check directory
        if (!is_dir($dirName)) {
            \mkdir($dirName);
        }

        // Check index.md
        $content = $this->getParentContent($moduleName);
        
        file_put_contents($dirName . '/_index.md', $content);

        // Cases
        foreach ($cases as $case) {
            $content = $this->renderCase($case);
            
            file_put_contents($dirName . '/' .$this->slugify($case['title']). '.md', $content);
        }
    }
}
