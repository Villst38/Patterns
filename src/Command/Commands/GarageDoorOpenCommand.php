<?php

namespace Vadim\Patterns\Command\Commands;

use Vadim\Patterns\Command\MiniProgram\GarageDoor;

class GarageDoorOpenCommand implements \Vadim\Patterns\Command\Command
{
    private GarageDoor $door;

    public function __construct(GarageDoor $door)
    {
        $this->door = $door;
    }

    public function execute(): void
    {
        $this->door->lightOn();
        $this->door->up();
    }
}