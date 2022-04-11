<?php

namespace Vadim\Patterns\Strategy;

use Vadim\Patterns\Strategy\Quack\Quack;
use Vadim\Patterns\Strategy\Fly\FlyWithWings;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyWithWings();
    }

    public function display(): void
    {
        echo "I’m a real Mallard duck <br>";
    }
}