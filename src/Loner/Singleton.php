<?php

namespace Vadim\Patterns\Loner;

class Singleton
{
    /** @var \Vadim\Patterns\Loner\Singleton */
    private static $uniqueInstance;

    private function __construct() {
        dump('Я создан');
    }

    // Если язык позволяет использовать многопоточность, будь осторожнее, есть вероятность создания двух и более
    // экземпляров
    public static function getInstance(): Singleton
    {
        if (is_null(static::$uniqueInstance)) {
            static::$uniqueInstance = new Singleton();
        }

        return static::$uniqueInstance;
    }
}