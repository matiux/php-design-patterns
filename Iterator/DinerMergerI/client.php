<?php

require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Iterator\DinerMergerI\DinerMenu;
use DesignPatterns\Iterator\DinerMergerI\PancakeHouseMenu;
use DesignPatterns\Iterator\DinerMergerI\Waitress;


$pancakeHouseMenu = new PancakeHouseMenu();
$dinerMenu = new DinerMenu();

$waitress = new Waitress($pancakeHouseMenu, $dinerMenu);

$waitress->printMenu();
