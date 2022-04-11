<?php

namespace Vadim\Patterns\Factory\Pizza;

use Vadim\Patterns\Factory\Factory\PizzaIngredientFactory;

class CheesePizza extends \Vadim\Patterns\Factory\Pizza
{
    public function prepare(): void
    {
        $this->setName('Сырная пицца');
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
    }
}