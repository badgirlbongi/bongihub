<?php

class Database {
    private $host = 'localhost';
    private $dbname = 'tourza';
    private $username = 'root';
    private $password = '';
    private $pdo;

    public function __construct() {
        $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $this->pdo = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function prepare($sql) {
        return $this->pdo->prepare($sql);
    }

    public function closeConnection() {
        $this->pdo = null;
    }
}   

?>
     
