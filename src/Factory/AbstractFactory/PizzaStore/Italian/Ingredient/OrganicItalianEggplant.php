<?php

declare(strict_types=1);

namespace DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Ingredient;

use DesignPatterns\Factory\AbstractFactory\PizzaStore\Ingredient\Eggplant;

class OrganicItalianEggplant extends Eggplant
{
    public function getName(): string
    {
        return 'Organic eggplant';
    }
}
