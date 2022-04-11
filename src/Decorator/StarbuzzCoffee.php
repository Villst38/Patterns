<?php

namespace Vadim\Patterns\Decorator;

use Vadim\Patterns\Decorator\Beverage\DarkRoast;
use Vadim\Patterns\Decorator\Beverage\Espresso;
use Vadim\Patterns\Decorator\Beverage\HouseBlend;
use Vadim\Patterns\Decorator\Condiment\Mocha;
use Vadim\Patterns\Decorator\Condiment\Soy;
use Vadim\Patterns\Decorator\Condiment\Whip;

class StarbuzzCoffee
{
    public static function main()
    {
        $beverage = new Espresso();
        $beverage->setSize('GRANDE');
        echo "{$beverage->getDescription()} $ {$beverage->cost()} <br>";

        $beverage = new DarkRoast();
        $beverage = new Mocha($beverage);
        $beverage = new Mocha($beverage);
        $beverage = new Whip($beverage);
        echo "{$beverage->getDescription()} $ {$beverage->cost()} <br>";

        $beverage = new HouseBlend();
        $beverage = new Soy($beverage);
        $beverage = new Mocha($beverage);
        $beverage = new Whip($beverage);
        echo "{$beverage->getDescription()} $ {$beverage->cost()} <br>";
    }
}