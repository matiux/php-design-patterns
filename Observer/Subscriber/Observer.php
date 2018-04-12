<?php

namespace DesignPatterns\Observer\Subscriber;

interface Observer
{
    public function update(float $temp, float $humidity, float $pressure): void;
}
