<?php

namespace Zephir\Preprocessor;

use Zephir\Definition;
use Zephir\Preprocessor;

/**
 * @author Nikita Gusakov <dev@nkt.me>
 */
class ZephirPreprocessor implements Preprocessor
{
    /**
     * @var string
     */
    protected $parserPath;

    public function __construct($parserPath)
    {
        if (!is_executable($parserPath)) {
            throw new \InvalidArgumentException('Zephir parser not executable');
        }
        $this->parserPath = $parserPath;
    }

    /**
     * {@inheritdoc}
     */
    public function parse($code)
    {
        $output = [];
        $code = 0;
        exec($this->parserPath, $output, $code);
        $output = json_decode(join('', $output));
        if ($code === 0) {
            return $output;
        } else {
            throw new \Exception('Parse error');
        }
    }
}
