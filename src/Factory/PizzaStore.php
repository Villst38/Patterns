<?php

namespace Vadim\Patterns\Factory;

abstract class PizzaStore
{
    final public function orderPizza(string $type): ?Pizza
    {
        /** @var \Vadim\Patterns\Factory\Pizza $pizza */
        $pizza = $this->creatPizza($type);
        if (!$pizza) {
            return null;
        }

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    abstract protected function creatPizza(string $type): ?Pizza;
}