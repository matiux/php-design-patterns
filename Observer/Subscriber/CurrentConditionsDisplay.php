<?php

namespace DesignPatterns\Observer\Subscriber;

use DesignPatterns\Observer\Publisher\Subject;

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private $temperature = 0;
    private $humidity = 0;

    public function __construct(Subject $weatherData)
    {
        $weatherData->registerObserver($this);
    }

    public function update(float $temp, float $humidity, float $pressure): void
    {
        $this->temperature = $temp;
        $this->humidity = $humidity;

        $this->display();
    }

    public function display(): void
    {
        echo sprintf(
            "Current conditions: %.1f °C - %.1f%% humidity\n",
            $this->temperature,
            $this->humidity
        );
    }
}
