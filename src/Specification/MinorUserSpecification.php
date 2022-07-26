<?php

declare(strict_types=1);

namespace DesignPatterns\Specification;

use DateTime;

class MinorUserSpecification implements UserSpecification
{
    public function isSatisfiedBy(User $candidate): bool
    {
        $now = new DateTime();
        $difference = $now->diff($candidate->dateOfBirth());

        return $difference->y < 18;
    }
}
