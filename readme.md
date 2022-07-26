PHP Design Patterns
========

![check dependencies](https://github.com/matiux/php-design-patterns/actions/workflows/check-dependencies.yml/badge.svg)
![check deps vulnerability](https://github.com/matiux/ddd-starter-pack/actions/workflows/dependencies-vulnerability.yml/badge.svg)
![test](https://github.com/matiux/php-design-patterns/actions/workflows/tests.yml/badge.svg)
[![type coverage](https://shepherd.dev/github/matiux/php-design-patterns/coverage.svg)](https://shepherd.dev/github/matiux/php-design-patterns)
[![psalm level](https://shepherd.dev/github/matiux/php-design-patterns/level.svg)](https://shepherd.dev/github/matiux/php-design-patterns)
![security analysis status](https://github.com/matiux/php-design-patterns/actions/workflows/security-analysis.yml/badge.svg)
![coding standards status](https://github.com/matiux/php-design-patterns/actions/workflows/coding-standards.yml/badge.svg)

PHP design patterns based on the book "Head First Design Patterns" and more

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
Command pattern encapsulates a request (a command) by binding together a set of actions to be performed
on a recipient (a receiver).
```
php src/Command/Simple/client.php
php src/Command/Advance/client.php
php src/Command/Undo/client.php
php src/Command/Macro/client.php
```
### Adapter pattern
Adapter pattern converts the interface of one class into another that the client expects. The Adapter allows the
classes to work together when they could not due to incompatible interfaces.
```
php src/Adapter/Anatre/client-duck.php
php src/Adapter/Anatre/client-turkey.php 
```
### Facade pattern
Facade pattern provides a unified interface to a set of interfaces in a subsystem. Defines a higher level interface
which simplifies the use of the subsystem. The difference between Facade and Adapter is in their intent.
The intent of the Adapter pattern is to modify an interface to match what a client expects.
The intent of the Facade pattern is to provide a simplified interface to a subsystem.
```
php src/Facade/client.php
```
### Template method pattern
Template Method pattern defines the skeleton of an algorithm in a method, delegating some steps to the subclasses.
Template Method pattern allows subclasses to redefine certain steps of an algorithm without modifying any  structure.
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
Composite pattern allows you to compose objects in tree structures to represent entire hierarchies. Composite pattern
allows clients to treat single objects and object compositions uniformly. Using a structure
composite, we can apply the same operations to both composite data and individual objects. In other words, in the
most of the cases we can ignore the differences between the compositions of objects and individual objects. With this
pattern it seems that the principle of single responsibility is violated as a class that implements it is found
to do two things, manage a hierarchy and manage operations on the end nodes (the leaves of the tree). We can however
to say that the Composite pattern takes the design of the SRP and mistakes it for _transparency_; allowing the interface
Component to contain child management operations and leaf operations, a client can treat both uniformly
the composite data that the leaf nodes; therefore, if an element is a composite or leaf node it becomes transparent to the client.
By allowing the Component interface to contain child management operations and leaf operations, a client can
treat both composites and leaf nodes uniformly; so if an element is a composite or leaf node it becomes
transparent to the client. This is a classic case of compromise. Sometimes we intentionally do things one way
which seems to violate the principle. In some cases, however, this is a matter of perspective; for example, it might
seem wrong to have child management operations in leaf nodes (like _add()_, _remove()_ and _getChild()_), but then
you can always change perspective and see a leaf as a node with zero children.

```
php src/Composite/Menu/client.php
```

### State pattern
State pattern allows an object to alter its behavior when its internal state changes. The object will appear to change its class.
Since the pattern encapsulates the state in separate classes and delegates to the object representing the current state, we know
that behavior changes along with the internal state. With the State pattern, we have a set of behaviors encapsulated in state objects;
at any time the context is delegating to one of these states. Over time, the current state changes across the set of
state objects to reflect it internal state of the context, so the behavior of the context also changes over time.
At the level of the diagram this pattern is identical to the Pattern Strategy. In general, think of the Strategy as a
flexible alternative to the subclass; if you use inheritance to define behavior of a class, then you are stuck with that
behavior even if you need to change it. With the Strategy you can change the behavior by composing with a different object.
The State pattern, on the other hand, should be thought of as an alternative to putting many conditionals in your context;
encapsulating behaviors within state objects, you can simply change the state object in context to change its behavior.
```
php src/State/GumballState/client.php
php src/State/GumballStateWinner/client.php
```

### Visitor pattern
The visitor is a behavioral pattern that allows you to separate algorithms from the objects on which they operate.
This pattern represents an operation that you want to perform on a collection of elements of a structure. The operation
can be modified without changing the classes of the elements on which it operates. Think of a structure that contains a
heterogeneous set of objects, on which the same operation must be applied, which however is implemented in a different
way for each class of object.

```
php src/Visitor/client.php
```

## Extra

### Hexagonal Architecture (Ports and Adapters)
In this section, based on the book *Domain-Driven Design in PHP - Carlos Buenosvinos, Christian Soronellas and Keyvan Akbary*,
I show a refactoring process from spaghetti code to code reorganization through the hexagonal architecture

The hexagonal architecture allows an application to be equally driven by users, programs, automated tests or batch
scripts and to be developed and tested separately from its own devices and databases, if any.

Prepare the database for running the examples:
```
php src/HexagonalArchitecture/build.php
```

The first 3 steps of refactoring:
```
php src/HexagonalArchitecture/Step01/client.php
php src/HexagonalArchitecture/Step02/client.php
php src/HexagonalArchitecture/Step03/client.php
```
Final step with implementation with various deliveries and tests:
```
php src/HexagonalArchitecture/Step04/client.php
php src/HexagonalArchitecture/Step04/console app:create-idea 'Flying pig' Matiux
```

```
project phpunit # To execute tests
```
