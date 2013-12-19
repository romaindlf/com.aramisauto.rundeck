<?php
namespace AramisAuto\Rundeck\Cli;

use AramisAuto\Rundeck\Cli\Command\PurgeCommand;

class Application extends \Symfony\Component\Console\Application
{
    public function __construct()
    {
        parent::__construct('rundeck-helper', '@version@');
    }

    protected function getDefaultCommands()
    {
        $commands = parent::getDefaultCommands();
        $commands[] = new PurgeCommand();

        return $commands;
    }
}
