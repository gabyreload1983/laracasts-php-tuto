<?php

namespace Core;

class App {
    protected static $container;

    public static function setContainer($continer)
    {
        static::$container = $continer;
    }

    public static function container()
    {
        return static::$container;
    }

    public static function bind($key, $resolver)
    {
        static::container()->bind($key, $resolver);
    }

    public static function resolve($key)
    {
        return static::container()->resolve($key);
    }
}