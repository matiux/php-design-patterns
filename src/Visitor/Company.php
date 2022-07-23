<?php

declare(strict_types=1);

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

    /**
     * @param string       $name
     * @param Department[] $departments
     */
    public function __construct(string $name, array $departments)
    {
        $this->name = $name;
        $this->departments = $departments;
    }

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return Department[]
     */
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
