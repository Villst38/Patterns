<?php

namespace Vadim\Patterns\Command\MiniProgram;

class CeilingFan
{
    const HIGH = 3;
    const MEDIUM = 2;
    const LOW = 1;
    const OFF = 0;

    public string $location;
    public int $speed;

    public function __construct($location)
    {
        $this->location = $location;
        $this->speed = self::OFF;
    }

    public function high(): void
    {
        echo 'Высокая скорость вентилятора <br>';
        $this->speed = self::HIGH;
    }
    public function medium(): void
    {
        echo 'Средняя скорость вентилятора <br>';
        $this->speed = self::MEDIUM;
    }
    public function low(): void
    {
        echo 'Низкая скорость вентилятора <br>';
        $this->speed = self::LOW;
    }
    public function off(): void
    {
        echo 'Вентилятор выключен <br>';
        $this->speed = self::OFF;
    }
    public function getSpeed(): int
    {
        return $this->speed;
    }
}