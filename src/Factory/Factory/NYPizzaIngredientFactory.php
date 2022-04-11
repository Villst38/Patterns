<?php

namespace Vadim\Patterns\Factory\Factory;

use Vadim\Patterns\Factory\Ingredients;

class NYPizzaIngredientFactory implements PizzaIngredientFactory
{

    public function createDough(): Ingredients\Dough
    {
        return new Ingredients\ThinCrustDough();
    }

    public function createSauce(): Ingredients\Sauce
    {
        return new Ingredients\MarinaraSauce();
    }

    public function createCheese(): Ingredients\Cheese
    {
        return new Ingredients\ReggianoCheese();
    }

    public function createVeggies(): array
    {
        return [
            new Ingredients\Garlic(),
            new Ingredients\Onion(),
            new Ingredients\Mushroom(),
            new Ingredients\RedPepper(),
        ];
    }

    public function createPepperoni(): Ingredients\Pepperoni
    {
        return new Ingredients\SlicedPepperoni();
    }

    public function createClam(): Ingredients\Clam
    {
        return new Ingredients\FreshClams();
    }
}