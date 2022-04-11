<?php

namespace Vadim\Patterns\Factory\Pizza;

class ClamPizza extends \Vadim\Patterns\Factory\Pizza
{
    public function prepare(): void
    {
        $this->setName('Сырная пицца');
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->clam = $this->ingredientFactory->createClam();
    }
}