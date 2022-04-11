<?php

namespace Vadim\Patterns\Factory;

use Vadim\Patterns\Factory\Store\ChicagoPizzaStore;
use Vadim\Patterns\Factory\Store\NYPizzaStore;

class PizzaTestDrive
{
    public static function main()
    {
        $store = new NYPizzaStore();
        $store->orderPizza('cheese');

        $store = new ChicagoPizzaStore();
        $store->orderPizza('clam');
    }
}