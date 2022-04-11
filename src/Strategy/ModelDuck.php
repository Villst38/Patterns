<?php

namespace Vadim\Patterns\Strategy;

use Vadim\Patterns\Strategy\Fly\FlyNoWay;
use Vadim\Patterns\Strategy\Quack\Quack;

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Quack();
    }

    public function display(): void
    {
        echo "Я модель утки <br>";
    }
}