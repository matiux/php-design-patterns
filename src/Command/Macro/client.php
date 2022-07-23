<?php

declare(strict_types=1);

require dirname(__DIR__).'/../../vendor/autoload.php';

use DesignPatterns\Command\Macro\Command\Commands;
use DesignPatterns\Command\Macro\Command\LightOffCommand;
use DesignPatterns\Command\Macro\Command\LightOnCommand;
use DesignPatterns\Command\Macro\Command\MacroCommand;
use DesignPatterns\Command\Macro\Command\StereoOffCommand;
use DesignPatterns\Command\Macro\Command\StereoOnWithCDCommand;
use DesignPatterns\Command\Macro\Receiver\Light;
use DesignPatterns\Command\Macro\Receiver\Stereo;
use DesignPatterns\Command\Macro\RemoteControl;

$remoteControl = new RemoteControl();

$livingRoomLight = new Light('Living Room');
$stereo = new Stereo('Living Room');

$lightOnCommand = new LightOnCommand($livingRoomLight);
$stereoOnCommand = new StereoOnWithCDCommand($stereo);

$lightOffCommand = new LightOffCommand($livingRoomLight);
$stereoOffCommand = new StereoOffCommand($stereo);

($onCommands = new Commands())->bulkAppend($lightOnCommand, $stereoOnCommand);
($offCommands = new Commands())->bulkAppend($lightOffCommand, $stereoOffCommand);

$onMacroCommand = new MacroCommand($onCommands);
$offMacroCommands = new MacroCommand($offCommands);

$remoteControl->setCommand(0, $onMacroCommand, $offMacroCommands);

echo $remoteControl;
echo '--- Pushing Macro ON ---'."\n";
$remoteControl->onButtonWasPushed(0);
echo '--- Pushing Macro OFF ---'."\n\n";
$remoteControl->offButtonWasPushed(0);
echo '--- Pushing Macro UNDO ---'."\n\n";
$remoteControl->undoButtonWasPushed();
