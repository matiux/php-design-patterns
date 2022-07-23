<?php

declare(strict_types=1);

namespace DesignPatterns\Observer\Publisher;

use ArrayObject;
use DesignPatterns\Observer\Subscriber\Observer;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class WeatherData implements Subject
{
    /** @var ArrayObject<int, Observer> */
    private ArrayObject $observers;

    private float $temperature;
    private float $humidity;
    private float $pressure;

    public function __construct()
    {
        /** @var ArrayObject<int, Observer> */
        $this->observers = new ArrayObject();
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

    public function measurementsChanged(): void
    {
        $this->notifyObservers();
    }

    public function setMeasurements(float $temp, float $humidity, float $pressure): void
    {
        $this->temperature = $temp;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->measurementsChanged();
    }
}
