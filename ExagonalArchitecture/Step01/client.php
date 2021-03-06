<?php

require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\ExagonalArchitecture\ConnectionFactory;
use DesignPatterns\ExagonalArchitecture\Request;
use DesignPatterns\ExagonalArchitecture\Step01\IdeaController;

ConnectionFactory::truncateTables();

$controller = new IdeaController(ConnectionFactory::create());

$ideaId = $controller->createAction(new Request(['title' => 'Flying pig', 'author' => 'Matteo', 'description' => 'A flying pig']));


$controller->rateAction(new Request(['id' => $ideaId->toString(), 'rating' => 5]));
