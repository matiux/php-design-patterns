<?php

declare(strict_types=1);

use DesignPatterns\Observer\Publisher\WeatherData;
use DesignPatterns\Observer\Subscriber\CurrentConditionsDisplay;
use DesignPatterns\Observer\Subscriber\ForecastDisplay;
use DesignPatterns\Observer\Subscriber\StatisticsDisplay;

require dirname(__DIR__).'/../vendor/autoload.php';

$weatherData = new WeatherData();

$currentConditionDisplay = new CurrentConditionsDisplay($weatherData);
$statisticsDisplay = new StatisticsDisplay($weatherData);
$forecastDisplay = new ForecastDisplay($weatherData);

echo "-------------------------\n";
$weatherData->setMeasurements(21.1, 65, 30.4);
echo "-------------------------\n";
$weatherData->setMeasurements(27.2, 70, 29.2);
echo "-------------------------\n";
$weatherData->setMeasurements(25.9, 90, 29.2);
echo "-------------------------\n";
