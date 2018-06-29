<?php

require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\ItalianStylePizzaStore;

/**
 * The Abstract Factory Pattern provides an interface for creating families of related or dependent
 * objects without specifying their concrete classes.
 *
 * An Abstract Factory gives us an interface for creating a family of products. By different regions,
 * different operating systems, or different look and feels. Because our code is decoupled from the actual
 * products, we can substitute different factories to get different behaviors (like getting marinara
 * instead of plum tomatoes). An Abstract Factory provides an interface for a family of products.
 * What’s a family? In our case, it’s all the things we need to make a pizza: dough, sauce, cheese, meats,
 * and veggies. From the abstract factory, we derive one or more concrete factories that produce the same products,
 * but with different implementations. We then write our code so that it uses the factory to create products.
 * By passing in a variety of factories, we get a variety of implementations of those products.
 * But our client code stays the same.
 */

$pizzaStore = new ItalianStylePizzaStore();

$pizzaMargherita = $pizzaStore->orderPizza('margherita');
$pizzaConMelanzane = $pizzaStore->orderPizza('melanzane');



