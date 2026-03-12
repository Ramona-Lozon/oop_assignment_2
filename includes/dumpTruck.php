<?php

namespace OOP;

class dumpTruck extends truck {
    public function __construct() {

        $subType = 'Dump Truck';
        $passengers = 'one to two';
        $wheels = 10;

        parent::__construct($subType, $passengers, $wheels);

    }

    public function drive(): string {
        return "it can be driven in contruction sites";
    }

    public function tow(): string {
        return "it can tow really heavy things";
    }

    public function transport(): string {
        return "it can move lots of heavy things";
    }
}