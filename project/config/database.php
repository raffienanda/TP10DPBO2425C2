<?php
class Database {
    private static $instance = null;
    private $conn;

    private function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "db_olahraga");
        if ($this->conn->connect_error) die("Connection failed: " . $this->conn->connect_error);
    }

    public static function getInstance() {
        if (!self::$instance) self::$instance = new Database();
        return self::$instance->conn;
    }
}
?>