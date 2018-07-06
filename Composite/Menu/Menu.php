<?php

namespace DesignPatterns\Composite\Menu;

class Menu extends MenuComponent
{
    /** @var \ArrayObject|MenuComponent[] */
    private $menuComponents;
    private $name;
    private $description;

    public function __construct(string $name, string $description)
    {
        $this->menuComponents = new \ArrayObject();

        $this->name = $name;
        $this->description = $description;
    }

    public function add(MenuComponent $menuComponent): void
    {
        $this->menuComponents->append($menuComponent);
    }

    public function getChild(int $i): MenuComponent
    {
        return $this->menuComponents->offsetGet($i);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * NOTE: If, during this iteration, we encounter another Menu object,
     * its print() method will start another iteration, and so on.
     */
    public function print(): void
    {
        echo sprintf("\n%s, %s\n", $this->getName(), $this->description);
        echo sprintf("-----------------------------\n");

        $iterator = $this->menuComponents->getIterator();

        while ($iterator->valid()) {
            /** @var MenuComponent $menuComponent */
            $menuComponent = $iterator->current();
            $iterator->next();
            $menuComponent->print();
        }
    }
}
