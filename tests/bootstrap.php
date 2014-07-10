<?php

define('ZEPHIRPATH', realpath(__DIR__ . '/../'));

$autoload = require __DIR__ . '/../vendor/autoload.php';
$autoload->addPsr4('ZephirTest\\', __DIR__, true);
