<?php

namespace Vadim\Patterns\Strategy\Fly;

class FlyNoWay implements FlyBehavior
{

    public function fly(): void
    {
        echo "Я не умею летать. <br>";
    }
}