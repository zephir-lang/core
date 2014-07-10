<?php

namespace Zephir\Parser;

use Zephir\Definition\ClassDefinition;
use Zephir\FileCompiler;
use Zephir\Parser;

class NativeZephir implements ParserInterface
{
    protected $file;

    public function __construct(FileCompiler $parsedFile)
    {
        $this->file = $parsedFile;
    }

    /**
     * Parser zep file to AST
     *
     * @throws Exception
     */
    public function parse()
    {
        $json = $this->parseFile();

        foreach($json as $row) {
            switch($row->type) {
                case 'class':
                    $classDefinition = new ClassDefinition($row);

                    $this->file->addClass($classDefinition);
                    break;
            }
        }
    }

    public function parseFile()
    {
        system(ZEPHIRPATH . '/bin/zephir-parser ' . $this->file->getFilepath() . ' > ' . $this->file->getCachePath());

        $file = file_get_contents($this->file->getCachePath());
        $json = json_decode($file);

        return $json;
    }
} 