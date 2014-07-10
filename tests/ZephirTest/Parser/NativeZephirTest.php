<?php

namespace ZephirTest\Parser;

use Zephir\ParsedFile;

class NativeZephirTest extends \PHPUnit_Framework_TestCase
{
    public function testParse()
    {
        $file = new ParsedFile(realpath(__DIR__ . '/../../../') . '/test/arithmetic.zep');

        $zephirParser = new \Zephir\Parser\NativeZephir($file);
        $zephirParser->parse();
    }
} 