# PHP Design Patterns

Based on the book "Head First Design Patterns"

## Getting Started
### Run Docker container
```
git clone git@github.com:matiux/php-design-patterns.git && cd php-design-patterns
./dc up -d
./dc enter # To enter in PHP container and execute examples
composer install
```

## Pattern list

### Strategy pattern
Strategy pattern defines a family of algorithms, encapsulates each and makes them interchangeable. The strategy
allows the algorithm to vary independently of the clients that use it.
```
php src/Strategy/mini-duck-simulator.php
```
### Observer pattern
Observer pattern defines a one-to-many dependency between objects so that when an object changes state,
all its employees are notified and updated automatically.
```
php src/Observer/weather-station.php
```
### Decorator pattern
Decorator pattern associates additional responsibilities with an object in a dynamic way. Decorators offer an alternative
flexible to the subclass to extend the functionality of an object.
```
php src/Decorator/starbuzz-coffee.php
```
### Simple Factory pattern
It's not a proper design pattern, but it's an easy way to decouple the client from concrete classes.

Read only:

```
cat src/Factory/SimpleFactory/SimplePizzaFactory.php
cat src/Factory/SimpleFactory/PizzaStore.php
```
### Factory Method pattern
The Factory Method is based on inheritance: the creation of the object is delegated to subclasses, which implement the
"factory" method to create objects.
```
php src/Factory/FactoryMethod/client.php
```
### Abstract Factory pattern
Abstract Factory is based on the composition of the objects: the creation of the object is implemented in exposed methods
in the factory interface.
```
php src/Factory/AbstractFactory/client.php
```
### Singleton pattern
Singleton Pattern ensures that a class has only one instance and provides a global access point to it.
```
php src/Singleton/client.php
```
### Command pattern
Il Command pattern incapsula una richiesta (un comando) legando insieme un insieme di azioni che devono essere eseguite
su un destinatario (un receiver).
```
php src/Command/Simple/client.php
php src/Command/Advance/client.php
php src/Command/Undo/client.php
php src/Command/Macro/client.php
```
### Adapter pattern
Il pattern Adapter converte l'interfaccia di una classe in un'altra che il client si aspetta. L'Adapter consente alle
classi di lavorare insieme quando non potrebbero a causa d'interfacce incompatibili.
```
php src/Adapter/Anatre/client-anatra.php 
php src/Adapter/Anatre/client-tacchino.php 
```
### Facade pattern
Il pattern Facade fornisce un'interfaccia unificata a un insieme d'interfacce in un sottosistema. Definisce un'interfaccia
di livello superiore che semplifica l'utilizzo del sottosistema. La differenza tra Facade e Adapter è nel loro intento.
L'intento del pattern Adapter è di modificare un'interfaccia in modo che corrisponda a quella che un client si aspetta.
L'intento del pattern Facade è di fornire un'interfaccia semplificata a un sottosistema.
```
php src/Facade/client.php
```
### Template method pattern
Il pattern Template Method definisce lo scheletro di un algoritmo in un metodo, delegando alcuni passaggi alle sottoclassi.
Il pattern Template Method consente alle sottoclassi di ridefinire determinati passaggi di un algoritmo senza modificarne
la struttura.  
```
php src/TemplateMethod/NoHook/client.php
php src/TemplateMethod/Hook/client.php
```
### Iterator pattern
Il pattern Iterator fornisce un modo per accedere sequenzialmente agli elementi di un oggetto aggregato senza esporre la
sua rappresentazione sottostante. Ma l'effetto dell'utilizzo degli iteratori nel tuo progetto è altrettanto importante:
una volta che hai un modo uniforme di accedere agli elementi di tutti i tuoi oggetti aggregati, puoi scrivere codice
polimorfico che funzioni con uno qualsiasi di questi aggregati, potendo usare indiscriminatamente array, ArrayObject,
collezioni di dominio ecc, a condizione che riesca a impossessarsi di un Iterator. Un altra cosa importante è che il
pattern Iterator assume la responsabilità di attraversare gli elementi e attribuisce tale responsabilità all'oggetto
iteratore, non all'oggetto aggregato. Ciò non solo mantiene più semplice l'interfaccia aggregata e l'implementazione,
ma rimuove la responsabilità dell'iterazione dall'aggregazione e mantiene l'aggregato focalizzato sulle cose su cui
dovrebbe essere focalizzato (gestendo una collezione di oggetti), non sull'iterazione.
```
php src/Iterator/DinerMerger/client.php

#Con interfaccia Iterator di PHP
php src/Iterator/DinerMergerI/client.php
```
### Composite pattern
Il pattern Composite consente di comporre oggetti in strutture ad albero per rappresentare gerarchie intere. Il pattern
Composite consente ai client di trattare in modo uniforme singoli oggetti e composizioni di oggetti. Usando una struttura
composita, possiamo applicare le stesse operazioni sia sui dati compositi che su singoli oggetti. In altre parole, nella
maggior parte dei casi possiamo ignorare le differenze tra le composizioni di oggetti e oggetti individuali. Con questo
pattern sembra che il principio di singola responsabilità venga violato in quanto una classe che lo implementa si trova
a fare due cose, gestire una gerarchia e gestire operazioni sui nodi finali (le foglie dell'albero). Possiamo tuttavia
dire che il pattern Composite prende il design del SRP e lo scambia per _trasparenza_; consentendo all'interfaccia
Component di contenere le operazioni di gestione figlio e le operazioni foglia, un client può trattare uniformemente sia
i dati compositi che i nodi foglia; quindi, se un elemento è un nodo composito o foglia diventa trasparente per il client.
Consentendo all'interfaccia Component di contenere le operazioni di gestione figlio e le operazioni foglia, un client può
trattare uniformemente sia i compositi che i nodi foglia; quindi, se un elemento è un nodo composito o foglia diventa
trasparente per il client. Questo è un classico caso di compromesso. A volte facciamo intenzionalmente le cose in un modo
che sembra violare il principio. In alcuni casi, tuttavia, questa è una questione di prospettiva; per esempio, potrebbe
sembrare sbagliato avere operazioni di gestione figli nei nodi foglia (come _add()_, _remove()_ e _getChild()_), ma poi
puoi sempre cambiare prospettiva e vedere una foglia come un nodo con zero figli.
```
php src/Composite/Menu/client.php
```

### State pattern
Il pattern State consente a un oggetto di alterarne il comportamento quando cambia lo stato interno. L'oggetto sembrerà cambiare la sua classe.
Poiché il pattern incapsula lo stato in classi separate e delega all'oggetto che rappresenta lo stato corrente, sappiamo che il comportamento
cambia insieme allo stato interno. Con il pattern State, abbiamo un insieme di comportamenti incapsulati in oggetti di stato; in qualsiasi momento
il contesto sta delegando a uno di questi stati. Nel tempo, lo stato corrente cambia attraverso l'insieme di oggetti di stato per riflettere lo
stato interno del contesto, quindi anche il comportamento del contesto cambia nel tempo. A livello di diagramma questo pattern è identico al
Pattern Strategy. In generale, pensa allo Strategy come un'alternativa flessibile alla sottoclasse; se usi l'ereditarietà per definire il comportamento
di una classe, allora sei bloccato con quel comportamento anche se hai bisogno di cambiarlo. Con lo Strategy puoi cambiare il comportamento componendo
con un oggetto diverso. Il pattern State invece va pensato come alternativa al mettere molte condizionali nel tuo contesto; incapsulando i comportamenti
all'interno degli oggetti di stato, puoi semplicemente cambiare l'oggetto stato nel contesto per cambiarne il comportamento.
```
php src/State/GumballState/client.php
php src/State/GumballStateWinner/client.php
```

### Visitor pattern
Il visitor è un pattern comportamentale che consente di separare gli algoritmi dagli oggetti su cui operano.
Questo pattern rappresenta una operazione che si vuole eseguire su una collezione di elementi di una struttura. L'operazione può essere 
modificata senza modificare le classi degli elementi sui quali opera. Si pensi a una struttura che contiene un insieme eterogeneo di oggetti,
sui quali bisogna applicare la stessa operazione, che però è implementata in modo diverso per ogni classe di oggetto.

```
php src/Visitor/client.php
```

## Extra

### Hexagonal Architecture (Ports and Adapters)

In questa sezione, basandomi sul libro *Domain-Driven Design in PHP – Carlos Buenosvinos, Christian Soronellas and Keyvan Akbary*,
mostro un processo di refactoring da spaghetti code a organizzazione del codice tramite l'architettura esagonale

L'architettura esagonale consente a un'applicazione di essere ugualmente guidata da utenti, programmi, test automatizzati
o script batch e di essere sviluppata e testata separatamente dai suoi eventuali dispositivi e database.

Preparare il database per far girare gli esempi
```
php src/HexagonalArchitecture/build.php
```

I primi 3 step di refactoring
```
php src/HexagonalArchitecture/Step01/client.php
php src/HexagonalArchitecture/Step02/client.php
php src/HexagonalArchitecture/Step03/client.php
```
Step finale con implementazione con vari delivery e test
```
php src/HexagonalArchitecture/Step04/client.php
php src/HexagonalArchitecture/Step04/console app:create-idea 'Flying pig' Matiux
```

```
project phpunit # To execute tests
```
