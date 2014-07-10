<?php

namespace Zephir;

use Zephir\Definition\ClassDefinition;
use Zephir\Definition\FunctionDefinition;

class ParsedFile
{
    /**
     * @var ClassDefinition[]
     */
    private $classes = [];

    /**
     * @var FunctionDefinition[]
     */
    private $functions = [];

    /**
     * File path
     *
     * @var array
     */
    private $filepath;

    /**
     * @return ClassDefinition
     */
    public function getClasses()
    {
        return $this->classes;
    }


    /**
     * @param ClassDefinition $classes
     */
    public function addClass(ClassDefinition $class)
    {
        $this->classes[] = $class;
    }

    /**
     * @return FunctionDefinition[]
     */
    public function getFunctions()
    {
        return $this->functions;
    }

    /**
     * @param FunctionDefinition[] $functions
     */
    public function addFunction(FunctionDefinition $function)
    {
        $this->functions[] = $function;
    }

    /**
     * @return null|string
     */
    public function getFilepath()
    {
        return $this->filepath['dirname'] . DIRECTORY_SEPARATOR . $this->filepath['basename'];
    }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->filepath['filename'];
    }

    public function getCachePath()
    {
        return ZEPHIRPATH . '/.cache/' . $this->getFileName() . '.json';
    }

    public function __construct($filepath)
    {
        if (!is_file($filepath)) {
            throw new Exception('Couldn`t find file by path: ' . $filepath);
        }

        if (!is_readable($filepath)) {
            throw new Exception('File is not readable: ' . $filepath);
        }

        $this->filepath = pathinfo($filepath);
    }
}
