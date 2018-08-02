<?php

namespace DesignPatterns\State\GumballStateWinner;

class WinnerState implements State
{
    private $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter(): void
    {
        echo sprintf("\tPlease wait, we're already giving you a Gumball\n");
    }

    public function ejectQuarter(): void
    {
        echo sprintf("\tPlease wait, we're already giving you a Gumball\n");

        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    public function turnCrank(): void
    {
        echo sprintf("\tTurning again doesn't get you another gumball!\n");
    }

    public function dispense(): void
    {
        $this->gumballMachine->releaseBall();

        if ($this->gumballMachine->getCount() == 0) {

            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());

        } else {

            $this->gumballMachine->releaseBall();

            echo sprintf("\tYOU'RE A WINNER! You got two gumballs for your quarter\n");

            if ($this->gumballMachine->getCount() > 0) {

                $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());

            } else {

                echo sprintf("\tOops, out of gumballs!\n");

                $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
            }
        }
    }

    public function refill(): void
    {

    }

    public function __toString()
    {
        return sprintf("Despensing two gumballs for your quarter, because YOU'RE A WINNER!\n");
    }
}
