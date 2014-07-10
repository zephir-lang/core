<?php

namespace Zephir;

/**
 * @author Nikita Gusakov <dev@nkt.me>
 */
interface Preprocessor
{
    /**
     * @param string $code
     *
     * @return Definition\Definition[]
     */
    public function parse($code);
}
