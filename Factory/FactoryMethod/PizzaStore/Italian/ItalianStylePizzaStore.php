<?php

namespace DesignPatterns\Factory\FactoryMethod\PizzaStore\Italian;

use DesignPatterns\Factory\FactoryMethod\PizzaStore\Italian\Pizza\Margherita;
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
        $pizzaIngredientFactory = new ItalianPizzaIngredientFactory();

        switch ($type) {
            case 'margherita':
                $pizza = new Margherita($pizzaIngredientFactory);
                $pizza->setName('Margherita Italiana');
                break;
        }

        return $pizza;
    }
}
