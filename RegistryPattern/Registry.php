<?php
class Registry
{
    private static $items = [];

    public static function get($key)
    {
        return self::$items[$key];
    }

    public static function set($key, $value)
    {
        self::$items[$key] = $value;
    }
}
