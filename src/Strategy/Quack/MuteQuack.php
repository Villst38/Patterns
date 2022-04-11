<?php

namespace Vadim\Patterns\Strategy\Quack;

class MuteQuack implements QuackBehavior
{

    public function quack(): void
    {
        echo "Mute quack";
    }
}