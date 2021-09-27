<?php
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "phonebook";

    protected $connection;

    public function __construct()
    {
        if (! $this->connection) {
            $this->connection = new mysqli($this->host, $this->username, $this->$this->password, $this->database);
            return $this->connection;
        }

        return false;
    }
}
