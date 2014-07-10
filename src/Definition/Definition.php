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
    private $file;
    /**
     * @var int
     */
    private $line;
    /**
     * @var string
     */
    private $name;

    /**
     * @param string $file
     * @param int    $line
     */
    public function __construct($file, $line)
    {
        $this->file = $file;
        $this->line = $line;
    }

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
