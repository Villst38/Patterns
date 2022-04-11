<?php

namespace Vadim\Patterns\Decorator\Beverage;

use Vadim\Patterns\Decorator\Beverage;

class Espresso extends Beverage
{
    protected array $countToSize = [
        'TALL' => 1.99,
        'GRANDE' => 2.99,
        'VENTI' => 3.99,
    ];

    public function __construct()
    {
        parent::__construct();
        $this->description = "Эспрессо";
    }
}