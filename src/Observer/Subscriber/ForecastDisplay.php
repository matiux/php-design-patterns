<?php

declare(strict_types=1);

namespace DesignPatterns\Observer\Subscriber;

use DesignPatterns\Observer\Publisher\Subject;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ForecastDisplay implements Observer, DisplayElement
{
    private float $currentPressure = 29.92;
    private float $lastPressure;

    public function __construct(Subject $weatherData)
    {
        $weatherData->registerObserver($this);
    }

    public function display(): void
    {
        echo "Forecast:\n";

        if ($this->currentPressure > $this->lastPressure) {
            echo "\tImproving weather on the way!\n";
        } elseif ($this->currentPressure == $this->lastPressure) {
            echo "\tMore of the same\n";
        } elseif ($this->currentPressure < $this->lastPressure) {
            echo "\tWatch out for cooler, rainy weather\n";
        }
    }

    public function update(float $temp, float $humidity, float $pressure): void
    {
        $this->lastPressure = $this->currentPressure;
        $this->currentPressure = $pressure;

        $this->display();
    }
}
