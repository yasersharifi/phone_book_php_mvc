<?php
require_once "core/Database.php";
class PhoneBookModel extends Database {
    public function __construct()
    {
        parent::__construct();
    }

    public function get() {
        $data = [];
        $sql = "SELECT * FROM persons";

        $result = $this->connection->query($sql);

        while ($row = $result->fetch_assoc()) {
            $data[] = (object) $row;
        }
        return $data;
    }
}