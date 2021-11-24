<?php

namespace DesignPatterns\State\GumballStateWinner;

class WinnerState implements State
{
    private GumballMachine $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter(): void
    {
        echo "\tPlease wait, we're already giving you a Gumball\n";
    }

    public function ejectQuarter(): void
    {
        echo "\tPlease wait, we're already giving you a Gumball\n";

        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    public function turnCrank(): void
    {
        echo "\tTurning again doesn't get you another gumball!\n";
    }

    public function dispense(): void
    {
        $this->gumballMachine->releaseBall();

        if ($this->gumballMachine->getCount() == 0) {

            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());

        } else {

            $this->gumballMachine->releaseBall();

            echo "\tYOU'RE A WINNER! You got two gumballs for your quarter\n";

            if ($this->gumballMachine->getCount() > 0) {

                $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());

            } else {

                echo "\tOops, out of gumballs!\n";

                $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
            }
        }
    }

    public function refill(): void
    {

    }

    public function __toString()
    {
        return "Dispensing two gumballs for your quarter, because YOU'RE A WINNER!\n";
    }
}
