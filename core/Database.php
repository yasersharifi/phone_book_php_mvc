<?php
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "phonebook";

    public $connection;

    public function __construct()
    {
        if (! $this->connection) {
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
            return $this->connection;
        }

        return false;
    }
}
