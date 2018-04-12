<?php

namespace DesignPatterns\Decorator\Beverage;

class Cappuccino extends Beverage
{
    public function __construct()
    {
        $this->setDescription();
    }

    public function cost(): float
    {
        return 1.50;
    }

    protected function setDescription(): void
    {
        $this->description = 'Cappuccino';
    }
}
