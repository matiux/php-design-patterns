<?php

declare(strict_types=1);

namespace DesignPatterns\HexagonalArchitecture;

use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use Exception;

class ConnectionFactory
{
    private static array $connectionParams = [];

    protected function __construct()
    {
    }

    public static function create(): Connection
    {
        self::$connectionParams = [
            'dbname' => getenv('DB_NAME'),
            'user' => getenv('DB_USER'),
            'password' => getenv('DB_PASSWORD'),
            'host' => getenv('DB_HOST'),
            'port' => getenv('DB_PORT'),
            'driver' => 'pdo_mysql',
        ];

        /** @psalm-suppress MixedArgumentTypeCoercion, InvalidArgument */
        return DriverManager::getConnection(static::$connectionParams, new Configuration());
    }

    public static function truncateTables(): void
    {
        $conn = static::create();

        $schemaManager = $conn->getSchemaManager();
        $tables = $schemaManager->listTables();

        foreach ($tables as $table) {
            $dbPlatform = $conn->getDatabasePlatform();
            $conn->beginTransaction();

            try {
                $conn->executeQuery('SET FOREIGN_KEY_CHECKS=0');
                $q = $dbPlatform->getTruncateTableSql($table->getName());
                $conn->executeStatement($q);
                $conn->executeQuery('SET FOREIGN_KEY_CHECKS=1');
                $conn->commit();
            } catch (Exception $e) {
                $conn->rollback();
            }
        }
    }
}
