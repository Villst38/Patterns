<?php

namespace Vadim\Patterns\Command\MiniProgram;

class GarageDoor
{
    public string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function up(): void {
        echo 'Дверь гаража открыта <br>';
    }
    public function down(): void {}
    public function stop(): void {}
    public function lightOn(): void {}
    public function lightOff(): void {}
}