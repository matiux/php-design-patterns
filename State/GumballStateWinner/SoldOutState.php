<?php

namespace DesignPatterns\State\GumballStateWinner;

class SoldOutState implements State
{
    private $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter(): void
    {
        echo sprintf("\tYou can't insert a quarter, the machine is sold out\n");
    }

    public function ejectQuarter(): void
    {
        echo sprintf("\tYou can't eject, you haven't inserted a quarter yet\n");
    }

    public function turnCrank(): void
    {
        echo sprintf("\tYou turned, but there are no gumballs\n");
    }

    public function dispense(): void
    {
        echo sprintf("\tNo gumball dispensed\n");
    }

    public function refill(): void
    {

    }

    public function __toString()
    {
        return sprintf("Sold out\n");
    }
}
