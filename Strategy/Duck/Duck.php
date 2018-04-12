<?php

namespace DesignPatterns\Strategy\Duck;

use DesignPatterns\Strategy\Behavior\FlyBehavior;
use DesignPatterns\Strategy\Behavior\QuackBehavior;

abstract class Duck
{
    /** @var QuackBehavior */
    protected $quackBehavior;

    /** @var FlyBehavior */
    protected $flyBehavior;

    public abstract function display(): void;

    public function performQuack(): void
    {
        $this->quackBehavior->quack();
    }

    public function performFly(): void
    {
        $this->flyBehavior->fly();
    }

    public function swim(): string
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
