<?php

namespace Zephir;

class Configuration {
    private $config = array(
        'parser' => array(
            'cacheDir' => '.cache'
        )
    );

    /**
     * Get option with parser namespace
     *
     * @param $name
     * @return mixed
     */
    public function getParser($name)
    {
        return $this->config['parser'][$name];
    }

    /**
     * Get option by name or name with namespace
     *
     * @param $name
     * @param null $namespace
     * @return mixed
     */
    public function get($name, $namespace = null)
    {
        if (is_null($namespace)) {
            return $this->config[$name];
        }

        return $this->config[$namespace][$name];
    }
}
