<?php

declare(strict_types=1);

namespace DesignPatterns\HexagonalArchitecture;

use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use Exception;

class ConnectionFactory
{
    private static array $connectionParams = [
        'dbname' => 'idy',
        'user' => 'user',
        'password' => 'password',
        'host' => 'servicedb',
        'driver' => 'pdo_mysql',
    ];

    protected function __construct()
    {
    }

    public static function create(): Connection
    {
        /** @psalm-suppress MixedArgumentTypeCoercion */
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
