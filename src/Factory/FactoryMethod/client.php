<?php

declare(strict_types=1);

require dirname(__DIR__).'/../../vendor/autoload.php';

use DesignPatterns\Factory\FactoryMethod\PizzaStore\Italian\ItalianStylePizzaStore;

/**
 * The Factory Method Pattern defines an interface for creating an object, but lets subclasses
 * decide which class to instantiate. Factory Method lets a class defer instantiation to subclasses.
 * As with every factory, the Factory Method Pattern gives us a way to encapsulate the instantiations of concrete types.
 * The abstract Creator gives you an interface with a method for creating objects, also known as the
 * “factory method.” Any other methods implemented in the abstract Creator are written to operate on products
 * produced by the factory method. Only subclasses actually implement the factory method and create products.
 */
$pizzaStore = new ItalianStylePizzaStore();

$pizzaStore->orderPizza('margherita');
$pizzaStore->orderPizza('melanzane');
