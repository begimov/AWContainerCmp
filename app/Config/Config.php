<?php

namespace App\Config;

use App\Config\Loaders\Loader;

class Config
{
    protected $config = [
        'app' => [
            'name' => 'appname'
        ],
        'db' => [
            'host' => '127.0.0.1',
            'database' => 'awcontainer',
            'username' => 'root',
            'password' => 'password',
        ]
        ];

        protected $cache = [];

        public function __construct()
        {
            # code...
        }

        public function get($key, $default = null)
        {
            if ($this->existsInCache($key)) {
                return $this->fromCache($key);
            }

            return $this->addToCache($key, $this->extractFromConfig($key) !== null ? $this->extractFromConfig($key) : $default);
        }

        public function addToCache()
        {
            # code...
        }
}
