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
   ?>
</body>
</html>