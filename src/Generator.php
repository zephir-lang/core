<?php

namespace Zephir;

use Zephir\Definition\Definition;

/**
 * @author Nikita Gusakov <dev@nkt.me>
 */
interface Generator
{
    /**
     * @param Definition[] $definitions
     */
    public function setDefinitions(array $definitions);

    /**
     * @param Definition $definition
     *
     * @return string[]
     */
    public function generate($definition);
}
