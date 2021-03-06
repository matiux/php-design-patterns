<?php

namespace DesignPatterns\Factory\SimpleFactory;


use DesignPatterns\Factory\SimpleFactory\Pizza\Pizza;

class PizzaStore
{
    private $simplePizzaFactory;

    public function __construct(SimplePizzaFactory $simplePizzaFactory)
    {
        $this->simplePizzaFactory = $simplePizzaFactory;
    }

    public function orderPizza(): Pizza
    {
        /**
         * Factory object
         */
        $pizza = $this->simplePizzaFactory->createPizza('margherita');

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
