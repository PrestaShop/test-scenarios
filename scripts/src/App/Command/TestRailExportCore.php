<?php
namespace Console\App\Command;

use Console\App\Service\API\TestRail;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Helper\TableSeparator;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
 
class TestRailExportCore extends AbstractTestRailCommand
{
    public const PROJECT_NAME = 'Core';

    public const OUTPUT_DIR = 'src/content/core/';

    protected function configure()
    {
        $this->setName('testrail:export:core')
            ->setDescription('TestRail : Export Core')
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
        $suites = array_filter($suites, function(string $item) {
            return strpos($item, 'Functional ') === 0;
        });

        foreach ($suites as $suiteId => $suiteName) {
            $dirName = self::OUTPUT_DIR . $this->slugify($suiteName) . DIRECTORY_SEPARATOR;

            // Create directory
            if (!is_dir($dirName)) {
                mkdir($dirName);
            }

            // Create index.md
            $content = $this->getParentContent($suiteName, true);
            file_put_contents($dirName . '_index.md', $content);

            // Sections
            $sections = $this->getSections($projectId, $suiteId);

            $sectionsParentId = array();
            foreach ($sections as $section) {
                $parentId = $section['parent_id'];
                if (!isset($sectionsParentId[$parentId])) {
                    $sectionsParentId[$parentId] = [];
                }
                $sectionsParentId[$parentId][] = $section;
            }
            $sections = $this->createSectionsTree($sectionsParentId, [$sections[0]]);

            foreach ($sections as $curSection) {
                $this->generatePages($projectId, $suiteId, $curSection, $dirName);
            }
        }
        
        $output->writeLn(['', 'Output generated in ' . (time() - $time) . 's.']);
    }

    protected function createSectionsTree(array $list, array $parent): array
    {
        $tree = [];
        foreach ($parent as $k => $v){
            if(isset($list[$v['id']])){
                $v['children'] = $this->createSectionsTree($list, $list[$v['id']]);
            }
            $tree[] = $v;
        } 
        return $tree;
    }

    private function generatePages(int $projectId, int $suiteId, array $section, string $path): void
    {
        $suiteName = $section['name'];

        $dirName =  $path . $this->slugify($suiteName) . DIRECTORY_SEPARATOR;
        // Clean directory
        $this->delTree($dirName);
        // Create directory
        if (!is_dir($dirName)) {
            mkdir($dirName);
        }

        // Create index.md
        $content = $this->getParentContent($suiteName, true);
        file_put_contents($dirName . '_index.md', $content);

        // Cases
        $cases = $this->getCases($projectId, $suiteId, $section['id']);
        foreach ($cases as $key => $case) {
            $content = $this->renderCase($case, $key);

            file_put_contents($dirName . $this->slugify($case['title']). '.md', $content);
        }

        // Children
        if (!empty($section['children'])) {
            foreach ($section['children'] as $childSection) {
                $this->generatePages($projectId, $suiteId, $childSection, $dirName);
            }
        }
    }
}
