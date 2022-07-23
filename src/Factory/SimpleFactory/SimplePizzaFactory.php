<?php

declare(strict_types=1);

namespace DesignPatterns\Factory\SimpleFactory;

use DesignPatterns\Factory\SimpleFactory\Pizza\Margherita;
use DesignPatterns\Factory\SimpleFactory\Pizza\Pizza;
use InvalidArgumentException;

class SimplePizzaFactory
{
    public function createPizza(string $type): Pizza
    {
        switch ($type) {
            case 'margherita':
                return new Margherita();
            default:
                throw new InvalidArgumentException();
        }
    }
}
