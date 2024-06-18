<?php

class Database
{
    private string $host = DB_HOST;
    private string $user = DB_USER;
    private string $pass = DB_PASS;
    private string $name = DB_NAME;

    private PDO $database_handle;
    private mixed $statement;

    public function __construct()
    {
        $database_source_name = 'mysql:host=' . $this->host . ';dbname=' . $this->name;
        $username = $this->user;
        $password = $this->pass;

        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->database_handle = new PDO($database_source_name, $username, $password, $option);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function query(string $query): void
    {
        $this->statement = $this->database_handle->prepare($query);
    }

    public function bind(string $params, mixed $value, mixed $type = null): void
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                    break;
            }
        }

        $this->statement->bindValue($params, $value, $type);
    }

    public function execute(): void
    {
        $this->statement->execute();
    }

    public function resultSet(): array
    {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function single(): object
    {
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_OBJ);
    }

    public function rowCount()
    {
        return $this->statement->rowCount();
    }
}
