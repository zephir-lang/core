<?php

include_once __DIR__ . '/vendor/autoload.php';

ini_set('display_errors', 1);
error_reporting(-1);

$compiler = new \Zephir\Application();
$compiler->run();