<?php

namespace DesignPatterns\Visitor;

/**
 * The Company Concrete Component.
 */
class Company implements Entity
{
    private string $name;

    /**
     * @var Department[]
     */
    private array $departments;

    public function __construct(string $name, array $departments)
    {
        $this->name = $name;
        $this->departments = $departments;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDepartments(): array
    {
        return $this->departments;
    }

    public function accept(Visitor $visitor): string
    {
        // See, the Company component must call the visitCompany method. The
        // same principle applies to all components.
        return $visitor->visitCompany($this);
    }
}