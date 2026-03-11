<?php

namespace OOP;

class truck extends vehicle {
    public function __construct(string $type, int $wheels) {
        $wheels = 4;
        parent::__construct($type, $wheels);

    }

    public function canHaul(): string {
        return "Has Truckbed";

    }

    public function canCommute(): string {
        return "Not good for commuting";
    }

    public function canLaneSplit(): string {
        return "It can't lane split";
    }
}