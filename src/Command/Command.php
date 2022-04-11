<?php

namespace Vadim\Patterns\Command;

interface Command
{
    public function execute(): void;
    public function undo(): void;
}