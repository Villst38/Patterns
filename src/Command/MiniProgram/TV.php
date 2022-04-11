<?php

namespace Vadim\Patterns\Command\MiniProgram;

class TV
{
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function on(): void
    {
        echo 'Телик вкл<br>';
    }

    public function off(): void
    {
        echo 'Телик выкл<br>';
    }

    public function setInputChannel(): void {}
    public function setVolume(): void {}
}