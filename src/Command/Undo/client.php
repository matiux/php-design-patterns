<?php

declare(strict_types=1);

require dirname(__DIR__).'/../../vendor/autoload.php';

use DesignPatterns\Command\Undo\Command\CeilingFanHighCommand;
use DesignPatterns\Command\Undo\Command\CeilingFanMediumCommand;
use DesignPatterns\Command\Undo\Command\CeilingFanOffCommand;
use DesignPatterns\Command\Undo\Command\LightOffCommand;
use DesignPatterns\Command\Undo\Command\LightOnCommand;
use DesignPatterns\Command\Undo\Receiver\CeilingFan;
use DesignPatterns\Command\Undo\Receiver\Light;
use DesignPatterns\Command\Undo\RemoteControl;

$remoteControl = new RemoteControl();

$livingRoomLight = new Light('Living Room');
$livingRoomLightOn = new LightOnCommand($livingRoomLight);
$livingRoomLightOff = new LightOffCommand($livingRoomLight);

$remoteControl->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);

$remoteControl->onButtonWasPushed(0);
$remoteControl->offButtonWasPushed(0);
echo $remoteControl;
$remoteControl->undoButtonWasPushed();
$remoteControl->offButtonWasPushed(0);
$remoteControl->onButtonWasPushed(0);
echo $remoteControl;
$remoteControl->undoButtonWasPushed();

$ceilingFan = new CeilingFan('Living Room');
$ceilingFanMedium = new CeilingFanMediumCommand($ceilingFan);
$ceilingFanHigh = new CeilingFanHighCommand($ceilingFan);
$ceilingFanOff = new CeilingFanOffCommand($ceilingFan);

$remoteControl->setCommand(0, $ceilingFanMedium, $ceilingFanOff);
$remoteControl->setCommand(1, $ceilingFanHigh, $ceilingFanOff);

$remoteControl->onButtonWasPushed(0);
$remoteControl->offButtonWasPushed(0);
echo $remoteControl;
$remoteControl->undoButtonWasPushed();

$remoteControl->onButtonWasPushed(1);
echo $remoteControl;
$remoteControl->undoButtonWasPushed();
