<?php

declare(strict_types=1);

require dirname(__DIR__).'/../../vendor/autoload.php';

use DesignPatterns\Command\Advance\Command\CeilingFanOffCommand;
use DesignPatterns\Command\Advance\Command\CeilingFanOnCommand;
use DesignPatterns\Command\Advance\Command\GarageDoorDownCommand;
use DesignPatterns\Command\Advance\Command\GarageDoorUpCommand;
use DesignPatterns\Command\Advance\Command\LightOffCommand;
use DesignPatterns\Command\Advance\Command\LightOnCommand;
use DesignPatterns\Command\Advance\Command\StereoOffCommand;
use DesignPatterns\Command\Advance\Command\StereoOnWithCDCommand;
use DesignPatterns\Command\Advance\Receiver\CeilingFan;
use DesignPatterns\Command\Advance\Receiver\GarageDoor;
use DesignPatterns\Command\Advance\Receiver\Light;
use DesignPatterns\Command\Advance\Receiver\Stereo;
use DesignPatterns\Command\Advance\RemoteControl;

$remoteControl = new RemoteControl();

$livingRoomLight = new Light('Living Room');
$kitchenLight = new Light('Kitchen');
$ceilingFan = new CeilingFan('Living Room');
$garageDoor = new GarageDoor('');
$stereo = new Stereo('Living Room');

$livingRoomLightOn = new LightOnCommand($livingRoomLight);
$livingRoomLightOff = new LightOffCommand($livingRoomLight);
$kitchenLightOn = new LightOnCommand($kitchenLight);
$kitchenLightOff = new LightOffCommand($kitchenLight);

$ceilingFanOn = new CeilingFanOnCommand($ceilingFan);
$ceilingFanOff = new CeilingFanOffCommand($ceilingFan);

new GarageDoorUpCommand($garageDoor);
new GarageDoorDownCommand($garageDoor);

$stereoOnWithCD = new StereoOnWithCDCommand($stereo);
$stereoOff = new StereoOffCommand($stereo);

$remoteControl->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);
$remoteControl->setCommand(1, $kitchenLightOn, $kitchenLightOff);
$remoteControl->setCommand(2, $ceilingFanOn, $ceilingFanOff);
$remoteControl->setCommand(3, $stereoOnWithCD, $stereoOff);

echo $remoteControl;

$remoteControl->onButtonWasPushed(0);
$remoteControl->offButtonWasPushed(0);
$remoteControl->onButtonWasPushed(1);
$remoteControl->offButtonWasPushed(1);
$remoteControl->onButtonWasPushed(2);
$remoteControl->offButtonWasPushed(2);
$remoteControl->onButtonWasPushed(3);
$remoteControl->offButtonWasPushed(3);
