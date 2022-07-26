<?php

declare(strict_types=1);

namespace DesignPatterns\Specification;

class UserOrSpecification implements UserSpecification
{
    /**
     * @var UserSpecification[]
     */
    private array $specifications;

    /**
     * @param UserSpecification[] $specifications
     */
    public function __construct(UserSpecification ...$specifications)
    {
        $this->specifications = $specifications;
    }

    /**
     * If at least one specification is true, return true, else return false.
     *
     * @param User $candidate
     *
     * @return bool
     */
    public function isSatisfiedBy(User $candidate): bool
    {
        foreach ($this->specifications as $specification) {
            if ($specification->isSatisfiedBy($candidate)) {
                return true;
            }
        }

        return false;
    }
}
