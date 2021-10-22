<?php

namespace Styde;

class Traslator
{
    public static $messages = [];

    public function __construct(array $messages)
    {
        static::$messages = $messages;
        var_dump ($messages);
    }

    public function get($key, array $params = array())
    {
        if (! $this->has($key)){
            return "[$key]";
        }

        return $this->replaceParams(static::messages[$key], $params);
    }

    public function has($key)
    {
        return isset($this->messages[$key]);
    }

    public function replaceParams($message, array $params)
    {
        foreach ($params as $key => $value) {
            $message = str_replace(":$key", $value, $message);
        }

        return $message;
    }
}