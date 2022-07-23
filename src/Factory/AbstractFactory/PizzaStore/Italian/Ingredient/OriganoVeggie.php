<?php

declare(strict_types=1);

namespace DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Ingredient;

use DesignPatterns\Factory\AbstractFactory\PizzaStore\Ingredient\Veggie;

class OriganoVeggie extends Veggie
{
    public function getName()
    {
        return 'Origano bio';
    }
}
