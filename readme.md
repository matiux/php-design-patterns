# PHP Design Patterns

Based on the book "Head First Design Patterns"

## Getting Started
### Run Docker container
```
./dc build
./dc up -d
./dc exec --user utente php bash
```

#### Database MySql
```
Adminer: localhost:8081
Host dentro al container: servicedb:3306
Host fuori dal container: 127.0.0.1:3307
Utente: user
Password: password
```
## Lista dei pattern

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
### Template method pattern
Il pattern Template Method definisce lo scheletro di un algoritmo in un metodo, delegando alcuni passaggi alle sottoclassi. Il pattern Template Method consente alle sottoclassi diridefinire determinati passaggi di un algoritmo senza modificarne la struttura.  
```
php TemplateMethod/NoHook/Client.php
php TemplateMethod/Hook/Client.php
```
### Iterator pattern
Il pattern Iterator fornisce un modo per accedere sequenzialmente agli elementi di un oggetto aggregato senza esporre la sua rappresentazione sottostante. Ma l'effetto dell'utilizzo degli iteratori nel tuo progetto è altrettanto importante: una volta che hai un modo uniforme di accedere agli elementi di tutti i tuoi oggetti aggregati, puoi scrivere codice polimorfico che funzioni con uno qualsiasi di questi aggregati, potendo usare indiscriminatamente array, ArrayObject, collezioni di dominio ecc, a condizione che riesca a impossessarsi di un Iterator. Un altra cosa importante è che il pattern Iterator assume la responsabilità di attraversare gli elementi e attribuisce tale responsabilità all'oggetto iteratore, non all'oggetto aggregato. Ciò non solo mantiene più semplice l'interfaccia aggregata e l'implementazione, ma rimuove la responsabilità dell'iterazione dall'aggregazione e mantiene l'aggregato focalizzato sulle cose su cui dovrebbe essere focalizzato (gestendo una collezione di oggetti), non sull'iterazione.
```
php DinerMerger/client.php

#Con interfaccia Iterator di PHP
php DinerMergerI/client.php
```
### Composite pattern
Il pattern Composite consente di comporre oggetti in strutture ad albero per rappresentare gerarchie intere. Il pattern Composite consente ai client di trattare in modo uniforme singoli oggetti e composizioni di oggetti. Usando una struttura composita, possiamo applicare le stesse operazioni sia sui dati compositi che su singoli oggetti. In altre parole, nella maggior parte dei casi possiamo ignorare le differenze tra le composizioni di oggetti e oggetti individuali.
```

```
## Extra

### Hexagonal Architecture (Ports and Adapters)

In questa sezione, basandomi sul libro *Domain-Driven Design in PHP – Carlos Buenosvinos, Christian Soronellas and Keyvan Akbary*, mostro un processo di refactoring da spaghetti code a organizzazione del codice tramite l'architettura esagonale

L'architettura esagonale consente a un'applicazione di essere ugualmente guidata da utenti, programmi, test automatizzati o script batch e di essere sviluppata e testata separatamente dai suoi eventuali dispositivi e database.

Preparare il database per far girare gli esempi
```
php ExagonalArchitecture/build.php
```

I primi 3 step di refactoring
```
php ExagonalArchitecture/Step01/client.php
php ExagonalArchitecture/Step02/client.php
php ExagonalArchitecture/Step03/client.php
```
Step finale con implementazione con vari delivery e test
```
php ExagonalArchitecture/Step04/client.php
php ExagonalArchitecture/Step04/console app:create-idea 'Flying pig' Matiux
vendor/bin/phpunit
```
