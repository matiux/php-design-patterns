<?php

namespace DesignPatterns\Visitor;

class Employee implements Entity
{
    private string $name;

    private string $position;

    private int $salary;

    public function __construct(string $name, string $position, int $salary)
    {
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }

    public function accept(Visitor $visitor): string
    {
        return $visitor->visitEmployee($this);
    }
}