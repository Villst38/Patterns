<?php

namespace Vadim\Patterns\Decorator\Condiment;

use Vadim\Patterns\Decorator\Beverage;
use Vadim\Patterns\Decorator\CondimentDecorator;

class Mocha extends CondimentDecorator
{
    protected Beverage $beverage;
    protected array $countToSize = [
        'TALL' => .2,
        'GRANDE' => .25,
        'VENTI' => .3,
    ];

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Шоколад";
    }
}