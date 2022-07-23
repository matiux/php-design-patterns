<?php

declare(strict_types=1);

require dirname(__DIR__).'/../../vendor/autoload.php';

use DesignPatterns\HexagonalArchitecture\ConnectionFactory;
use DesignPatterns\HexagonalArchitecture\Request;
use DesignPatterns\HexagonalArchitecture\Step01\IdeaController;

ConnectionFactory::truncateTables();

$controller = new IdeaController(ConnectionFactory::create());

$ideaId = $controller->createAction(new Request(['title' => 'Flying pig', 'author' => 'Matteo', 'description' => 'A flying pig']));

$controller->rateAction(new Request(['id' => $ideaId->toString(), 'rating' => 5]));
