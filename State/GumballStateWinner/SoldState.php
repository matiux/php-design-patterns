<?php

namespace DesignPatterns\State\GumballStateWinner;

class SoldState implements State
{
    private GumballMachine $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter(): void
    {
        echo "\tPlease wait, we're already giving you a gumball\n";
    }

    public function ejectQuarter(): void
    {
        echo "\tSorry, you already turned the crank\n";
    }

    public function turnCrank(): void
    {
        echo "\tTurning twice doesn't get you another gumball!\n";
    }

    public function dispense(): void
    {
        $this->gumballMachine->releaseBall();

        if ($this->gumballMachine->getCount() > 0) {

            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());

        } else {

            echo "\tOops, out of gumballs!\n";

            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        }
    }

    public function refill(): void
    {

    }

    public function __toString()
    {
        return "Dispensing a gumball\n";
    }
}
