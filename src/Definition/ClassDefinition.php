<?php

namespace Zephir\Definition;

/**
 * @author Nikita Gusakov <dev@nkt.me>
 */
class ClassDefinition extends Definition
{
    use ModifierTrait;
    /**
     * @var string
     */
    private $namespace;
    /**
     * @var string
     */
    private $parent;
    /**
     * @var string[]
     */
    private $interfaces = [];
    /**
     * @var VariableDefinition[]
     */
    private $constants = [];
    /**
     * @var PropertyDefinition[]
     */
    private $properties = [];
    /**
     * @var MethodDefinition[]
     */
    private $methods = [];

    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
    }

    public function getNamespace()
    {
        return $this->namespace;
    }

    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    public function getParent()
    {
        return $this->parent;
    }

    public function hasConstant($name)
    {
        return isset($this->constants[$name]);
    }

    public function addConstant(VariableDefinition $constant)
    {
        $this->constants[$constant->getName()] = $constant;
    }

    public function getConstants()
    {
        return $this->constants;
    }

    public function hasProperty($name)
    {
        return isset($this->properties[$name]);
    }

    public function addProperty(PropertyDefinition $property)
    {
        $this->properties[$property->getName()] = $property;
    }

    public function getProperties()
    {
        return $this->properties;
    }

    public function hasMethod($name)
    {
        return isset($this->methods[$name]);
    }

    public function addMethod(MethodDefinition $method)
    {
        $this->methods[$method->getName()] = $method;
    }

    public function getMethods()
    {
        return $this->methods;
    }

    public function addInterface($interface)
    {
        $this->interfaces[] = $interface;
    }

    public function getInterfaces()
    {
        return $this->interfaces;
    }
}
