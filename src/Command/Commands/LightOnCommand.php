<?php

namespace Vadim\Patterns\Command\Commands;

use Vadim\Patterns\Command\MiniProgram\Light;

class LightOnCommand implements \Vadim\Patterns\Command\Command
{
    private Light $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->on();
    }

    public function undo(): void
    {
        $this->light->off();
    }
}