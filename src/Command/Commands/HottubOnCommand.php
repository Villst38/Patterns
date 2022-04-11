<?php

namespace Vadim\Patterns\Command\Commands;

use Vadim\Patterns\Command\MiniProgram\Hottub;

class HottubOnCommand implements \Vadim\Patterns\Command\Command
{
    private Hottub $hottub;

    public function __construct(Hottub $hottub)
    {
        $this->hottub = $hottub;
    }

    public function execute(): void
    {
        $this->hottub->jetsOn();
    }

    public function undo(): void
    {
        $this->hottub->jetsOff();
    }
}