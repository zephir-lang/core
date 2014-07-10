<?php

namespace Zephir\Parser;

use Zephir\ParsedFile;

interface Parser
{
    /**
     * @return ParsedFile
     */
    public function parse(ParsedFile $parsedFile);
}
