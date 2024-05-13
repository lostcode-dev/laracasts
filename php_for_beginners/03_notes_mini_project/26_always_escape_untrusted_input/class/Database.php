<?php

class Database
{
    protected string $host = 'localhost';
    protected string $user = 'root';
    protected int $port = 3306;

    protected string $password = '';
    protected string $dbName = '';
    protected PDO $connection;
    protected PDOStatement|false $statement;

    public function __construct()
    {
        $config = require "config.php";

        if ($options = $config['database']) {
            $this->host = $options['host'];
            $this->port = $options['port'];
            $this->dbName = $options['dbname'];
            $this->user = $options['user'];
            $this->password = $options['password'];
        }

        $this->connect();
    }

    public function connect()
    {
        $config = [
            'host' => $this->host,
            'port' => $this->port,
            'dbname' => $this->dbName,
        ];

        $params = http_build_query($config, '', ';');
        $dsn = "mysql:{$params}";

        $this->connection = new PDO($dsn, $this->user, $this->password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        return $this->connection;
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute([...$params]);

        return $this;
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function finOrFail()
    {
        $item =  $this->find();

        if (!$item) {
            abort(Response::NOT_FOUND);
        }

        return $item;
    }


    public function setHost($host)
    {
        $this->host = $host;
    }

    public function getHost()
    {
        return $this->host;
    }

    public  function setUser($user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setDbName($dbName)
    {
        $this->dbName = $dbName;
    }

    public function getDbName()
    {
        return $this->dbName;
    }

    public function getConnection()
    {
        return $this->connection;
    }

    public function setConnection($connection)
    {
        $this->connection = $connection;
    }

    public function setPort($port)
    {
        $this->port = $port;
    }

    public function getPort()
    {
        return $this->port;
    }
}
