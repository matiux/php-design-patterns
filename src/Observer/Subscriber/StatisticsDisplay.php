<?php

declare(strict_types=1);

namespace DesignPatterns\Observer\Subscriber;

use DesignPatterns\Observer\Publisher\Subject;
use DesignPatterns\Observer\Publisher\WeatherData;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class StatisticsDisplay implements Observer, DisplayElement
{
    private float $maxTemp = 0;
    private float$minTemp = 93.3;
    private float $tempSum = 0;
    private int $numReadings = 0;
    private Subject $weatherData;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;

        $weatherData->registerObserver($this);
    }

    public function update(float $temp, float $humidity, float $pressure): void
    {
        // $temp = $this->weatherData->getTemperature();
        $this->tempSum += $temp;
        ++$this->numReadings;

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
