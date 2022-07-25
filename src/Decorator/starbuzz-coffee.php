<?php

declare(strict_types=1);

require dirname(__DIR__).'/../vendor/autoload.php';

use DesignPatterns\Decorator\Beverage\Beverage;
use DesignPatterns\Decorator\Beverage\Cappuccino;
use DesignPatterns\Decorator\Beverage\Espresso;
use DesignPatterns\Decorator\Condiment\WithCocoa;
use DesignPatterns\Decorator\Condiment\Macchiato;
use DesignPatterns\Decorator\Condiment\SoyMilk;

$cappuccino = new Cappuccino();
$cappuccino->setSize(Beverage::BIG);
$cappuccino = new WithCocoa($cappuccino);
printBeverage($cappuccino);

$cappuccino2 = new Cappuccino();
$cappuccino2->setSize(Beverage::SMALL);
$cappuccino2 = new SoyMilk($cappuccino2);
printBeverage($cappuccino2);

$espresso = new Espresso();
$espresso->setSize(Beverage::MEDIUM);
$espresso = new Macchiato($espresso);
$espresso = new WithCocoa($espresso);
printBeverage($espresso);

$espresso = new Espresso();
$espresso->setSize(Beverage::SMALL);
printBeverage($espresso);

function printBeverage(Beverage $beverage): void
{
    $size = '';

    switch ($beverage->getSize()) {
        case Beverage::SMALL:
            $size = 'Small';

            break;
        case Beverage::MEDIUM:
            $size = 'Medium';

            break;
        case Beverage::BIG:
            $size = 'Big';

            break;
    }

    echo sprintf(
        "%s: € %s (%s)\n",
        $beverage->getDescription(),
        number_format($beverage->cost(), 2),
        $size
    );
}
