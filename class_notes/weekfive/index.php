<?php

// standard php library
spl_autoload_register(function ($class) {
    var_dump($class);
    $class = str_replace('MyProject\\', '', $class);
    var_dump($class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class); # needed for mac & windows
    var_dump($class);
    $filepath = __DIR__ . '/includes/classes/' . $class . '.php';
    $filepath = str_replace('/', DIRECTORY_SEPARATOR, $filepath); #only required for windows
    var_dump($filepath);
    require_once $filepath;
});

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello, world!</h1>
    <?php
    //require_once 'includes/classes/Animal.php';

        $animal = new MyProject\Animal();
        var_dump($animal);

        $bird = new MyProject\Animals\Bird();
        var_dump($bird)
    ?>
</body>
</html>