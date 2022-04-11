<?php

namespace Vadim\Patterns\Command;

use JetBrains\PhpStorm\Pure;
use Vadim\Patterns\Command\Commands\NoCommand;
use Vadim\Patterns\Factory\Ingredients\ThickCrustDough;

class RemoteControl
{
    /** @var \Vadim\Patterns\Command\Command[] */
    private array $onCommands = [];
    /** @var \Vadim\Patterns\Command\Command[] */
    private array $offCommands = [];
    private Command $undoCommand;

    public function __construct() {
        $noCommand = new NoCommand();
        for ($i = 0; $i < 7; $i++) {
            $this->onCommands[$i] = $noCommand;
            $this->offCommands[$i] = $noCommand;
        }
        $this->undoCommand = $noCommand;
    }

    public function setCommand(int $slot, Command $onCommands, Command $offCommands): void
    {
        $this->onCommands[$slot] = $onCommands;
        $this->offCommands[$slot] = $offCommands;
    }

    public function onButtonWasPushed(int $slot): void
    {
        if (!is_null($this->onCommands[$slot])) {
            $this->onCommands[$slot]->execute();
        }
        $this->undoCommand = $this->onCommands[$slot];
    }

    public function offButtonWasPushed(int $slot): void
    {
        $this->offCommands[$slot]->execute();
        $this->undoCommand = $this->offCommands[$slot];
    }

    public function undoButtonWasPushed(): void
    {
        $this->undoCommand->undo();
    }

    public function __toString(): string
    {
        $str = '!!!----------    Записанные контроллеры    ----------!!!<br>';
        foreach ($this->onCommands as $i => $on) {
            $name1 = array_pop(explode('\\', get_class($this->onCommands[$i])));
            $name2 = array_pop(explode('\\', get_class($this->offCommands[$i])));
            $str .= "[slot $i] $name1    $name2 <br>";
        }
        $str .= "[undo] ".array_pop(explode('\\', get_class($this->undoCommand))).'<br>';
        return $str;
    }
}