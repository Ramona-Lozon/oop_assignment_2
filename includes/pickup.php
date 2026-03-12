<?php

namespace OOP;

class pickup extends truck {
    //nothing is passed upwards, so construct is empty
    public function __construct() {

        //define properties
        $subType = 'pickup';
        $passengers = 'one to three';
        $wheels = 4;

        //pass defined properties upwards
        parent::__construct($subType, $passengers, $wheels);

    }
    //these methods overwrite methods of greater hierarchy
    public function drive(): string {
        return "it can be driven everywhere";
    }
    //these are new methods
    public function support(): string {
        return "it can provide emotional support";
    }

    public function transport(): string {
        return "it can move light loads";
    }
}