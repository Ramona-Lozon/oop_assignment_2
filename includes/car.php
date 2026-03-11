<?php

namespace OOP;

class car extends vehicle {
    public function __construct(string $type, int $wheels)
    {
        $wheels = 4;
        parent::__construct($type, $wheels);

    }

    public function canHaul(): string {
        return "no Truckbed";

    }

    public function canCommute(): string {
        return "Good for commuting";
    }

    public function canLaneSplit(): string {
        return "It can't lane split";
    }
}