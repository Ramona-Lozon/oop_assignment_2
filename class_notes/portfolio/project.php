<?php 
//get projects to display from database

require_once 'includes/database.php';

$dsn = 'mysql:host=localhost;dbname=portfolio;';
$connection = new PDO($dsn, 'root', '');

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$singlePStmt = $connection->prepare('SELECT * FROM projects WHERE id = :id');
$singlePStmt->bindParam(':id', $id, PDO::PARAM_INT);
$singlePStmt->execute();

$singleProjectResult = $singlePStmt->fetch(PDO::FETCH_ASSOC);

$categoryStmt =$connection->prepare(
    'SELECT * FROM categories WHERE id = :id;'
);
$categoryStmt->bindParam(':id', $singleProjectResult['category_id'], PDO::PARAM_INT);
$categoryStmt->execute();
$category = $categoryStmt->fetch(PDO::FETCH_ASSOC);
var_dump($category)

//var_dump($singleProjectResult);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>