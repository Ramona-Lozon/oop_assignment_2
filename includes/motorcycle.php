<?php

namespace OOP;

class motorcycle extends vehicle{
    public function __construct(string $type, int $wheels) {
        $wheels = 2;
        parent::__construct($type, $wheels);
    }

    public function canHaul(): string {
        return "No Truckbed";
    }

    public function canCommute(): string {
        return "Not good for commuting";
    }

    public function canLaneSplit(): string {
        return "It can lane split";
    }
}