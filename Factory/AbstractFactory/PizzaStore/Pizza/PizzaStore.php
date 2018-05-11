<?php

namespace DesignPatterns\Factory\AbstractFactory\PizzaStore\Pizza;

abstract class PizzaStore
{
    final public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    /**
     * Factory method
     *
     * @param string $type
     * @return Pizza
     */
    protected abstract function createPizza(string $type): Pizza;
}
