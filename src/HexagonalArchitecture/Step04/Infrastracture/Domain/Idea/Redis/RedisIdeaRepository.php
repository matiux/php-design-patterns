<?php

declare(strict_types=1);

namespace DesignPatterns\HexagonalArchitecture\Step04\Infrastracture\Domain\Idea\Redis;

use DesignPatterns\HexagonalArchitecture\Step04\Domain\Idea\Idea;
use DesignPatterns\HexagonalArchitecture\Step04\Domain\Idea\IdeaRepository;
use Ramsey\Uuid\UuidInterface;

class RedisIdeaRepository implements IdeaRepository
{
    public function find(UuidInterface $id): ?Idea
    {
        return null;
    }

    public function create(UuidInterface $ideaId, string $title, string $author, string $description): bool
    {
        return true;
    }

    public function update(Idea $idea): bool
    {
        return true;
    }
}
