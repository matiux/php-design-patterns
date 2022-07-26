<?php

declare(strict_types=1);

namespace DesignPatterns\Specification;

interface UserSpecification
{
    public function isSatisfiedBy(User $candidate): bool;
}
