<?php

namespace Vadim\Patterns\Command\Commands;

class MacroCommand implements \Vadim\Patterns\Command\Command
{
    /** @var \Vadim\Patterns\Command\Command[]  */
    private array $commands;

    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }

    public function execute(): void
    {
        foreach ($this->commands as $commands) {
            $commands->execute();
        }
    }

    public function undo(): void
    {
        foreach ($this->commands as $commands) {
            $commands->undo();
        }
    }
}