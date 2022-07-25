<?php

declare(strict_types=1);

namespace DesignPatterns\Factory\SimpleFactory;

use DesignPatterns\Factory\SimpleFactory\Pizza\Pizza;

class PizzaStore
{
    private SimplePizzaFactory $simplePizzaFactory;

    public function __construct(SimplePizzaFactory $simplePizzaFactory)
    {
        $this->simplePizzaFactory = $simplePizzaFactory;
    }

    public function orderPizza(): Pizza
    {
        /**
         * Factory object.
         */
        $pizza = $this->simplePizzaFactory->createPizza('margherita');

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
