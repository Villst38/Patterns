<?php

namespace Vadim\Patterns\Factory\Store;

use Vadim\Patterns\Factory\Factory\CaliforniaPizzaIngredientFactory;
use Vadim\Patterns\Factory\Factory\NYPizzaIngredientFactory;
use Vadim\Patterns\Factory\Pizza;

class CaliforniaPizzaStore extends \Vadim\Patterns\Factory\PizzaStore
{

    public function creatPizza(string $type): ?Pizza
    {
        $pizza = null;
        $ingredientFactory = new CaliforniaPizzaIngredientFactory();

        switch ($type) {
            case "cheese":
                $pizza = new Pizza\CheesePizza($ingredientFactory);
                $pizza->setName('California сырная пицца');
                break;
            case "clam":
                $pizza = new Pizza\ClamPizza($ingredientFactory);
                $pizza->setName('California пицца с моллюсками');
                break;
            case "pepperoni":
                $pizza = new Pizza\PepperoniPizza($ingredientFactory);
                $pizza->setName('California пицца пепперони');
                break;
            case "veggie":
                $pizza = new Pizza\VeggiePizza($ingredientFactory);
                $pizza->setName('California веганская пицца');
                break;
        }

        return $pizza;
    }
}