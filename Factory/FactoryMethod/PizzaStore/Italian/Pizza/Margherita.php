<?php

namespace DesignPatterns\Factory\FactoryMethod\PizzaStore\Italian\Pizza;

use DesignPatterns\Factory\FactoryMethod\PizzaStore\Pizza;

class Margherita extends Pizza
{
    public function __construct()
    {
        parent::__construct();

        $this->name = 'Margherita';
        $this->dough = 'Integrale';
        $this->sauce = 'Pomodoro Bio';

        $this->toppings->append('Basilico');
        $this->toppings->append('Mozzarella di bufala');
    }
}
