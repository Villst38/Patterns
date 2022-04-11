<?php

namespace Vadim\Patterns\Factory\Factory;

use Vadim\Patterns\Factory\Ingredients;

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{

    public function createDough(): Ingredients\Dough
    {
        return new Ingredients\ThickCrustDough();
    }

    public function createSauce(): Ingredients\Sauce
    {
        return new Ingredients\PlumTomatoSauce();
    }

    public function createCheese(): Ingredients\Cheese
    {
        return new Ingredients\MozzarellaCheese();
    }

    /**
     * @inheritDoc
     */
    public function createVeggies(): array
    {
        return [
            new Ingredients\BlackOlives(),
            new Ingredients\Spinach(),
            new Ingredients\EggPlant(),
        ];
    }

    public function createPepperoni(): Ingredients\Pepperoni
    {
        return new Ingredients\SlicedPepperoni();
    }

    public function createClam(): Ingredients\Clam
    {
        return new Ingredients\FrozenClams();
    }
}