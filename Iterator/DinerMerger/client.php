<?php

require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Iterator\DinerMerger\CafeMenu;
use DesignPatterns\Iterator\DinerMerger\DinerMenu;
use DesignPatterns\Iterator\DinerMerger\PancakeHouseMenu;
use DesignPatterns\Iterator\DinerMerger\Waitress;

$pancakeHouseMenu = new PancakeHouseMenu();
$dinerMenu = new DinerMenu();
$cafeMenu = new CafeMenu();

$waitress = new Waitress($pancakeHouseMenu, $dinerMenu, $cafeMenu);

$waitress->printMenu();
