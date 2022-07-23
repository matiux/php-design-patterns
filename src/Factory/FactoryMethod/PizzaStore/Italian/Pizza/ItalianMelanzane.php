<?php

declare(strict_types=1);

namespace DesignPatterns\Factory\FactoryMethod\PizzaStore\Italian\Pizza;

use DesignPatterns\Factory\FactoryMethod\PizzaStore\Pizza\Pizza;

class ItalianMelanzane extends Pizza
{
    public function __construct()
    {
        parent::__construct();

        $this->name = 'Margherita italiana';
        $this->dough = 'Impasto integrale';
        $this->sauce = 'Passata di pomodoro Bio';
        $this->cheese = 'Mozzarella';
        $this->veggies->append('Melanzane');
    }
}
