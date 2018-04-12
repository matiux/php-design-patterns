<?php

namespace DesignPatterns\Decorator\Beverage;

class Espresso extends Beverage
{
    public function __construct()
    {
        $this->setDescription();
    }

    public function cost(): float
    {
        return 1;
    }

    protected function setDescription(): void
    {
        $this->description = 'Espresso';
    }
}
