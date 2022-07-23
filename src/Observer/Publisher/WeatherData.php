<?php

declare(strict_types=1);

namespace DesignPatterns\Observer\Publisher;

use DesignPatterns\Observer\Subscriber\Observer;

class WeatherData implements Subject
{
    /** @var Observer[] */
    private $observers;

    private $temperature;
    private $humidity;
    private $pressure;

    public function __construct()
    {
        $this->observers = new \ArrayObject();
    }

    public function registerObserver(Observer $observer): void
    {
        $this->observers->append($observer);
    }

    public function removeObserver(Observer $observer): void
    {
        foreach ($this->observers as $key => $ob) {
            if ($ob == $observer) {
                unset($this->observers[$key]);
            }
        }
    }

    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    public function setMeasurements(float $temp, float $humidity, float $pressure)
    {
        $this->temperature = $temp;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->measurementsChanged();
    }
}
