<?php

declare(strict_types=1);

namespace DesignPatterns\Strategy\Duck;

use DesignPatterns\Strategy\Behavior\FlyNoWay;
use DesignPatterns\Strategy\Behavior\Quack;

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyNoWay();
    }

    public function display(): void
    {
        echo "Sono un modellino\n";
    }
}
