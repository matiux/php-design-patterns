<?php

namespace DesignPatterns\Strategy\Duck;

use DesignPatterns\Strategy\Behavior\FlyWithWings;
use DesignPatterns\Strategy\Behavior\Quack;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyWithWings();
    }

    public function display(): void
    {
        echo "Sono una Germano Reale!\n";
    }
}
