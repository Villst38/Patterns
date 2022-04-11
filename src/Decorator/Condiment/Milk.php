<?php

namespace Vadim\Patterns\Decorator\Condiment;

use Vadim\Patterns\Decorator\Beverage;
use Vadim\Patterns\Decorator\CondimentDecorator;

class Milk extends CondimentDecorator
{
    protected Beverage $beverage;
    protected array $countToSize = [
        'TALL' => .1,
        'GRANDE' => .15,
        'VENTI' => .2,
    ];

    public function getDescription(): string
    {
        return $this->beverage->getDescription().", Молочная пена";
    }
}