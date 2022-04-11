<?php

namespace Vadim\Patterns\Command\Commands;

use Vadim\Patterns\Command\MiniProgram\TV;

class TVOffCommand implements \Vadim\Patterns\Command\Command
{
    private TV $tv;

    public function __construct(TV $tv)
    {
        $this->tv = $tv;
    }

    public function execute(): void
    {
        $this->tv->off();
    }

    public function undo(): void
    {
        $this->tv->on();
    }
}