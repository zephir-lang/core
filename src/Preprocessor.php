<?php

namespace Zephir;

/**
 * @author Nikita Gusakov <dev@nkt.me>
 */
interface Preprocessor
{
    /**
     * @param string $filename
     *
     * @return Definition\Definition[]
     */
    public function parse($filename);
}
