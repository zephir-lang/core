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
}