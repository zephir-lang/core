<?php

namespace Zephir\Definition;

class ClassDefinition
{
    /**
     * @var string|null
     */
    private $docblock;

    private $methods = [];

    private $ast;

    private $name;

    /***
     * @param $ast
     */
    public function __construct($ast)
    {
        $this->ast = $ast;

        $this->name = $ast->name;
    }
}
