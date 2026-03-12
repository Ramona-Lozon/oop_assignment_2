<?php

namespace OOP;

class dumpTruck extends truck {
    //nothing is passed upwards, so construct is empty
    public function __construct() {

        //define properties
        $subType = 'Dump Truck';
        $passengers = 'one to two';
        $wheels = 10;

        //pass defined properties upwards
        parent::__construct($subType, $passengers, $wheels);

    }

    //these methods overwrite methods of greater hierarchy
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