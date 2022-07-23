<?php

declare(strict_types=1);

require dirname(__DIR__).'/../vendor/autoload.php';

use DesignPatterns\Singleton\Singleton;

$singletonObj = Singleton::getInstance();

$singletonObj->method();
