<?php

namespace Vadim\Patterns\Loner;

class ChocolateBoiler
{
    /** @var bool Наполнен? */
    private bool $empty;
    /** @var bool Кипит? */
    private bool $boiled;
    /** @var ChocolateBoiler */
    private static $inst;

    private function __construct()
    {
        $this->empty = true;
        $this->boiled = false;
    }

    public static function getInstance(): ChocolateBoiler
    {
        if (is_null(self::$inst)) {
            self::$inst = new ChocolateBoiler();
        }
        return self::$inst;
    }

    public function fill(): void
    {
        if ($this->isEmpty()) {
            $this->empty = false;
            $this->boiled = true;
            // Заполнение нагревателя молочно-шоколадной смесью
        }
    }

    public function drain(): void
    {
        if (!$this->isEmpty() && $this->isBoiled()) {
            // Слить нагретое молоко и шоколад
            $this->empty = true;
        }
    }

    public function boil(): void
    {
        if (!$this->isEmpty() && !$this->isBoiled()) {
            // Довести содержимое до кипения
            $this->boiled = true;
        }
    }

    public function isEmpty(): bool
    {
        return $this->empty;
    }

    public function isBoiled(): bool
    {
        return $this->boiled;
    }
}