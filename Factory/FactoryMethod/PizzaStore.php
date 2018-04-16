<?php

namespace DesignPatterns\Factory\FactoryMethod;

use DesignPatterns\Factory\FactoryMethod\Pizza\Pizza;

abstract class PizzaStore
{
    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    public abstract function createPizza(string $type): Pizza;
}
