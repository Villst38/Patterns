<?php

namespace Vadim\Patterns\Strategy;

use Vadim\Patterns\Strategy\Fly\FlyRocketPowered;

class MiniDuckSimulator
{
    private static Duck $mallard;
    private static Duck $model;

    public static function main(): void
    {
        self::$mallard = new MallardDuck();
        self::$mallard->performQuack();
        self::$mallard->performFly();

        self::$model = new ModelDuck();
        self::$model->performFly();
        self::$model->setFlyBehavior(new FlyRocketPowered());
        self::$model->performFly();
    }
}