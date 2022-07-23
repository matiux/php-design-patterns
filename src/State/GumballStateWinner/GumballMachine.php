<?php

declare(strict_types=1);

namespace DesignPatterns\State\GumballStateWinner;

class GumballMachine
{
    private SoldOutState $soldOutState;
    private NoQuarterState $noQuarterState;
    private HasQuarterState $hasQuarterState;
    private SoldState $soldState;
    private WinnerState $winnerState;

    private State $state;

    private int $count;

    public function __construct(int $numberGumballs)
    {
        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);
        $this->winnerState = new WinnerState($this);

        $this->count = $numberGumballs;

        if ($numberGumballs > 0) {
            $this->state = $this->noQuarterState;
        } else {
            $this->state = $this->soldOutState;
        }
    }

    public function insertQuarter(): void
    {
        $this->state->insertQuarter();
    }

    public function ejectQuarter(): void
    {
        $this->ejectQuarter();
    }

    public function turnCrank(): void
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    public function releaseBall(): void
    {
        echo "\tA gumball comes rolling out the slot...\n";

        if (0 != $this->count) {
            $this->count = $this->count - 1;
        }
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function refill(int $count): void
    {
        $this->count += $count;
        echo sprintf("\n\nThe gumball machine was just refilled; it's new count is: %d\n\n", $this->count);

        $this->state->refill();
    }

    public function setState(State $state): void
    {
        $this->state = $state;
    }

    public function getState(): State
    {
        return $this->state;
    }

    public function getSoldOutState(): State
    {
        return $this->soldOutState;
    }

    public function getNoQuarterState(): State
    {
        return $this->noQuarterState;
    }

    public function getHasQuarterState(): State
    {
        return $this->hasQuarterState;
    }

    public function getSoldState(): State
    {
        return $this->soldState;
    }

    public function __toString(): string
    {
        $result = "\n\nMighty Gumball, Inc.\n".
            "PHP-enabled Standing Gumball Model #2004\n".
            "Inventory: {$this->count} gumball";

        if (1 != $this->count) {
            $result .= 's';
        }

        $result .= "\n";
        $result .= "Machine is: {$this->state}\n";

        return $result;
    }

    public function getWinnerState(): State
    {
        return $this->winnerState;
    }
}
