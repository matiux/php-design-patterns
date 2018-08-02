<?php

namespace DesignPatterns\State\GumballStateWinner;

class SoldState implements State
{
    private $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter(): void
    {
        echo sprintf("\tPlease wait, we're already giving you a gumball\n");
    }

    public function ejectQuarter(): void
    {
        echo sprintf("\tSorry, you already turned the crank\n");
    }

    public function turnCrank(): void
    {
        echo sprintf("\tTurning twice doesn't get you another gumball!\n");
    }

    public function dispense(): void
    {
        $this->gumballMachine->releaseBall();

        if ($this->gumballMachine->getCount() > 0) {

            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());

        } else {

            echo sprintf("\tOops, out of gumballs!\n");

            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        }
    }

    public function refill(): void
    {

    }

    public function __toString()
    {
        return sprintf("Dispensing a gumball\n");
    }
}
