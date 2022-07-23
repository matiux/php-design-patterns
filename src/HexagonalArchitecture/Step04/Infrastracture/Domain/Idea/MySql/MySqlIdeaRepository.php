<?php

declare(strict_types=1);

namespace DesignPatterns\HexagonalArchitecture\Step04\Infrastracture\Domain\Idea\MySql;

use DesignPatterns\HexagonalArchitecture\ConnectionFactory;
use DesignPatterns\HexagonalArchitecture\Step04\Domain\Idea\Idea;
use DesignPatterns\HexagonalArchitecture\Step04\Domain\Idea\IdeaRepository;
use Doctrine\DBAL\Connection;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class MySqlIdeaRepository implements IdeaRepository
{
    private Connection  $connection;

    public function __construct()
    {
        $this->connection = ConnectionFactory::create();
    }

    /**
     * @param UuidInterface $id
     *
     * @throws \Doctrine\DBAL\Driver\Exception
     * @throws \Doctrine\DBAL\Exception
     *
     * @return null|Idea
     */
    public function find(UuidInterface $id): ?Idea
    {
        $sql = 'SELECT * FROM ideas WHERE id = ?';
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(1, $id->toString());
        $result = $stmt->executeQuery();

        $row = $result->fetchAssociative();

        if (!$row) {
            return null;
        }

        $idea = new Idea();
        $idea->setId(Uuid::fromString((string) $row['id']));
        $idea->setTitle((string) $row['title']);
        $idea->setDescription((string) $row['description']);
        $idea->setAuthor((string) $row['author']);
        $idea->setVotes((int) $row['votes']);
        $idea->setRating((float) $row['rating']);

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

        $updated = $this->connection->update('ideas', $data, ['id' => $idea->getId()->toString()]);

        return $updated > 0;
    }
}
