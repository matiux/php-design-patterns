<?php

declare(strict_types=1);

namespace DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Ingredient;

use DesignPatterns\Factory\AbstractFactory\PizzaStore\Ingredient\Sauce;

class FreshTomatoSauce extends Sauce
{
    public function getName(): string
    {
        return 'Fresh tomato sauce';
    }
}
