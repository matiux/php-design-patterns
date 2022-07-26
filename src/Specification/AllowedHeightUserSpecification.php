<?php

declare(strict_types=1);

namespace DesignPatterns\Specification;

class AllowedHeightUserSpecification implements UserSpecification
{
    public function isSatisfiedBy(User $candidate): bool
    {
        return $candidate->height() >= 1.60;
    }
}
