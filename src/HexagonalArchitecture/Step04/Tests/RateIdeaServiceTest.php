<?php

declare(strict_types=1);

namespace DesignPatterns\HexagonalArchitecture\Step04\Tests;

use DesignPatterns\HexagonalArchitecture\Step04\Application\Service\Idea\Exception\IdeaNotFoundException;
use DesignPatterns\HexagonalArchitecture\Step04\Application\Service\Idea\RateIdeaRequest;
use DesignPatterns\HexagonalArchitecture\Step04\Application\Service\Idea\RateIdeaService;
use DesignPatterns\HexagonalArchitecture\Step04\Domain\Idea\Idea;
use DesignPatterns\HexagonalArchitecture\Step04\Domain\Idea\IdeaRepository;
use Mockery;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class RateIdeaServiceTest extends TestCase
{
    /**
     * @test
     */
    public function when_idea_does_not_exist_an_exception_should_be_thrown_v1()
    {
        self::expectException(IdeaNotFoundException::class);

        $ideaRepository = Mockery::mock(IdeaRepository::class);
        $ideaRepository->shouldReceive('find')
            ->with(Mockery::type(UuidInterface::class))
            ->andReturn(null);

        $service = new RateIdeaService($ideaRepository);

        $service->execute(
            new RateIdeaRequest(
                Uuid::uuid4()->toString(),
                4.0
            )
        );
    }

    /**
     * @test
     */
    public function when_idea_does_not_exist_an_exception_should_be_thrown_v2()
    {
        self::expectException(IdeaNotFoundException::class);

        $service = new RateIdeaService(new EmptyIdeaRepository());

        $service->execute(
            new RateIdeaRequest(
                Uuid::uuid4()->toString(),
                4.0
            )
        );
    }
}

class EmptyIdeaRepository implements IdeaRepository
{
    public function find(UuidInterface $id): ?Idea
    {
        return null;
    }

    public function create(UuidInterface $ideaId, string $title, string $author, string $description): bool
    {
    }

    public function update(Idea $idea): bool
    {
    }
}
