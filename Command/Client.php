<?php

require __DIR__ . '/../vendor/autoload.php';

use DesignPatterns\Command\Command\GarageDoorOpenCommand;
use DesignPatterns\Command\Command\LightOnCommand;
use DesignPatterns\Command\Receiver\GarageDoor;
use DesignPatterns\Command\Receiver\Light;
use DesignPatterns\Command\SimpleRemoteControl;

/**
 * Il Command Pattern incapsula una richiesta in un oggetto, consentendo così di parametrizzare altri
 * oggetti con richieste diverse, accodare o registrare richieste e supportare operazioni annullabili.
 *
 * Un comando incapsula una richiesta legando insieme una serie di azioni su un destinatario/ricevitore (Receiver) specifico.
 * Per realizzare ciò, raggruppa azioni e Receiver in un oggetto che espone un solo metodo execute(). Quando il
 * metodo execute() viene chiamato, fa si che le azioni vengano invocate sul Receiver. Dall'esterno, nessun altro oggetto
 * sa veramente quali azioni vengono eseguite sul Receiver; sanno solo che se chiamano il metodo execute(), la loro
 * richiesta verrà servita.
 */

/**
 * I receivers
 */
$light = new Light();
$garageDoor = new GarageDoor();

/**
 * I comandi
 */
$lightOnCommand = new LightOnCommand($light);
$garageDoorOpenCommand = new GarageDoorOpenCommand($garageDoor);


$remote = new SimpleRemoteControl();

$remote->setCommand($lightOnCommand);
$remote->buttonWasPressed();

$remote->setCommand($garageDoorOpenCommand);
$remote->buttonWasPressed();
