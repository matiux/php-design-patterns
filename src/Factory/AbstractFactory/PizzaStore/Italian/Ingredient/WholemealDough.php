<?php

declare(strict_types=1);

namespace DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Ingredient;

use DesignPatterns\Factory\AbstractFactory\PizzaStore\Ingredient\Dough;

class WholemealDough extends Dough
{
    public function getName(): string
    {
        return 'Wholemeal dough';
    }
}
