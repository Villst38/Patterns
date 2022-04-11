<?php

namespace Vadim\Patterns\Decorator;

/**
 * Абстрактный класс дополнений, декоратор
 */
abstract class CondimentDecorator extends Beverage
{
    protected Beverage $beverage;

    public function __construct(Beverage $b)
    {
        parent::__construct();
        $this->beverage = $b;
        $this->setSize($b->size);
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function cost(): float
    {
        return $this->countToSize[$this->size] + $this->beverage->cost();
    }
}