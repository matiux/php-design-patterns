<?php

namespace DesignPatterns\Observer\Subscriber;

use DesignPatterns\Observer\Publisher\Subject;
use DesignPatterns\Observer\Publisher\WeatherData;

class StatisticsDisplay implements Observer, DisplayElement
{
    private $maxTemp = 0;
    private $minTemp = 93.3;
    private $tempSum = 0;

    private $numReadings;

    /** @var WeatherData */
    private $weatherData;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;

        $weatherData->registerObserver($this);
    }

    public function update(float $temp, float $humidity, float $pressure): void
    {
        //$temp = $this->weatherData->getTemperature();
        $this->tempSum += $temp;
        $this->numReadings++;

        if ($temp > $this->maxTemp) {
            $this->maxTemp = $temp;
        }

        if ($temp < $this->minTemp) {
            $this->minTemp = $temp;
        }

        $this->display();
    }

    public function display(): void
    {
        echo sprintf(
            "Avg/Max/Min temperature = %.1f/%.1f/%.1f\n",
            $this->tempSum / $this->numReadings,
            $this->maxTemp,
            $this->minTemp
        );
    }
}
