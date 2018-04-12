<?php

namespace DesignPatterns\Observer\Subscriber;

use DesignPatterns\Observer\Publisher\Subject;

class ForecastDisplay implements Observer, DisplayElement
{
    private $currentPressure = 29.92;
    private $lastPressure;

    public function __construct(Subject $weatherData)
    {
        $weatherData->registerObserver($this);
    }

    public function display(): void
    {
        echo "Forecast:\n";

        if ($this->currentPressure > $this->lastPressure) {

            echo "\tImproving weather on the way!\n";

        } else if ($this->currentPressure == $this->lastPressure) {

            echo "\tMore of the same\n";

        } else if ($this->currentPressure < $this->lastPressure) {

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
