<?php

require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\State\GumballState\GumballMachine;

$gumballMachine = new GumballMachine(2);

echo '\\---------------------------------\\';
echo $gumballMachine;
echo '\\---------------------------------\\' . "\n";

echo "\n        \\ 1 ------------------------\\\n";
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
echo "\n        \\ 2 ------------------------\\\n";
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
echo "\n        \\ 3 ------------------------\\\n";
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

echo '\\---------------------------------\\';
echo $gumballMachine;
echo '\\---------------------------------\\' . "\n";

$gumballMachine->refill(2);


echo '\\---------------------------------\\';
echo $gumballMachine;
echo '\\---------------------------------\\' . "\n";

//$gumballMachine->insertQuarter();
//$gumballMachine->turnCrank();
//
//
//$gumballMachine->refill(5);
//
//$gumballMachine->insertQuarter();
//$gumballMachine->turnCrank();
//
//$gumballMachine->releaseBall();
//
//echo '\\---------------------------------\\';
//echo $gumballMachine;
//echo '\\---------------------------------\\' . "\n";
