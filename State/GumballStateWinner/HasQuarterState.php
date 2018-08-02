<?php

namespace DesignPatterns\State\GumballStateWinner;

class HasQuarterState implements State
{
    private $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter(): void
    {
        echo sprintf("\tYou can't insert another quarter\n");
    }

    public function ejectQuarter(): void
    {
        echo sprintf("\tQuarter returned\n");

        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    public function turnCrank(): void
    {
        echo sprintf("\tYou turned...\n");

        $winner = rand(1, 3);

        if ((1 == $winner) && $this->gumballMachine->getCount() > 1) {

            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());

        } else {

            $this->gumballMachine->setState($this->gumballMachine->getSoldState());
        }
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
        return sprintf("Waiting for turn of crank\"\n");
    }
}
