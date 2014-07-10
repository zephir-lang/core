<?php

/*
 +--------------------------------------------------------------------------+
 | Zephir Language                                                          |
 +--------------------------------------------------------------------------+
 | Copyright (c) 2013-2014 Zephir Team and contributors                     |
 +--------------------------------------------------------------------------+
 | This source file is subject the MIT license, that is bundled with        |
 | this package in the file LICENSE, and is available through the           |
 | world-wide-web at the following url:                                     |
 | http://zephir-lang.com/license.html                                      |
 |                                                                          |
 | If you did not receive a copy of the MIT license and are unable          |
 | to obtain it through the world-wide-web, please send a note to           |
 | license@zephir-lang.com so we can mail you a copy immediately.           |
 +--------------------------------------------------------------------------+
*/

namespace Zephir\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * BuildCommand
 * @author Gusakov Nikita <dev@nkt.me>
 */
class BuildCommand extends \Symfony\Component\Console\Command\Command
{
    public function configure()
    {
        $this->setName('build');
        $this->setDescription('Generates, compile and install extension');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $this->getApplication()->getCompiler()
            ->parse()
            ->compile();
    }
}