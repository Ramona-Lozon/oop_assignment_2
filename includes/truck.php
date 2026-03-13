<?php

namespace OOP;

class truck extends vehicle implements vehicleInterface {

    use speed;

        public function speedLimit(): string {
        return "Trucks can go pretty fast";
    }
    //grab properties from child classes
    public function __construct(string $subType, string $passengers, int $wheels) {
        
        //define properties
        $type = 'truck';
        $definition = 'it can Haul';
        $engineSize = 'Large';
        $characteristics = 'better off road';

        //pass properties upwards
        parent::__construct($type, $subType, $definition, $engineSize, $characteristics, $passengers, $wheels);
    }

    //replace methods with new content
    public function drive(): string {
        return "it can drive off road";
    }

    //new methods
    public function tow(): string {
        return "it can tow things";
    }

    public function transport(): string {
        return "it can move a lot of stuff";
    }
}