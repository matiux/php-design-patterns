<?php

declare(strict_types=1);

namespace DesignPatterns\State\GumballState;

class SoldOutState implements State
{
    private GumballMachine $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter(): void
    {
        echo "\tYou can't insert a quarter, the machine is sold out\n";
    }

    public function ejectQuarter(): void
    {
        echo "\tYou can't eject, you haven't inserted a quarter yet\n";
    }

    public function turnCrank(): void
    {
        echo "\tYou turned, but there are no gumballs\n";
    }

    public function dispense(): void
    {
        echo "\tNo gumball dispensed\n";
    }

    public function refill(): void
    {
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    public function __toString(): string
    {
        return "Sold out\n";
    }
}
