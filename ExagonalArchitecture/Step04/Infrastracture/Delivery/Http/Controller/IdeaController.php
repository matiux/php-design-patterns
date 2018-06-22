<?php

namespace DesignPatterns\ExagonalArchitecture\Step04\Infrastracture\Delivery\Http\Controller;

use DesignPatterns\ExagonalArchitecture\Request;
use DesignPatterns\ExagonalArchitecture\Step04\Application\Service\Idea\CreateIdeaRequest;
use DesignPatterns\ExagonalArchitecture\Step04\Application\Service\Idea\CreateIdeaService;
use DesignPatterns\ExagonalArchitecture\Step04\Application\Service\Idea\RateIdeaRequest;
use DesignPatterns\ExagonalArchitecture\Step04\Application\Service\Idea\RateIdeaService;
use DesignPatterns\ExagonalArchitecture\Step04\Infrastracture\Domain\Idea\MySql\MySqlIdeaRepository;
use Ramsey\Uuid\UuidInterface;

/**
 *
 */
class IdeaController
{
    public function rateAction(Request $request)
    {
        $service = new RateIdeaService(new MySqlIdeaRepository());

        $updatedIdeaId = $service->execute(new RateIdeaRequest(
            $request->getParam('id'),
            $request->getParam('rating')
        ));

        echo sprintf("Idea with ID %s updated\n", $updatedIdeaId);
    }

    public function createAction(Request $request): UuidInterface
    {
        $service = new CreateIdeaService(new MySqlIdeaRepository());

        $ideaId = $service->execute(new CreateIdeaRequest(
            $request->getParam('title'),
            $request->getParam('author'),
            $request->getParam('description')
        ));

        echo sprintf("Idea created with ID %s\n", $ideaId);

        return $ideaId;
    }
}
