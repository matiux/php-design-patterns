<?php

require __DIR__ . '/../vendor/autoload.php';

use DesignPatterns\Strategy\Behavior\FlyRocketPowered;
use DesignPatterns\Strategy\Duck\MallardDuck;
use DesignPatterns\Strategy\Duck\ModelDuck;

$mallardDuck = new MallardDuck();
$mallardDuck->display();
$mallardDuck->performQuack();
$mallardDuck->performFly();

$modelDuck = new ModelDuck();
$modelDuck->display();
$modelDuck->performQuack();
$modelDuck->performFly();
$modelDuck->setFlyBehavior(new FlyRocketPowered());
$modelDuck->performFly();
