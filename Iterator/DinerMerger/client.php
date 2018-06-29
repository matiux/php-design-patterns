<?php

require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Iterator\DinerMerger\DinerMenu;
use DesignPatterns\Iterator\DinerMerger\PancakeHouseMenu;
use DesignPatterns\Iterator\DinerMerger\Waitress;


$pancakeHouseMenu = new PancakeHouseMenu();
$dinerMenu = new DinerMenu();

$waitress = new Waitress($pancakeHouseMenu, $dinerMenu);

$waitress->printMenu();
