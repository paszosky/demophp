<?php

// connect to database, and execute a query
class Database {
    public $connection;

    public function __construct($config, $username = 'root', $password = '')
    {
        
        // dd('mysql:' . http_build_query($config, '', ';')); // wbudowana funkcja zwraca nam dsn mysql:host=localhost;port=3306;dbname=demophp;charset=utf8mb4

        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]); //user, pass, options
    }

    public function query($query)
    {
        

        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }
}