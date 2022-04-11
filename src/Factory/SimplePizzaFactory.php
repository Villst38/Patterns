<?php

namespace Vadim\Patterns\Factory;

use Vadim\Patterns\Factory\Pizza\CheesePizza;

/**
 * Простая Фабрика пицц
 */
class SimplePizzaFactory
{
    public static function createPizza(string $type): Pizza
    {
        switch ($type) {
            case "cheese":
                $pizza = new Pizza\CheesePizza();
                break;
            case "clam":
                $pizza = new Pizza\ClamPizza();
                break;
            case "pepperoni":
                $pizza = new Pizza\PepperoniPizza();
                break;
            case "veggie":
                $pizza = new Pizza\VeggiePizza();
                break;
        }

        return $pizza;
    }
}