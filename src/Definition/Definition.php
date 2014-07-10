<?php

namespace Zephir\Definition;

/**
 * @author Nikita Gusakov <dev@nkt.me>
 */
abstract class Definition
{
    /**
     * @var string
     */
    protected $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
