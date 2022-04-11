<?php

namespace Vadim\Patterns\Factory\Store;

use Vadim\Patterns\Factory\Factory\NYPizzaIngredientFactory;
use Vadim\Patterns\Factory\Pizza;
use Vadim\Patterns\Factory\PizzaStore;

class NYPizzaStore extends PizzaStore
{
    public function creatPizza(string $type): ?Pizza
    {
        $pizza = null;
        $ingredientFactory = new NYPizzaIngredientFactory();

        switch ($type) {
            case "cheese":
                $pizza = new Pizza\CheesePizza($ingredientFactory);
                $pizza->setName('NY сырная пицца');
                break;
            case "clam":
                $pizza = new Pizza\ClamPizza($ingredientFactory);
                $pizza->setName('NY пицца с моллюсками');
                break;
            case "pepperoni":
                $pizza = new Pizza\PepperoniPizza($ingredientFactory);
                $pizza->setName('NY пицца пепперони');
                break;
            case "veggie":
                $pizza = new Pizza\VeggiePizza($ingredientFactory);
                $pizza->setName('NY веганская пицца');
                break;
        }

        return $pizza;
    }
}