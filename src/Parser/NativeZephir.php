<?php

namespace Zephir\Parser;

use Zephir\ParsedFile;
use Zephir\Parser;

class NativeZephir implements ParserInterface
{
    protected $file;

    public function __construct(ParsedFile $parsedFile)
    {
        $this->file = $parsedFile;
    }

    /**
     * Parser zep file to AST
     *
     * @param ParsedFile $parsedFile
     * @return void|ParsedFile
     * @throws Exception
     */
    public function parse()
    {
        system('/bin/zephir-parser ' . $this->file->getFilepath() . ' > ' . $this->file->getCachePath());
    }
} 