<?php

include_once __DIR__ . '/vendor/autoload.php';

$compiler = new \Zephir\Compiler();
echo $compiler->getHelp();