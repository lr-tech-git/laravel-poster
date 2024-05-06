<?php

namespace App\Enum;

use ReflectionClass;

abstract class BaseEnum {

    protected static $values = [];

    public static function getAll(): array
    {
        $class = get_called_class();
        
        if (!isset(static::$values[$class])) {
            $reflection = new ReflectionClass($class);
            static::$values[$class] = $reflection->getConstants();
        }

        return static::$values[$class];
    }

    public static function getOptions(): array
    {
        $options = [];
        foreach (static::getAll() as $k => $v) {
            $options[] = [
                'id' => $k,
                'title' => $v
            ];
        }
        return $options;
    }
}