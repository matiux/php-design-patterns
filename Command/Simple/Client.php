<?php

require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\Command\Simple\Command\GarageDoorOpenCommand;
use DesignPatterns\Command\Simple\Command\LightOnCommand;
use DesignPatterns\Command\Simple\Receiver\GarageDoor;
use DesignPatterns\Command\Simple\Receiver\Light;
use DesignPatterns\Command\Simple\SimpleRemoteControl;

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
 * _ Il client è responsabile della creazione del ConcreteCommand e di settare il suo Receiver
 * _ Il Receiver sa come svolgere il lavoro necessario per eseguire la richeista. Ogni classe puà essere un Receiver
 * _ Il ConcreteCommand definisce un binding tra un'azione e un Receiver. L'Invoker fa una Request chiamando il metodo execute() e
 * il ConcreteCommand lo esegue chiamando una o più azioni sul Receiver
 * _ Il metodo execute() invoca le azioni sul Receiver necessarie per  soddisfare la richiesta
 * _ C'è un'interfaccia Command per tutti i comandi. Un Command viene invocato tramite il suo metodo execute(), che chiede al suo
 * Receiver di svolgere un'azione.
 * _ L'Invoker contiene un comando e a un certo punto chiede al comando di eseguire una richiesta chiamando il suo metodo execute()
 */

/**
 * I receivers
 *
 * Questi oggetti saranno i receivers (destinatari) delle richieste
 */
$light = new Light();
$garageDoor = new GarageDoor();

/**
 * I comandi
 *
 * 1) The client creates a command object.
 */
$lightOnCommand = new LightOnCommand($light);
$garageDoorOpenCommand = new GarageDoorOpenCommand($garageDoor);

/**
 * Invoker
 */
$remote = new SimpleRemoteControl();

/**
 * 2) The client does a setCommand() to store the command object in the invoker.
 */
$remote->setCommand($lightOnCommand);

/**
 * 3) The client asks the invoker to execute the command. Note: once the command is loaded into the invoker,
 * it may be used and discarded, or it may remain and be used many times.
 */
$remote->buttonWasPressed();

$remote->setCommand($garageDoorOpenCommand);
$remote->buttonWasPressed();
