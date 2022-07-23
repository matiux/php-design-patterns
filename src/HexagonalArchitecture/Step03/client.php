<?php

declare(strict_types=1);

require dirname(__DIR__).'/../../vendor/autoload.php';

use DesignPatterns\ExagonalArchitecture\ConnectionFactory;
use DesignPatterns\ExagonalArchitecture\Request;
use DesignPatterns\ExagonalArchitecture\Step03\Infrastracture\Delivery\Http\Controller\IdeaController;

ConnectionFactory::truncateTables();

$controller = new IdeaController();

$ideaId = $controller->createAction(new Request(['title' => 'Flying pig', 'author' => 'Matteo', 'description' => 'A flying pig']));

$controller->rateAction(new Request(['id' => $ideaId->toString(), 'rating' => 5]));
