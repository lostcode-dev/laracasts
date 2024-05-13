<?php

class Database
{
    protected string $host = 'localhost';
    protected string $user = 'root';
    protected string $password = '';
    protected string $dbName = 'myapp';
    protected PDO $connection;

    public function __construct() {
        $this->connect();
    }


    public function connect()
    {
        $dsn = "mysql:host={$this->host};dbname={$this->dbName};";
        $this->connection = new PDO($dsn, $this->user, $this->password);
        return $this->connection;
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }
}
