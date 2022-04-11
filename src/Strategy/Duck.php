<?php

namespace Vadim\Patterns\Strategy;

use Vadim\Patterns\Strategy\Fly\FlyBehavior;
use Vadim\Patterns\Strategy\Quack\QuackBehavior;

abstract class Duck
{
    protected QuackBehavior $quackBehavior;
    protected FlyBehavior $flyBehavior;

    abstract public function display(): void;

    public function performFly(): void
    {
        $this->flyBehavior->fly();
    }

    public function performQuack(): void
    {
        $this->quackBehavior->quack();
    }

    public function swim(): void
    {
        echo 'All ducks float, even decoys! <br>';
    }

    public function setFlyBehavior(FlyBehavior $fb): void
    {
        $this->flyBehavior = $fb;
    }

}