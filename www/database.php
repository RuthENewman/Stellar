<?php

class Database
{
    public $host = "mysql";
    public $user = "root";
    public $port = "19090";
    public $password = "root";
    public $databaseName = "stellar";

    public function connect()
    {
        try {
            $conn = 'mysql:host=' . $this->host .  ';dbname=' . $this->databaseName;
            $pdo = new PDO($conn, "$this->user", $this->password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        }
    }

    public function query($sql)
    {
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $result;
    }



}
