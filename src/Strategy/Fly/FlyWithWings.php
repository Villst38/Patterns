<?php

namespace Vadim\Patterns\Strategy\Fly;

class FlyWithWings implements FlyBehavior
{

    public function fly(): void
    {
        echo "Я лечууу!! <br>";
    }
}