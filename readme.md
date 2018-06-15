# PHP Design Patterns

Based on the book "Head First Design Patterns"

## Getting Started
### Run Docker container
```
./dc build
./dc up -d
./dc exec --user utente php bash
```
## Patterns list

### Strategy pattern
Il pattern Strategy definisce una famiglia di algoritmi, incapsula ciascuno e li rende intercambiabili. La strategia consente all'algoritmo di variare in modo indipendente dai client che lo utilizzano.
```
php Strategy/MiniDuckSimulator.php
```
### Observer pattern
Il pattern Observer definisce una dipendenza uno-a-molti tra gli oggetti in modo che quando un oggetto cambia stato, tutti i suoi dipendenti vengono notificati e aggiornati automaticamente.
```
php Observer/WeatherStation.php
```
### Decorator pattern
Il pattern Decorator associa responsabilità aggiuntive a un oggetto in modo dinamico. I decoratori offrono un'alternativa flessibile alla sottoclasse per estendere le funzionalità di un oggetto.
```
php Decorator/StarbuzzCoffee.php
```
### Simple Factory pattern
Non è un vero è proprio design pattern ma è un modo semplice per disaccoppiare il client dalle classi concrete.
```
Sola lettua
```
### Factory Method pattern
Il Factory Method si basa sull'ereditarietà: la creazione dell'oggetto è delegata a sottoclassi, che implementano il metodo "factory" per creare oggetti.
```
php Factory/FactoryMethod/Client.php
```
### Abstract Factory pattern
L'Abstract Factory si basa sulla composizione degli oggetti: la creazione dell'oggetto è implementata in metodi esposti nell'interfaccia della factory.
```
php Factory/AbstractFactory/Client.php
```
### Singleton pattern
Il Pattern Singleton garantisce che una classe abbia una sola istanza e fornisce un punto di accesso globale ad essa.
```
php Singleton/Client.php
```
### Command pattern
Il Command pattern incapsula una richiesta (un comando) legando insieme un insieme di azioni che devono essere eseguite su un destinatario (un receiver).
```
php Command/Simple/Client.php
php Command/Advance/Client.php
php Command/Undo/Client.php
php Command/Macro/Client.php
```
### Adapter pattern
Il pattern Adapter converte l'interfaccia di una classe in un'altra che il client si aspetta. L'Adapter consente alle classi di lavorare insieme quando non potrebbero a causa di interfacce incompatibili.
```
php Adapter/Anatre/ClientAnatra.php 
php Adapter/Anatre/ClientTacchino.php 
```
### Facade pattern
il pattern Facade fornisce un'interfaccia unificata a un insieme di interfacce in un sottosistema. Definisce un'interfaccia di livello superiore che semplifica l'utilizzo del sottosistema. La differenza tra Facade e Adapter è nel loro intento. L'intento del pattern Adapter è di modificare un'interfaccia in modo che corrisponda a quella che un client si aspetta. L'intento del pattern Facade è di fornire un'interfaccia semplificata a un sottosistema.
```
php Facade/Client.php
```
### Template method patterns
Il pattern Template Method definisce lo scheletro di un algoritmo in un metodo, delegando alcuni passaggi alle sottoclassi. Il pattern Template Method consente alle sottoclassi diridefinire determinati passaggi di un algoritmo senza modificarne la struttura.  
```
php TemplateMethod/NoHook/Client.php
php TemplateMethod/Hook/Client.php
```
