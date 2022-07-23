<?php

declare(strict_types=1);

namespace DesignPatterns\HexagonalArchitecture\Step04\Application\Service\Idea;

use DesignPatterns\HexagonalArchitecture\Step04\Domain\Idea\Idea;

class RateIdeaResponse
{
    private $idea;

    public function __construct(Idea $idea)
    {
        $this->idea = $idea;
    }
}
