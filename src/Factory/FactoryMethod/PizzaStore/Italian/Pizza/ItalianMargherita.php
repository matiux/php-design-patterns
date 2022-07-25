<?php

declare(strict_types=1);

namespace DesignPatterns\Factory\FactoryMethod\PizzaStore\Italian\Pizza;

use DesignPatterns\Factory\FactoryMethod\PizzaStore\Pizza\Pizza;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ItalianMargherita extends Pizza
{
    public function __construct()
    {
        parent::__construct();

        $this->name = 'Italian Margherita';
        $this->dough = 'Wholemeal dough';
        $this->sauce = 'Organic tomato sauce';
        $this->cheese = 'Buffalo mozzarella from Campania';
        $this->veggies->append('Origan');
        $this->veggies->append('Basil');
    }
}
