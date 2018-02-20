<?php

namespace App\Container;

class Container
{
    protected $items = [];

    public function set($name, callable $closure)
    {
        $this->items[$name] = $closure;
    }

    public function get($name)
    {
        return $this->items[$name]();
    }
}
