<?php

namespace Vadim\Patterns\Decorator\Beverage;

use Vadim\Patterns\Decorator\Beverage;

class HouseBlend extends Beverage
{
    protected array $countToSize = [
        'TALL' => .89,
        'GRANDE' => 1.89,
        'VENTI' => 2.89,
    ];

    public function __construct()
    {
        parent::__construct();
        $this->description = "Домашняя смесь";
    }
}