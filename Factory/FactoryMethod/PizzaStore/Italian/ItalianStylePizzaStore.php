<?php

namespace DesignPatterns\Factory\FactoryMethod\PizzaStore\Italian;

use DesignPatterns\Factory\FactoryMethod\PizzaStore\Italian\Pizza\Margherita;
use DesignPatterns\Factory\FactoryMethod\PizzaStore\Pizza;
use DesignPatterns\Factory\FactoryMethod\PizzaStore\PizzaStore;

class ItalianStylePizzaStore extends PizzaStore
{
    /**
     * Factory method
     *
     * @param string $type
     * @return Pizza
     */
    protected function createPizza(string $type): Pizza
    {
        switch ($type) {
            case 'margherita':
                return new Margherita();
                break;
        }
    }
}
