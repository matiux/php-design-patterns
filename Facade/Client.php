<?php

require __DIR__ . '/../vendor/autoload.php';

use DesignPatterns\Facade\Amplifier;
use DesignPatterns\Facade\CdPlayer;
use DesignPatterns\Facade\DvdPlayer;
use DesignPatterns\Facade\HomeTheaterFacade;
use DesignPatterns\Facade\PopcornPopper;
use DesignPatterns\Facade\Projector;
use DesignPatterns\Facade\Screen;
use DesignPatterns\Facade\TheaterLights;
use DesignPatterns\Facade\Tuner;


$amp = new Amplifier("Top-O-Line Amplifier");
$tuner = new Tuner("Top-O-Line AM/FM Tuner", $amp);
$dvd = new DvdPlayer("Top-O-Line DVD Player", $amp);
$cd = new CdPlayer("Top-O-Line CD Player", $amp);
$projector = new Projector("Top-O-Line Projector", $dvd);
$lights = new TheaterLights("Theater Ceiling Lights");
$screen = new Screen("Theater Screen");
$popper = new PopcornPopper("Popcorn Popper");

$homeTheaterfacade = new HomeTheaterFacade($amp, $tuner, $dvd, $cd, $projector, $screen, $lights, $popper);

echo 'Il film inizia:' . "\n";
$homeTheaterfacade->watchMovie('Matrix');
echo '--------------------' . "\n";
echo 'Il film finisce:' . "\n";
$homeTheaterfacade->endMovie();
