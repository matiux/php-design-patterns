<?php

namespace DesignPatterns\Factory\FactoryMethod\PizzaStore\Italian;

use DesignPatterns\Factory\FactoryMethod\PizzaStore\Italian\Pizza\ItalianMargherita;
use DesignPatterns\Factory\FactoryMethod\PizzaStore\Italian\Pizza\ItalianMelanzane;
use DesignPatterns\Factory\FactoryMethod\PizzaStore\Pizza\Pizza;
use DesignPatterns\Factory\FactoryMethod\PizzaStore\Pizza\PizzaStore;

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
        $pizza = null;

        switch ($type) {
            case 'margherita':
                $pizza = new ItalianMargherita();
                break;
            case 'melanzane':
                $pizza = new ItalianMelanzane();
                break;
        }

        return $pizza;
    }
}
