<?php

declare(strict_types=1);

namespace DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Ingredient;

use DesignPatterns\Factory\AbstractFactory\PizzaStore\Ingredient\Veggie;

class OrganicOrigan extends Veggie
{
    public function getName(): string
    {
        return 'Organic oregano';
    }
}
