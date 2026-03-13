<?php

namespace OOP;

class sedan extends car implements vehicleInterface {
    
    use speed;

    public function speedLimit(): string {
        return "sedans can go at highway speeds";
    }

    public function __construct() {
        $subType = 'sedan';
        $passengers = 'one to four';
        $wheels = 4;

        parent::__construct($subType, $passengers, $wheels);
    }

    public function drive(): string {
        return "this car is good at commuting";
    }

    public function beachDay(): string {
        return "this car can carry everything you need for the beach!";
    }

    public function safety(): string {
        return "this car is very safe";
    }
}