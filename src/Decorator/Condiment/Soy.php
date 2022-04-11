<?php

namespace Vadim\Patterns\Decorator\Condiment;

use Vadim\Patterns\Decorator\Beverage;
use Vadim\Patterns\Decorator\CondimentDecorator;

class Soy extends CondimentDecorator
{
    protected Beverage $beverage;
    protected array $countToSize = [
        'TALL' => .15,
        'GRANDE' => .2,
        'VENTI' => .25,
    ];

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Соя";
    }
}