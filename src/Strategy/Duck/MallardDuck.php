<?php

declare(strict_types=1);

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
        echo "I am a Mallard!\n";
    }
}
