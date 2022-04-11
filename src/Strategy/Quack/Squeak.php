<?php

namespace Vadim\Patterns\Strategy\Quack;

class Squeak implements QuackBehavior
{

    public function quack(): void
    {
        echo "Squeak";
    }
}