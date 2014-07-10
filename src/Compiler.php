<?php

namespace Zephir;

/**
 * @author Nikita Gusakov <dev@nkt.me>
 * @author Dmitry Patsura <zaets28rus@gmail.com>
 */
class Compiler
{
    /**
     * @var Finder
     */
    private $finder;
    /**
     * @var Preprocessor
     */
    private $preprocessor;
    /**
     * @var Generator
     */
    private $generator;

    /**
     * @var FileCompiler[]
     */
    private $files = [];

    public function __construct(Finder $finder, Preprocessor $preprocessor, $generator)
    {
        $this->finder = $finder;
        $this->preprocessor = $preprocessor;
        $this->generator = $generator;
    }

    public function parse()
    {
        foreach ($this->finder->getInputFiles() as $file) {
            $code = $this->finder->load($file->getPathname());
        }

        return $this;
    }

    public function compile()
    {
        /**
         * @todo
         */
    }
}
