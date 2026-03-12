<?php

namespace OOP;

class motorcycle extends vehicle{
    public function __construct(string $type, string $definition, int $wheels) {
        $wheels = 2;
        $definition = 'Can Lane Split';
        parent::__construct($type, $definition, $wheels);
    }
}