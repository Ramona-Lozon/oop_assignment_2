<?php

namespace OOP;

class truck extends vehicle {
    public function __construct(string $subType, string $passengers, int $wheels) {
        $type = 'truck';
        $definition = 'it can Haul';
        $engineSize = 'Large';
        $characteristics = 'better off road';
        parent::__construct($type, $subType, $definition, $engineSize, $characteristics, $passengers, $wheels);
    }

    public function drive(): string {
        return "it can drive off road";
    }

    public function tow(): string {
        return "it can tow things";
    }

    public function transport(): string {
        return "it can move a lot of stuff";
    }
}