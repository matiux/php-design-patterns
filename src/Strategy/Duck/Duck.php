<?php

declare(strict_types=1);

namespace DesignPatterns\Strategy\Duck;

use DesignPatterns\Strategy\Behavior\FlyBehavior;
use DesignPatterns\Strategy\Behavior\QuackBehavior;

abstract class Duck
{
    protected QuackBehavior $quackBehavior;
    protected FlyBehavior $flyBehavior;

    abstract public function display(): void;

    public function performQuack(): void
    {
        $this->quackBehavior->quack();
    }

    public function performFly(): void
    {
        $this->flyBehavior->fly();
    }

    public function swim(): void
    {
        echo "Tutte le anatre galleggiano\n";
    }

    public function setFlyBehavior(FlyBehavior $flyBehavior): void
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior): void
    {
        $this->quackBehavior = $quackBehavior;
    }
}
