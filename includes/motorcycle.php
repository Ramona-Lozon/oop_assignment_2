<?php

namespace OOP;

class motorcycle extends vehicle implements vehicleInterface {

    use speed;

    public function __construct(string $subType, string $passengers, int $wheels) {
        $type = "motorcycle";
        $definition = 'Can Lane Split';
        $engineSize = "small";
        $characteristics = "they are often loud and annoying";
        parent::__construct($type, $subType, $definition, $engineSize, $characteristics, $passengers, $wheels);
    }

    public function start(): string {
        return "it uses a kickstarter";
    }

    public function dangerous(): string {
        return "dress for the slide, not the ride";
    }

    public function helmet(): string {
        return "always wear a helmet";
    }
}