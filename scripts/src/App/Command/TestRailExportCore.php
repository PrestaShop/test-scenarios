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

            $cases = [];
            $offset = 0;
            do {
                $cases = array_merge($cases, $this->getCases($projectId, $suiteId, null, $offset));
                $offset += 250;
            } while(count($cases) % 250 == 0);

            foreach ($sections as $curSection) {
                $this->generatePages($projectId, $suiteId, $curSection, $dirName, $cases);
            }
        }
        
        $output->writeLn(['', 'Output generated in ' . (time() - $time) . 's with ' . $this->testRailClient->getRequestsCount() . ' requests.']);
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

    private function generatePages(int $projectId, int $suiteId, array $section, string $path, array $cases): void
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
        $sectionId = $section['id'];
        $casesSection = array_filter($cases, function(array $item) use($sectionId) {
            return $item['section_id'] == $sectionId;
        });
        foreach ($casesSection as $key => $case) {
            $content = $this->renderCase($case, $key);

            file_put_contents($dirName . $this->slugify($case['title']). '.md', $content);
        }

        // Children
        if (!empty($section['children'])) {
            foreach ($section['children'] as $childSection) {
                $this->generatePages($projectId, $suiteId, $childSection, $dirName, $cases);
            }
        }
    }
}
