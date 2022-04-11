<?php

namespace Vadim\Patterns\Factory\Factory;

use Vadim\Patterns\Factory\Ingredients;

interface PizzaIngredientFactory
{
    public function createDough(): Ingredients\Dough;
    public function createSauce(): Ingredients\Sauce;
    public function createCheese(): Ingredients\Cheese;
    /** @return \Vadim\Patterns\Factory\Ingredients\Veggies[] */
    public function createVeggies(): array;
    public function createPepperoni(): Ingredients\Pepperoni;
    public function createClam(): Ingredients\Clam;
}