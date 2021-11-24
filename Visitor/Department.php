<?php

namespace DesignPatterns\Visitor;

class Department implements Entity
{
    private string $name;

    /**
     * @var Employee[]
     */
    private array $employees;

    public function __construct(string $name, array $employees)
    {
        $this->name = $name;
        $this->employees = $employees;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmployees(): array
    {
        return $this->employees;
    }

    public function getCost(): int
    {
        $cost = 0;

        foreach ($this->employees as $employee) {
            $cost += $employee->getSalary();
        }

        return $cost;
    }

    public function accept(Visitor $visitor): string
    {
        return $visitor->visitDepartment($this);
    }
}