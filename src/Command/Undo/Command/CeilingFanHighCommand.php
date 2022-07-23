<?php

declare(strict_types=1);

namespace DesignPatterns\Command\Undo\Command;

use DesignPatterns\Command\Undo\Receiver\CeilingFan;

class CeilingFanHighCommand implements Command
{
    private $ceilingFan;
    private $prevSpeed;

    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute(): void
    {
        $this->prevSpeed = $this->ceilingFan->getSpeed();
        $this->ceilingFan->high();
    }

    public function undo(): void
    {
        switch ($this->prevSpeed) {
            case CeilingFan::HIGH:
                $this->ceilingFan->high();

                break;
            case CeilingFan::MEDIUM:
                $this->ceilingFan->medium();

                break;
            case CeilingFan::LOW:
                $this->ceilingFan->low();

                break;
            case CeilingFan::OFF:
                $this->ceilingFan->off();

                break;
        }
    }
}
