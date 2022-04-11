<?php

namespace Vadim\Patterns\Command\Commands;

use Vadim\Patterns\Command\MiniProgram\CeilingFan;

class CeilingFanOnCommand implements \Vadim\Patterns\Command\Command
{
    private CeilingFan $ceilingFan;

    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute(): void
    {
        $this->ceilingFan->low();
        $this->ceilingFan->getSpeed();
    }
}