<?php

namespace OOP;

class crotchRocket extends motorcycle implements vehicleInterface {

    use speed;

    public function speedLimit(): string {
        return "Crotch Rockets are very fast";
    }
    //nothing is passed upwards, so construct is empty
    public function __construct() {

        //define properties
        $subType = 'Crotch Rocket';
        $passengers = 'one to none';
        $wheels = 2;

        //pass defined properties upwards to parent class
        parent::__construct($subType, $passengers, $wheels);

    }

    //these methods overwrite methods of greater hierarchy
    public function wheelie(): string {
        return "it can pop a wheelie";
    }

    public function jump(): string {
        return "it can jump";
    }

    public function slide(): string {
        return "it can slide";
    }
}