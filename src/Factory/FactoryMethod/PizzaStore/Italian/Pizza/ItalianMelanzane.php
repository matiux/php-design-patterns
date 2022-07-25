<?php

declare(strict_types=1);

namespace DesignPatterns\Factory\FactoryMethod\PizzaStore\Italian\Pizza;

use DesignPatterns\Factory\FactoryMethod\PizzaStore\Pizza\Pizza;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ItalianMelanzane extends Pizza
{
    public function __construct()
    {
        parent::__construct();

        $this->name = 'Pizza with eggplant';
        $this->dough = 'Wholemeal dough';
        $this->sauce = 'Organic tomato sauce';
        $this->cheese = 'Mozzarella cheese';
        $this->veggies->append('Eggplant');
    }
}
