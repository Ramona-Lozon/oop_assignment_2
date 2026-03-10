<?php
function getConfig()
{
    return [
        'username' => 'root',
        'password' => '',
        'host' => 'localhost',
        'port' => '3306' //OSX: 8889
    ];
}

function getConnection()
{
$config = getConfig();
$username = $config['username'];
$password = $config['password'];
$host = $config['host'];
$database = $config['database'];

$dsn = 'mysql:host=' . $host . ';dbname' . $database . ';';
    $connection = new PDO($dsn, $username, $password);

return $connection;
}


// function getConnection()
// {
//         $config = getConfig();
//         var_dump($config);
//     $dsn = 'mysql:host=localhost;dbname=portfolio';
//     $connection = new PDO($dsn, 'root', '');

// return $connection;
// }
