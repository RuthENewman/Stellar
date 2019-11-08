<?php

require_once("config.php");

class Database
{
    public $connection;

    public function openDBConnection()
    {
        $this->connection = new mysqli(
            DB_HOST,
            DB_USER,
            DB_PASS,
            DB_NAME
        );

        if ($this->connection->connect_errno) {
            die("Database connection failed" . $this->connection->connect_error);
        }
    }

    public function query($sql)
    {
        $result = $this->connection->query($sql);
        $this->confirmQuery($result);
        return $result;
    }

    private function confirmQuery($result)
    {
        return $this->connection->real_escape_string($string);
    }

    public function insertID()
    {
        return $this->connection->insert_id;
    }
}

$database = new Database();
$database->openDBConnection();