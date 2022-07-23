<?php

declare(strict_types=1);

require dirname(__DIR__).'/../vendor/autoload.php';

use DesignPatterns\Decorator\Beverage\Beverage;
use DesignPatterns\Decorator\Beverage\Cappuccino;
use DesignPatterns\Decorator\Beverage\Espresso;
use DesignPatterns\Decorator\Condiment\ConCacao;
use DesignPatterns\Decorator\Condiment\Schiumato;
use DesignPatterns\Decorator\Condiment\SoyMilk;

$cappuccino = new Cappuccino();
$cappuccino->setSize(Beverage::GRANDE);
$cappuccino = new ConCacao($cappuccino);
printBeverage($cappuccino);

$cappuccino2 = new Cappuccino();
$cappuccino2->setSize(Beverage::PICCOLO);
$cappuccino2 = new SoyMilk($cappuccino2);
printBeverage($cappuccino2);

$espresso = new Espresso();
$espresso->setSize(Beverage::MEDIO);
$espresso = new Schiumato($espresso);
$espresso = new ConCacao($espresso);
printBeverage($espresso);

$espresso = new Espresso();
$espresso->setSize(Beverage::PICCOLO);
printBeverage($espresso);

function printBeverage(Beverage $beverage): void
{
    $size = '';

    switch ($beverage->getSize()) {
        case Beverage::PICCOLO:
            $size = 'Piccolo';

            break;
        case Beverage::MEDIO:
            $size = 'Medio';

            break;
        case Beverage::GRANDE:
            $size = 'Grande';

            break;
    }

    echo sprintf(
        "%s: € %s (%s)\n",
        $beverage->getDescription(),
        number_format($beverage->cost(), 2),
        $size
    );
}
