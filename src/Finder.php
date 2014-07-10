<?php

namespace Zephir;

/**
 * @author Nikita Gusakov <dev@nkt.me>
 */
class Finder
{
    /**
     * @var string
     */
    private $inputDir;
    /**
     * @var string
     */
    private $inputExt;
    /**
     * @var string
     */
    private $outputDir;

    /**
     * @param string $inputDir
     * @param string $inputExt
     * @param string $outputDir
     */
    public function __construct($inputDir, $inputExt, $outputDir)
    {
        $this->inputDir = $inputDir;
        $this->inputExt = $inputExt;
        $this->outputDir = $outputDir;
    }

    public function put($filename, $content)
    {
        $path = $this->normalizePath($this->outputDir . '/' . $filename);
        file_put_contents($path, (string)$content);
    }

    public function load($filename)
    {
        return file_get_contents($this->normalizePath($filename));
    }

    /**
     * @return \SplFileInfo[]
     */
    public function getInputFiles()
    {
        $it = new \RecursiveDirectoryIterator($this->inputDir, \FilesystemIterator::SKIP_DOTS);
        $it = new \RecursiveIteratorIterator($it);
        $it = new \CallbackFilterIterator($it, function (\SplFileInfo $file) {
            return $file->getExtension() == $this->inputExt;
        });

        return $it;
    }

    protected function normalizePath($path)
    {
        $path = preg_replace('~\/+~', '/', $path);
        $path = str_replace('/', DIRECTORY_SEPARATOR, $path);

        return $path;
    }
}
