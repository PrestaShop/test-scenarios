<?php
namespace Console\App\Command;

use Console\App\Service\API\TestRail;
use Symfony\Component\Console\Command\Command;
 
abstract class AbstractTestRailCommand extends Command
{
    /**
     * @var TestRail;
     */
    protected $testRailClient;

    protected function getProjectId(): ?int
    {
        $projects = $this->testRailClient->send_get('get_projects');
        foreach ($projects as $value) {
            if ($value['name'] === static::PROJECT_NAME) {
                return $value['id'];
            }
        }
        return null;
    }

    protected function getSuites(int $projectId): array
    {
        $data = $this->testRailClient->send_get('get_suites/' . $projectId);
        $suites = [];
        foreach ($data as $value) {
            $suites[$value['id']] = $value['name'];
        }
        return $suites;
    }

    protected function getCases(int $projectId, int $idSuite, int $idSection = null): array
    {
        $path = 'get_cases/' . $projectId . '&suite_id=' . $idSuite;
        if (!empty($idSection)) {
            $path .= '&section_id=' . $idSection;
        }
        return $this->testRailClient->send_get($path);
    }

    protected function getSections(int $projectId, int $idSuite): array
    {
        return $this->testRailClient->send_get('get_sections/' . $projectId . '&suite_id=' . $idSuite);
    }

    protected function slugify(string $text): string
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

    protected function renderCase(array $case, int $weight = null): string
    {
        $custom_preconds = $case['custom_preconds'];
        $custom_preconds = str_replace("\r\n", '\\' . PHP_EOL, $custom_preconds);
        $custom_preconds = str_replace("\\" . PHP_EOL . '-', PHP_EOL . '-', $custom_preconds);
        $custom_preconds = trim($custom_preconds, " \\-" . PHP_EOL);

        $custom_steps = $case['custom_steps'];
        $custom_steps = str_replace(PHP_EOL, '\\' . PHP_EOL, $custom_steps);
        $custom_steps = str_replace("\\" . PHP_EOL . '-', PHP_EOL . '-', $custom_steps);
        $custom_steps = trim($custom_steps, " \\-" . PHP_EOL);

        $custom_expected = $case['custom_expected'];
        $custom_expected = str_replace(PHP_EOL, '\\' . PHP_EOL, $custom_expected);
        $custom_expected = str_replace("\\" . PHP_EOL . '-', PHP_EOL . '-', $custom_expected);
        $custom_expected = trim($custom_expected, " \\-" . PHP_EOL);

        $custom_mission = $case['custom_mission'];
        $custom_mission = str_replace(PHP_EOL, '\\' . PHP_EOL, $custom_mission);
        $custom_mission = str_replace("\\" . PHP_EOL . '-', PHP_EOL . '-', $custom_mission);
        $custom_mission = trim($custom_mission, " \\-" . PHP_EOL);

        $custom_goals = $case['custom_goals'];
        $custom_goals = str_replace(PHP_EOL, '\\' . PHP_EOL, $custom_goals);
        $custom_goals = str_replace("\\" . PHP_EOL . '-', PHP_EOL . '-', $custom_goals);
        $custom_goals = trim($custom_goals, " \\-" . PHP_EOL);

        $content = '---' . PHP_EOL
            . 'title: ' . $case['title'] . PHP_EOL
            . 'weight: ' .$case['display_order'] . PHP_EOL
            . '---' . PHP_EOL;
        if (!empty($custom_preconds)) {
        $content .= PHP_EOL
            . '## Preconditions' . PHP_EOL
            . PHP_EOL
            . $custom_preconds. PHP_EOL;
        }

        switch($case['template_id']) {
            case 1:
                if (!empty($custom_steps)) {
                    $content .= '## Steps' . PHP_EOL . PHP_EOL . $custom_steps. PHP_EOL . PHP_EOL;
                }
                if (!empty($case['custom_expected'])) {
                    $content .= '## Expected result'. PHP_EOL . PHP_EOL . $custom_expected. PHP_EOL . PHP_EOL;
                }
            break;
            case 2:
                $case['custom_steps_separated'] = is_null($case['custom_steps_separated']) ? [] : $case['custom_steps_separated'];

                if (!empty($case['custom_steps_separated'])) {
                    $content .= '## Steps' . PHP_EOL;
                    $content .= '| ' . 'Step Description'
                        . ' | ' . 'Expected result'
                        . ' |'  . PHP_EOL;

                    $content .= '| ----- | ----- |'  . PHP_EOL;
                    foreach ($case['custom_steps_separated'] as $step) {
                        $stepContent = $step['content'];
                        $stepContent = trim($stepContent);
                        $stepContent = str_replace("\r\n", '<br>', $stepContent);
                        $stepContent = str_replace(PHP_EOL, '<br>', $stepContent);
                        $stepContent = trim($stepContent, " \\-");

                        $stepExpected = $step['expected'];
                        $stepExpected = trim($stepExpected);
                        $stepExpected = str_replace("\r\n", '<br>', $stepExpected);
                        $stepExpected = str_replace(PHP_EOL, '<br>', $stepExpected);
                        $stepExpected = trim($stepExpected, " \\-");
                        
                        $content .= '| ' . $stepContent . ' | ' . $stepExpected . ' |'  . PHP_EOL;
                    }
                }
            break;
            case 3:
                if (!empty($custom_mission)) {
                    $content .= '## Mission' . PHP_EOL . PHP_EOL . $custom_mission. PHP_EOL . PHP_EOL;
                }
                if (!empty($custom_goals)) {
                    $content .= '## Goals'. PHP_EOL . PHP_EOL . $custom_goals. PHP_EOL . PHP_EOL;
                }
            break;
            default:
                throw new \Exception('Template not defined : ' . $case['template_id']);
        }

        return $content;
    }

    protected function getParentContent(string $suiteName, bool $withTitle = false): string
    {
        return '---
title: ' . $suiteName . '
menuTitle: ' . $suiteName . ' 
geekdocFlatSection: true
---

{{% children ' . ($withTitle ? 'titlePages="Tests" titleSections="Categories" ' : '') . '%}}';
    }
}
