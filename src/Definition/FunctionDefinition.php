<?php

namespace Zephir\Definition;

/**
 * @author Nikita Gusakov <dev@nkt.me>
 */
class FunctionDefinition extends Definition
{
    /**
     * @var VariableDefinition[]
     */
    private $arguments = [];
    /**
     * @var string
     */
    private $returnTypes = [];
    /**
     * @var string
     */
    private $code;

    public function addArgument(VariableDefinition $argument)
    {
        $this->arguments[] = $argument;
    }

    public function getArguments()
    {
        return $this->arguments;
    }

    public function addReturnType($type)
    {
        $this->returnTypes[] = $type;
    }

    public function getReturnTypes()
    {
        return $this->returnTypes;
    }

    public function hasReturnType($type)
    {
        return in_array($type, $this->returnTypes);
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getCode()
    {
        return $this->code;
    }
}
