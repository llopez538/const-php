<?php

namespace Styde;

class Traslate
{
    static $tralator;

    public static function SetTralaste(array $messages)
    {
        static::$tralator = new Traslator($messages);
    }

    public static function get($key, array $params = array())
    {
        static::$tralator->get($key, $params);  
    }
}