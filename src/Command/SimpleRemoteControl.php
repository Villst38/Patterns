<?php

namespace Vadim\Patterns\Command;

/**
 * Пульт с кнопками
 */
class SimpleRemoteControl
{
    private Command $slot;

    public function __construct()
    {
    }

    public function setCommand(Command $command): void
    {
        $this->slot = $command;
    }

    public function buttonWasPressed(): void
    {
        $this->slot->execute();
    }
}