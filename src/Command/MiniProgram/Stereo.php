<?php

namespace Vadim\Patterns\Command\MiniProgram;

class Stereo
{
    public string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function on(): void
    {
        // TODO: Implement on() method.
    }

    public function off(): void
    {
        // TODO: Implement off() method.
    }

    public function setCd(): void {}
    public function setDvd(): void {}
    public function setRadio(): void {}
    public function setVolume(int $v): void {}
}