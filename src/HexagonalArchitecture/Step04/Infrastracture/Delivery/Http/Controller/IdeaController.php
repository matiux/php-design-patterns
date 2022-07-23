<?php

declare(strict_types=1);

namespace DesignPatterns\HexagonalArchitecture\Step04\Infrastracture\Delivery\Http\Controller;

use DesignPatterns\HexagonalArchitecture\Request;
use DesignPatterns\HexagonalArchitecture\Step04\Application\Service\Idea\CreateIdeaRequest;
use DesignPatterns\HexagonalArchitecture\Step04\Application\Service\Idea\CreateIdeaService;
use DesignPatterns\HexagonalArchitecture\Step04\Application\Service\Idea\RateIdeaRequest;
use DesignPatterns\HexagonalArchitecture\Step04\Application\Service\Idea\RateIdeaService;
use DesignPatterns\HexagonalArchitecture\Step04\Infrastracture\Domain\Idea\MySql\MySqlIdeaRepository;
use Ramsey\Uuid\UuidInterface;

class IdeaController
{
    public function rateAction(Request $request): void
    {
        $service = new RateIdeaService(new MySqlIdeaRepository());

        $updatedIdeaId = $service->execute(new RateIdeaRequest(
            (string) $request->getParam('id'),
            (float) $request->getParam('rating')
        ));

        echo sprintf("Idea with ID %s updated\n", $updatedIdeaId->toString());
    }

    public function createAction(Request $request): UuidInterface
    {
        $service = new CreateIdeaService(new MySqlIdeaRepository());

        $ideaId = $service->execute(new CreateIdeaRequest(
            (string) $request->getParam('title'),
            (string) $request->getParam('author'),
            (string) $request->getParam('description')
        ));

        echo sprintf("Idea created with ID %s\n", $ideaId->toString());

        return $ideaId;
    }
}
