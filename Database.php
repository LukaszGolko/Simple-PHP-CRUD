<?php

class Database
{
    public $connection;

    public function __construct($config, $username = 'root', $password = 'password')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);

        $statement->execute($params);

        // var_dump($statement);

        return $statement;
    }
}
$config = require('config.php');
$db = new Database($config['database']);