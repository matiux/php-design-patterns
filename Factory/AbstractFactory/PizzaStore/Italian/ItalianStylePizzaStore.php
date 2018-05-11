<?php

namespace DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian;

use DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Pizza\ItalianMargherita;
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Pizza\ItalianMelanzane;
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Pizza\Pizza;
use DesignPatterns\Factory\AbstractFactory\PizzaStore\Pizza\PizzaStore;

class ItalianStylePizzaStore extends PizzaStore
{
    /**
     * Abstract Factory
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
                $pizza = new ItalianMargherita($pizzaIngredientFactory);
                $pizza->setName('Margherita Italiana');
                break;
            case 'melanzane':
                $pizza = new ItalianMelanzane($pizzaIngredientFactory);
                $pizza->setName('Pizza con melanzane');
                break;
        }

        return $pizza;
    }
}
