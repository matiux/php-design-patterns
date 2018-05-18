<?php

use DesignPatterns\Singleton\Singleton;

require __DIR__ . '/../vendor/autoload.php';

$singletonObj = Singleton::getInstance();

$singletonObj->method();
