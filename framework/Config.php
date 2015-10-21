<?php

namespace Dreamcoil;

class Config
{
    private $config;

    public function __construct()
    {

        $file = __DIR__ . '/../app/_conf.php';

        $this->config = include $file;

    }

    public function get($key)
    {

        if(isset( $this->config[$key])) return $this->config[$key];

        $file = __DIR__ . '/../app/_conf.php';

        $config = include $file;

        if(isset($config[$key])) return $config[$key];

        return $key;

    }

}
