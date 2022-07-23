<?php

declare(strict_types=1);

namespace DesignPatterns\Factory\SimpleFactory;

use DesignPatterns\Factory\SimpleFactory\Pizza\Margherita;
use DesignPatterns\Factory\SimpleFactory\Pizza\Pizza;

class SimplePizzaFactory
{
    public function createPizza(string $type): Pizza
    {
        $pizza = null;

        switch ($type) {
            case 'margherita':
                $pizza = new Margherita();

                break;
        }

        return $pizza;
    }
}
