<?php

namespace DesignPatterns\State\GumballStateWinner;

interface State
{
    public function insertQuarter(): void;

    public function ejectQuarter(): void;

    public function turnCrank(): void;

    public function dispense(): void;

    public function refill(): void;
}
