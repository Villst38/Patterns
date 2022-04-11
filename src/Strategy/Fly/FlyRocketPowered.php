<?php

namespace Vadim\Patterns\Strategy\Fly;

class FlyRocketPowered implements FlyBehavior
{
    public function fly(): void
    {
        echo "Я летаю как ракета!!! <br>";
    }
}