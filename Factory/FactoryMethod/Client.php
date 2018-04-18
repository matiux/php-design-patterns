<?php

use DesignPatterns\Factory\FactoryMethod\PizzaStore\Italian\ItalianStylePizzaStore;

require __DIR__ . '/../../vendor/autoload.php';

$pizzaStore = new ItalianStylePizzaStore();
$pizzaMargherita = $pizzaStore->orderPizza('margherita');


