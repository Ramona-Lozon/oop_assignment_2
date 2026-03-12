<?php

namespace OOP;

class pickup extends truck {
    public function __construct() {

        $subType = 'pickup';
        $passengers = 'one to three';
        $wheels = 4;

        parent::__construct($subType, $passengers, $wheels);

    }

    public function drive(): string {
        return "it can be driven everywhere";
    }

    public function support(): string {
        return "it can provide emotional support";
    }

    public function transport(): string {
        return "it can move light loads";
    }
}