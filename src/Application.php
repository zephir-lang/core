<?php

namespace Zephir;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Zephir\Command;

class Application extends \Symfony\Component\Console\Application
{
    const VERSION = '1.0-dev';

    public $compiler = null;

    public function __construct()
    {
        parent::__construct('Zephir', self::VERSION);

        $this->addCommands(array(
            new Command\BuildCommand(),
        ));
    }

    public function getCompiler()
    {
        if (!is_null($this->compiler)) {
            return $this->compiler;
        }

        return $this->compiler = new Compiler(
            new Finder(__DIR__, 'zep', __DIR__ . '/output'),
            new FilePreprocessor(),
            new Generator\CCode()
        );
    }

    public function getHelp()
    {
        return <<<EOL
 _____              __    _
/__  /  ___  ____  / /_  (_)____
  / /  / _ \/ __ \/ __ \/ / ___/
 / /__/  __/ /_/ / / / / / /
/____/\___/ .___/_/ /_/_/_/
         /_/
EOL;
    }
} 