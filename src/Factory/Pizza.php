<?php

namespace Vadim\Patterns\Factory;

use Vadim\Patterns\Factory\Factory\PizzaIngredientFactory;
use Vadim\Patterns\Factory\Ingredients\Cheese;
use Vadim\Patterns\Factory\Ingredients\Clam;
use Vadim\Patterns\Factory\Ingredients\Dough;
use Vadim\Patterns\Factory\Ingredients\Pepperoni;
use Vadim\Patterns\Factory\Ingredients\Sauce;
use Vadim\Patterns\Factory\Ingredients\Veggies;

abstract class Pizza
{
    protected string $name = '';
    protected Dough $dough;
    protected Sauce $sauce;
    /** @var Veggies[] */
    protected array $veggies = [];
    protected Cheese $cheese;
    protected Pepperoni $pepperoni;
    protected Clam $clam;
    protected array $topping = [];
    protected PizzaIngredientFactory $ingredientFactory;

    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    abstract public function prepare(): void;

    public function bake(): void
    {
        echo "В духовку на 25 минут при 350 градусах<br>";
    }
    public function cut(): void
    {
        echo "Разрезаем<br>";
    }
    public function box(): void
    {
        echo "Упаковываем<br>";
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function __toString(): string
    {
        $str = $this->name ? "Готовим $this->name <br>" : '';
        $str .= $this->dough ? "Раскатываем тесто... $this->dough <br>" : '';
        $str .= $this->sauce ? "Добавляем соус... $this->sauce <br>" : '';
        $str .= "Добавляем ингредиенты:<br>";
        foreach ($this->topping as $topping) {
            $str .= "    - $topping <br>";
        }
        return $str;
    }
}