<?php

namespace OOP;

class car extends vehicle {
    public function __construct(string $type, string $definition, int $wheels) {
        $wheels = 4;
        $definition = 'Good for Commuting';
        parent::__construct($type, $definition, $wheels);

    }
}