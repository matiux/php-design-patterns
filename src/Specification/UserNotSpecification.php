<?php

declare(strict_types=1);

namespace DesignPatterns\Specification;

class UserNotSpecification implements UserSpecification
{
    private UserSpecification $specification;

    public function __construct(UserSpecification $specification)
    {
        $this->specification = $specification;
    }

    public function isSatisfiedBy(User $candidate): bool
    {
        return !$this->specification->isSatisfiedBy($candidate);
    }
}
