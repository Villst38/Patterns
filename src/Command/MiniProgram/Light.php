<?php

namespace Vadim\Patterns\Command\MiniProgram;

class Light
{
    public string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function on(): void
    {
        echo "Свет загорелся <br>";
    }

    public function off(): void
    {
        echo "Свет выключился <br>";
    }
}