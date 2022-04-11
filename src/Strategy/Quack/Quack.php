<?php

namespace Vadim\Patterns\Strategy\Quack;

class Quack implements QuackBehavior
{

    public function quack(): void
    {
        echo "Кря <br>";
    }
}