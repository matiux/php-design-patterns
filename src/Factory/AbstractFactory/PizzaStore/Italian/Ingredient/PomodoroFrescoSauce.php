<?php

declare(strict_types=1);

namespace DesignPatterns\Factory\AbstractFactory\PizzaStore\Italian\Ingredient;

use DesignPatterns\Factory\AbstractFactory\PizzaStore\Ingredient\Sauce;

class PomodoroFrescoSauce extends Sauce
{
    public function getName()
    {
        return 'Polpa di pomodoro fresco bio';
    }
}
