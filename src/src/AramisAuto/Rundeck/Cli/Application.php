<?php
namespace AramisAuto\Rundeck\Cli;

use AramisAuto\Rundeck\Cli\Command\PurgeCommand;

class Application extends \Symfony\Component\Console\Application
{
    public function __construct()
    {
        parent::__construct('rundeck-helper', '0.1.1');
    }

    protected function getDefaultCommands()
    {
        $commands = parent::getDefaultCommands();
        $commands[] = new PurgeCommand();

        return $commands;
    }
}
