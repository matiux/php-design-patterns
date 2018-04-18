<?php

namespace DesignPatterns\Factory\FactoryMethod\PizzaStore;

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

    /**
     * Factory method
     *
     * @param string $type
     * @return Pizza
     */
    protected abstract function createPizza(string $type): Pizza;
}
