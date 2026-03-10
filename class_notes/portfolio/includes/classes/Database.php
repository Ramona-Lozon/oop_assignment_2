<?php

namespace Portfolio; 

use PDO;

class Database
{
    public function query(string $query, array $bindings = []): array
    {
    $connection = $this->connect();
    $statement = $connection->prepare($query);
    foreach ($bindings as $key => $value) {
        $statement->bindParam(":$key", $value);
    }
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function connect()
    {
        $config = $this->getConfig();
        $dsn = $this->getDsn();

        $username = $config['username'];
        $password = $config['password'];

        return new PDO($dsn, $username, $password);
    }
    public function getConfig()
    {
    return [
        'username' => 'root',
        'password' => '', // root
        'host' => 'localhost',
        'port' => '3306', //OSX: 8889
        'database' => 'portfolio' 
    ];
    }
    public function getDsn() {
$config = $this->getConfig();
$host = $config['host'];
$database = $config['database'];
$port = $config['port'];

return 'mysql:host=' 
            . $host 
            . ';dbname=' 
            . $database 
            . ';port='
            . $port
            . ';';
    }

}