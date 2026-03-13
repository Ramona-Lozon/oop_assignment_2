<?php

namespace OOP;

class car extends vehicle implements vehicleInterface {
    
    use speed;
    
    public function __construct(string $subType, string $passengers, int $wheels) {
        $type = "car";
        $definition = "it has a central strut holding up the roof";
        $engineSize = "medium";
        $characteristics = "can carry the kidas to school";

        parent::__construct($type, $subType, $definition, $characteristics, $engineSize,  $passengers, $wheels);
    }

    public function drive(): string {
        return "it has good gas mileage";
    }

    public function red(): string {
        return "the red ones go faster";
    }

    public function safety(): string {
        return "cars are very safe to drive";
    }
}