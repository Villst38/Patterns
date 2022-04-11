<?php

namespace Vadim\Patterns\Factory\Pizza;

class VeggiePizza extends \Vadim\Patterns\Factory\Pizza
{
    public function prepare(): void
    {
        $this->setName('Вегетарианская пицца');
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->veggies = $this->ingredientFactory->createVeggies();
    }
}