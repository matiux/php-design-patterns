<?php

declare(strict_types=1);

namespace DesignPatterns\ExagonalArchitecture\Step02;

use DesignPatterns\ExagonalArchitecture\ConnectionFactory;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class IdeaRepository
{
    private $connection;

    public function __construct()
    {
        $this->connection = ConnectionFactory::create();
    }

    public function find(UuidInterface $id): ?Idea
    {
        $sql = 'SELECT * FROM ideas WHERE id = ?';
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(1, $id->toString());
        $stmt->execute();

        $row = $stmt->fetch();

        if (!$row) {
            return null;
        }

        $idea = new Idea();
        $idea->setId(Uuid::fromString($row['id']));
        $idea->setTitle($row['title']);
        $idea->setDescription($row['description']);
        $idea->setAuthor($row['author']);
        $idea->setVotes($row['votes']);
        $idea->setRating($row['rating']);

        return $idea;
    }

    public function create(UuidInterface $ideaId, string $title, string $author, string $description): bool
    {
        $insered = $this->connection->insert('ideas', [
            'id' => $ideaId->toString(),
            'title' => $title,
            'author' => $author,
            'description' => $description,
        ]);

        return $insered > 1;
    }

    public function update(Idea $idea): bool
    {
        $data = [
            'rating' => $idea->getRating(),
            'votes' => $idea->getVotes(),
        ];

        $updated = $this->connection->update('ideas', $data, ['id' => (string) $idea->getId()]);

        return $updated > 0;
    }
}
