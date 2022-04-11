<?php

namespace Vadim\Patterns\Factory\Store;

use Vadim\Patterns\Factory\Factory\ChicagoPizzaIngredientFactory;
use Vadim\Patterns\Factory\Factory\NYPizzaIngredientFactory;
use Vadim\Patterns\Factory\Pizza;

class ChicagoPizzaStore extends \Vadim\Patterns\Factory\PizzaStore
{

    public function creatPizza(string $type): ?Pizza
    {
        $pizza = null;
        $ingredientFactory = new ChicagoPizzaIngredientFactory();

        switch ($type) {
            case "cheese":
                $pizza = new Pizza\CheesePizza($ingredientFactory);
                $pizza->setName('Chicago сырная пицца');
                break;
            case "clam":
                $pizza = new Pizza\ClamPizza($ingredientFactory);
                $pizza->setName('Chicago пицца с моллюсками');
                break;
            case "pepperoni":
                $pizza = new Pizza\PepperoniPizza($ingredientFactory);
                $pizza->setName('Chicago пицца пепперони');
                break;
            case "veggie":
                $pizza = new Pizza\VeggiePizza($ingredientFactory);
                $pizza->setName('Chicago веганская пицца');
                break;
        }

        return $pizza;
    }
}