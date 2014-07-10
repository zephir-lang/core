<?php

namespace Zephir\Definition;

/**
 * @author Nikita Gusakov <dev@nkt.me>
 */
trait ModifierTrait
{
    /**
     * @var string[]
     */
    protected $modifiers = [];

    public function setModifiers(array $modifiers)
    {
        $this->modifiers = $modifiers;
    }

    public function getModifiers()
    {
        return $this->modifiers;
    }

    public function isPublic()
    {
        return in_array('public', $this->modifiers);
    }

    public function isPrivate()
    {
        return in_array('private', $this->modifiers);
    }

    public function isProtected()
    {
        return in_array('protected', $this->modifiers);
    }

    public function isAbstract()
    {
        return in_array('abstract', $this->modifiers);
    }

    public function isFinal()
    {
        return in_array('final', $this->modifiers);
    }

    public function isStatic()
    {
        return in_array('static', $this->modifiers);
    }
}
