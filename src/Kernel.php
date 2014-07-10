<?php

namespace Zephir;

use Symfony\Component\Console\Application;
use Zephir\Command;

class Kernel extends Application
{
    const VERSION = '1.0-dev';

    public function __construct()
    {
        parent::__construct('Zephir', self::VERSION);

        $this->addCommands(array(
            new Command\BuildCommand(),
        ));
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