<?php
class Database {
    private $host = "localhost";
    private $db_name = "gym_db";
    private $username = "root"; // Sesuaikan dengan user db kamu
    private $password = "";     // Sesuaikan dengan pass db kamu
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>