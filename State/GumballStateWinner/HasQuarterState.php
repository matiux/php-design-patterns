<?php

namespace DesignPatterns\State\GumballStateWinner;

class HasQuarterState implements State
{
    private GumballMachine $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter(): void
    {
        echo "\tYou can't insert another quarter\n";
    }

    public function ejectQuarter(): void
    {
        echo "\tQuarter returned\n";

        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    public function turnCrank(): void
    {
        echo "\tYou turned...\n";

        $winner = rand(1, 3);

        if ((1 == $winner) && $this->gumballMachine->getCount() > 1) {

            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());

        } else {

            $this->gumballMachine->setState($this->gumballMachine->getSoldState());
        }
    }

    public function dispense(): void
    {
        echo "\tNo gumball dispensed\n";
    }

    public function refill(): void
    {

    }

    public function __toString()
    {
        return "Waiting for turn of crank\"\n";
    }
}
