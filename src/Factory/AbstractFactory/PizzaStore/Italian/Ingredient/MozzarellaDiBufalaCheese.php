<?php

declare(strict_types=1);

namespace DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Ingredient;

use DesignPatterns\Factory\AbstractFactory\PizzaStore\Ingredient\Cheese;

class MozzarellaDiBufalaCheese extends Cheese
{
    public function getName(): string
    {
        return 'Buffalo mozzarella from Campania';
    }
}
