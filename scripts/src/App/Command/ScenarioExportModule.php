<?php
namespace Console\App\Command;
 
class ScenarioExportModule extends AbstractCommand
{
    /** @var string */
    protected $projectName = 'Modules';

    /** @var string */
    protected $name = 'scenario:export:module';

    /** @var string */
    protected $description = 'Scenario QA : Export Module';

    protected $pageWeight = 2;
}
