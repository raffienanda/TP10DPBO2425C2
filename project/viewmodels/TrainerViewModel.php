<?php
include_once 'config/Database.php';
include_once 'models/Trainer.php';

class TrainerViewModel {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function fetchAll() {
        $query = "SELECT * FROM trainers ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Trainer');
    }

    public function fetchById($id) {
        $query = "SELECT * FROM trainers WHERE id = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Trainer');
        return $stmt->fetch();
    }

    public function create($data) {
        $query = "INSERT INTO trainers SET name=:name, specialization=:spec";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":name", $data['name']);
        $stmt->bindParam(":spec", $data['specialization']);
        return $stmt->execute();
    }

    public function update($data) {
        $query = "UPDATE trainers SET name=:name, specialization=:spec WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":name", $data['name']);
        $stmt->bindParam(":spec", $data['specialization']);
        $stmt->bindParam(":id", $data['id']);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM trainers WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }
}
?>