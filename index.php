<?php

// standard php library
spl_autoload_register(function ($class) {
    //var_dump($class);
    $class = str_replace('OOP\\', '', $class);
    //var_dump($class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    //var_dump($class);
    $filepath = __DIR__ . '\includes/' . $class . '.php';
    $filepath = str_replace('/', DIRECTORY_SEPARATOR, $filepath);
    //var_dump($filepath);
    require_once $filepath;
});

//import files that are to be referenced
use OOP\truck;
use OOP\pickup;
use OOP\dumpTruck;
use OOP\car;
use OOP\sedan;
use OOP\motorcycle;
use OOP\crotchRocket;
use OOP\vehicleInterface;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Vehicles</h1>
    <?php
        function displaySpeed(vehicleInterface $vehicle) {
            echo $vehicle->speedLimit() . "<br>";
        }
        //define local instances of classes
        $pickup = new pickup();
        $dumpTruck = new dumpTruck();
        $sedan = new sedan();
        $crotchRocket = new crotchRocket();

        //pickup methods
        echo $pickup->displayInfo();
        echo $pickup->start() . "<br>";
        echo $pickup->drive() . "<br>";
        echo $pickup->stop() . "<br>";
        echo $pickup->tow() . "<br>";
        echo $pickup->support() . "<br>";
        echo $pickup->transport() . "<br>";
        echo displaySpeed($pickup);

        //dump truck methods
        echo $dumpTruck->displayInfo();
        echo $dumpTruck->start() . "<br>";
        echo $dumpTruck->drive() . "<br>";
        echo $dumpTruck->stop() . "<br>";
        echo $dumpTruck->tow() . "<br>";
        echo $dumpTruck->transport() . "<br>";
        echo displaySpeed($dumpTruck);

        //sedan methods
        echo $sedan->displayInfo();
        echo $sedan->start() . "<br>";
        echo $sedan->drive() . "<br>";
        echo $sedan->stop() . "<br>";
        echo $sedan->red() . "<br>";
        echo $sedan->beachDay() . "<br>";
        echo $sedan->safety() . "<br>";
        echo displaySpeed($sedan);

        //crotch rocket methods
        echo $crotchRocket->displayInfo() . "<br>";
        echo $crotchRocket->start() . "<br>";
        echo $crotchRocket->stop() . "<br>";
        echo $crotchRocket->wheelie() . "<br>";
        echo $crotchRocket->jump() . "<br>";
        echo $crotchRocket->slide() . "<br>";
        echo displaySpeed($crotchRocket);

   ?>
</body>
</html>