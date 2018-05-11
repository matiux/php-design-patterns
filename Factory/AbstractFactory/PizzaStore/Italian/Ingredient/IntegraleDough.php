<?php

namespace DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Ingredient;

use DesignPatterns\Factory\AbstractFactory\PizzaStore\Ingredient\Dough;

class IntegraleDough extends Dough
{
    public function getName()
    {
        return 'Impasto integrale';
    }
}
