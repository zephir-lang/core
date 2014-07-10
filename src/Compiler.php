<?php

namespace Zephir;

/**
 * @author Nikita Gusakov <dev@nkt.me>
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
     * @var Definition\Definition[]
     */
    private $definitions = [];

    public function __construct(Finder $finder, Preprocessor $preprocessor, Generator $generator)
    {
        $this->finder = $finder;
        $this->preprocessor = $preprocessor;
        $this->generator = $generator;
    }

    public function parse()
    {
        foreach ($this->finder->getInputFiles() as $file) {
            $code = $this->finder->load($file->getPathname());
            foreach ($this->preprocessor->parse($code) as $definition) {
                $this->definitions[] = $definition;
            }
        }
    }

    public function compile()
    {
        $this->generator->setDefinitions($this->definitions);
        foreach ($this->definitions as $definition) {
            foreach ($this->generator->generate($definition) as $name => $code) {
                $this->finder->put($name, $code);
            }
        }
    }
}
