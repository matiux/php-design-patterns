<?php

declare(strict_types=1);

namespace DesignPatterns\State\GumballState;

class NoQuarterState implements State
{
    private GumballMachine $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter(): void
    {
        echo "\tYou inserted a quarter\n";

        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
    }

    public function ejectQuarter(): void
    {
        echo "\tYou haven't inserted a quarter\n";
    }

    public function turnCrank(): void
    {
        echo "\tYou turned, but there's no quarter\n";
    }

    public function dispense(): void
    {
        echo "\tYou need to pay first\n";
    }

    public function refill(): void
    {
    }

    public function __toString()
    {
        return "Waiting for quarter\n";
    }
}
