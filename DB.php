<?php

class DB {
    private static ?DB $instance = null;
    private \PDO $connection;

    private function __construct() {
        $dsn = 'mysql:host=localhost;dbname=coubooks';
        $username = 'root';
        $password = '123Rohan@123';
        $this->connection = new \PDO($dsn, $username, $password);
    }

    public static function getInstance(): DB {
        if (self::$instance === null) {
            self::$instance = new DB();
        }
        return self::$instance;
    }

    public function getConnection(): \PDO {
        return $this->connection;
    }
}