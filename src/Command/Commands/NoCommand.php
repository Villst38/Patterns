<?php

namespace Vadim\Patterns\Command\Commands;

class NoCommand implements \Vadim\Patterns\Command\Command
{
    public function execute(): void {}
    public function undo(): void {}
}