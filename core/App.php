<?php

class App
{

    protected static $registry;

    public static function bind($key, $values)
    {
        static::$registry[$key] = $values;
    }

    
    public static function get($key)
    {

        if (!array_key_exists($key, static::$registry)) {

            throw new Exception("No {$key} bound in the Container");
        }
        return static::$registry[$key];
    }
}
