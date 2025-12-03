<?php
include_once 'config/Database.php';
include_once 'models/Equipment.php'; // Pastikan file models/Equipment.php sudah dibuat

class EquipmentViewModel {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function fetchAll() {
        $query = "SELECT * FROM equipment ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Equipment');
    }

    public function fetchById($id) {
        $query = "SELECT * FROM equipment WHERE id = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Equipment');
        return $stmt->fetch();
    }

    public function create($data) {
        $query = "INSERT INTO equipment SET name=:name, condition_status=:cond";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":name", $data['name']);
        $stmt->bindParam(":cond", $data['condition_status']);
        return $stmt->execute();
    }

    public function update($data) {
        $query = "UPDATE equipment SET name=:name, condition_status=:cond WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":name", $data['name']);
        $stmt->bindParam(":cond", $data['condition_status']);
        $stmt->bindParam(":id", $data['id']);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM equipment WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }
}
?>