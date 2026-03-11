<?php

namespace OOP;

class pickup extends truck {
    public function __construct(string $passengers)
    {
        $passengers = 1-3;
        parent::__construct($type, $wheels);

    }

    public function getDefinition(): bool
    {
        return $this->$canHaul;
    }
}