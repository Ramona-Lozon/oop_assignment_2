<?php

namespace OOP;

class pickup extends truck
{
    protected bool $canHaul;

    public function __construct(string $passengers, int $wheels)
    {
        $passengers = 1-3;
        $this->hasTruckbed = true;
        parent::__construct($type, $wheels);

    }

    public function getDefinition(): bool
    {
        return $this->$canHaul;
    }
}