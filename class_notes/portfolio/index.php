<?php

use Portfolio\Database;

// standard php library
spl_autoload_register(function ($class) {
    $class = str_replace('Portfolio\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class); # needed for mac & windows
    $filepath = __DIR__ . '/includes/classes/' . $class . '.php';
    $filepath = str_replace('/', DIRECTORY_SEPARATOR, $filepath); #only required for windows

    require_once $filepath;
});
?>
<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    $db = new Database;
    $db = new Portfolio\Database;
    $results = $db->query('SELECT * FROM projects;');
    $project = $db->query('SELECT * FROM projects WHERE id = :id;', ['id' =>1]);
    $project = $project[0];
    var_dump($project)
    ?>
</body>
</html>

