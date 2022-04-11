<?php

namespace Vadim\Patterns\Decorator\Beverage;

use Vadim\Patterns\Decorator\Beverage;

class DarkRoast extends Beverage
{
    protected array $countToSize = [
        'TALL' => .99,
        'GRANDE' => 1.99,
        'VENTI' => 2.99,
    ];

    public function __construct()
    {
        parent::__construct();
        $this->description = "Темное кофе";
    }
}