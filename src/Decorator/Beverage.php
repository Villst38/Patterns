<?php

namespace Vadim\Patterns\Decorator;

/**
 * Абстрактный класс кофе
 */
abstract class Beverage
{
    public static array $aSize = ['TALL' => 'TALL', 'GRANDE' => 'GRANDE', 'VENTI' => 'VENTI'];
    protected string $size;
    protected string $description = "Неизвестное кофе";
    protected array $countToSize = [
        'TALL' => 0,
        'GRANDE' => 0,
        'VENTI' => 0,
    ];

    public function __construct()
    {
        $this->setSize('TALL');
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function cost(): float
    {
        return $this->countToSize[$this->size];
    }

    public function setSize(string $size): void
    {
        $this->size = $size;
    }

    public function getSize(): string
    {
        return $this->size;
    }
}