<?php

namespace Vadim\Patterns\Command\Commands;

use Vadim\Patterns\Command\MiniProgram\CeilingFan;

class CeilingFanOffCommand implements \Vadim\Patterns\Command\Command
{
    private CeilingFan $ceilingFan;
    public int $prevSpeed;

    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute(): void
    {
        $this->prevSpeed = $this->ceilingFan->getSpeed();
        $this->ceilingFan->off();
    }

    public function undo(): void
    {
        switch ($this->prevSpeed) {
            case CeilingFan::HIGH:
                $this->ceilingFan->high();
                break;
            case CeilingFan::MEDIUM:
                $this->ceilingFan->medium();
                break;
            case CeilingFan::LOW:
                $this->ceilingFan->low();
                break;
            case CeilingFan::OFF:
                $this->ceilingFan->off();
                break;
        }
    }
}