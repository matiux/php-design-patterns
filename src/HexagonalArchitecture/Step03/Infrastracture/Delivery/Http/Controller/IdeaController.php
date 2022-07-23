<?php

declare(strict_types=1);

namespace DesignPatterns\HexagonalArchitecture\Step03\Infrastracture\Delivery\Http\Controller;

use DesignPatterns\HexagonalArchitecture\Request;
use DesignPatterns\HexagonalArchitecture\Step03\Infrastracture\Domain\Idea\MySql\MySqlIdeaRepository;
use Exception;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class IdeaController
{
    public function rateAction(Request $request): void
    {
        $ideaId = (string) $request->getParam('id');
        $rating = (float) $request->getParam('rating');

        $ideaRepository = new MySqlIdeaRepository();
        $idea = $ideaRepository->find(Uuid::fromString($ideaId));

        if (!$idea) {
            throw new Exception('Idea does not exist');
        }

        $idea->addRating($rating);
        $ideaRepository->update($idea);

        echo sprintf("Idea with ID %s updated\n", $ideaId);
    }

    public function createAction(Request $request): UuidInterface
    {
        $ideaRepository = new MySqlIdeaRepository();

        $ideaId = Uuid::uuid4();

        $ideaRepository->create(
            $ideaId,
            (string) $request->getParam('title'),
            (string) $request->getParam('author'),
            (string) $request->getParam('description')
        );

        echo sprintf("Idea created with ID %s\n", $ideaId->toString());

        return $ideaId;
    }
}
