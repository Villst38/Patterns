<?php

namespace Vadim\Patterns\Loner;

class LonerTest
{
    public static function main(): void
    {
        $singleton = Singleton::getInstance();
        dump($singleton);
        $singleton = Singleton::getInstance();
        dump($singleton);

        $boiler = ChocolateBoiler::getInstance();
        dump($boiler->isEmpty());
        $boiler->fill();
        dump($boiler->isEmpty());
        $boiler2 = ChocolateBoiler::getInstance();
        dump($boiler2->isEmpty());
    }
}