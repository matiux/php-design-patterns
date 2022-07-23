<?php

declare(strict_types=1);

namespace DesignPatterns\HexagonalArchitecture\Step01;

use DesignPatterns\HexagonalArchitecture\Request;
use Doctrine\DBAL\Connection;
use Exception;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

/**
 * Single Responsibility Principle (SRP) completamente non rispettato.
 */
class IdeaController
{
    private Connection $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function rateAction(Request $request): void
    {
        $ideaId = (string) $request->getParam('id');
        $rating = (float) $request->getParam('rating');

        $sql = 'SELECT * FROM ideas WHERE id = ?';
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(1, $ideaId);
        $result = $stmt->executeQuery();

        $row = $result->fetchAssociative();

        if (!$row) {
            throw new Exception('Idea does not exist');
        }

        $idea = new Idea();
        $idea->setId(Uuid::fromString((string) $row['id']));
        $idea->setTitle((string) $row['title']);
        $idea->setDescription((string) $row['description']);
        $idea->setAuthor((string) $row['author']);
        $idea->setVotes((int) $row['votes']);
        $idea->setRating((float) $row['rating']);

        $idea->addRating($rating);

        $data = [
            'rating' => $idea->getRating(),
            'votes' => $idea->getVotes(),
        ];

        $this->connection->update('ideas', $data, ['id' => $ideaId]);

        echo sprintf("Idea with ID %s updated\n", $ideaId);
    }

    public function createAction(Request $request): UuidInterface
    {
        $ideaId = Uuid::uuid4();

        $this->connection->insert('ideas', [
            'id' => $ideaId->toString(),
            'title' => $request->getParam('title'),
            'author' => $request->getParam('author'),
            'description' => $request->getParam('description'),
        ]);

        echo sprintf("Idea created with ID %s\n", $ideaId->toString());

        return $ideaId;
    }
}
