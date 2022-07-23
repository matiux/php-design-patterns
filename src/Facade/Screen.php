<?php

declare(strict_types=1);

namespace DesignPatterns\Facade;

class Screen
{
    private $description;

    public function __construct(string $description)
    {
        $this->description = $description;
    }

    public function down()
    {
        echo $this->description.' going down'."\n";
    }

    public function up()
    {
        echo $this->description.' going up'."\n";
    }

    public function __toString()
    {
        return $this->description;
    }
}
