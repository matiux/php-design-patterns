<?php

declare(strict_types=1);

namespace DesignPatterns\Command\Macro\Command;

use DesignPatterns\Command\Macro\Receiver\CeilingFan;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class CeilingFanOffCommand implements Command
{
    private CeilingFan $ceilingFan;
    private int $prevSpeed;

    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute(): void
    {
        $this->prevSpeed = $this->ceilingFan->getSpeed();
        $this->ceilingFan->off();
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
