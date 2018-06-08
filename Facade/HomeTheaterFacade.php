<?php

namespace DesignPatterns\Facade;

class HomeTheaterFacade
{
    private $amp;
    private $tuner;
    private $dvd;
    private $cd;
    private $projector;
    private $lights;
    private $screen;
    private $popper;

    public function __construct
    (
        Amplifier $amp,
        Tuner $tuner,
        DvdPlayer $dvd,
        CdPlayer $cd,
        Projector $projector,
        Screen $screen,
        TheaterLights $lights,
        PopcornPopper $popper
    )
    {
        $this->amp = $amp;
        $this->tuner = $tuner;
        $this->dvd = $dvd;
        $this->cd = $cd;
        $this->projector = $projector;
        $this->screen = $screen;
        $this->lights = $lights;
        $this->popper = $popper;
    }

    public function watchMovie(string $movie): void
    {
        echo 'Get ready to watch a movie...' . "\n";

        $this->popper->on();
        $this->popper->pop();
        $this->lights->dim(10);
        $this->screen->down();
        $this->projector->on();
        $this->projector->wideScreenMode();
        $this->amp->on();
        $this->amp->setDvd($this->dvd);
        $this->amp->setSurroundSound();
        $this->amp->setVolume(5);
        $this->dvd->on();
        $this->dvd->play($movie);
    }

    public function endMovie(): void
    {
        echo 'Shutting movie theater down...' . "\n";

        $this->popper->off();
        $this->lights->on();
        $this->screen->up();
        $this->projector->off();
        $this->amp->off();
        $this->dvd->stop();
        $this->dvd->eject();
        $this->dvd->off();
    }

    public function listenToCd(string $cdTitle): void
    {
        echo 'Get ready for an audiopile experence...' . "\n";

        $this->lights->on();
        $this->amp->on();
        $this->amp->setVolume(5);
        $this->amp->setCd($this->cd);
        $this->amp->setStereoSound();
        $this->cd->on();
        $this->cd->play($cdTitle);
    }

    public function endCd(): void
    {
        echo 'Shutting down CD...' . "\n";

        $this->amp->off();
        $this->amp->setCd($this->cd);
        $this->cd->eject();
        $this->cd->off();
    }

    public function listenToRadio(string $frequency): void
    {
        echo 'Tuning in the airwaves...' . "\n";

        $this->tuner->on();
        $this->tuner->setFrequency($frequency);
        $this->amp->on();
        $this->amp->setVolume(5);
        $this->amp->setTuner($this->tuner);
    }

    public function endRadio(): void
    {
        echo 'Shutting down the tuner...' . "\n";

        $this->tuner->off();
        $this->amp->off();
    }
}
