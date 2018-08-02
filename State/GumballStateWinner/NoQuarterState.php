<?php

namespace DesignPatterns\State\GumballStateWinner;

class NoQuarterState implements State
{
    private $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter(): void
    {
        echo sprintf("\tYou inserted a quarter\n");

        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
    }

    public function ejectQuarter(): void
    {
        echo sprintf("\tYou haven't inserted a quarter\n");
    }

    public function turnCrank(): void
    {
        echo sprintf("\tYou turned, but there's no quarter\n");
    }

    public function dispense(): void
    {
        echo sprintf("\tYou need to pay first\n");
    }

    public function refill(): void
    {

    }

    public function __toString()
    {
        return sprintf("Waiting for quarter\n");
    }
}
