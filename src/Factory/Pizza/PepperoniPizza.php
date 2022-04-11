<?php

namespace Vadim\Patterns\Factory\Pizza;

class PepperoniPizza extends \Vadim\Patterns\Factory\Pizza
{
    public function prepare(): void
    {
        $this->setName('Пицца пепперони');
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
    }
}