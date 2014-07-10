<?php

namespace Zephir\Parser;

use Zephir\ParsedFile;

class NativeZephir implements Parser
{
    /**
     * Parser zep file to AST
     *
     * @param ParsedFile $parsedFile
     * @return void|ParsedFile
     * @throws Exception
     */
    public function parse(ParsedFile $parsedFile)
    {
        $filepath = $parsedFile->getFilepath();

        if (!is_file($filepath)) {
            throw new Exception('Couldn`t find file by path: ' . $filepath);
        }

        if (!is_readable($filepath)) {
            throw new Exception('File is not readable: ' . $filepath);
        }
    }
} 