<?php

//var_dump($_POST);

spl_autoload_register(function ($class) {
    $class = str_replace('Portfolio\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class); # needed for mac & windows
    $filepath = __DIR__ . '/../../includes/classes/' . $class . '.php';
    $filepath = str_replace("/", DIRECTORY_SEPARATOR, $filepath); #only required for windows

    require_once $filepath;
});

use Portfolio\Database;

$title = $_POST['title'];

if($title == null || $title == '') {
    echo 'Title is Required!';
    exit(1);
    //error_log("Title is Required!");
}

$description = $_POST['description'];

if(empty($description)) {
    echo "Description is Required!";
    exit(1);
    //error_log("description is Empty");
}

$categoryId = $_POST['category_id'];

$database = new Database();
$database->query('INSERT INTO projects title, description, category_id VALUES (
:title, :description, :category_id);',
[
    `title` => $title,
    `description` => $description,
    `category_id` => $categoryId
]);

//var_dump($title, $description);