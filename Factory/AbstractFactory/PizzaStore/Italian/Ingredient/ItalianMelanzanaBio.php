<?php

namespace DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Ingredient;

use DesignPatterns\Factory\AbstractFactory\PizzaStore\Ingredient\Eggplant;

class ItalianMelanzanaBio extends Eggplant
{
    public function getName()
    {
        return 'Melanzana bio';
    }
}
