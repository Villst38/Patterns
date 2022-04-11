<?php

namespace Vadim\Patterns\Decorator\Beverage;

use Vadim\Patterns\Decorator\Beverage;

class Decaf extends Beverage
{
    protected array $countToSize = [
        'TALL' => 1.05,
        'GRANDE' => 2.05,
        'VENTI' => 3.05,
    ];

    public function __construct()
    {
        parent::__construct();
        $this->description = "Без кофеина";
    }
}