<?php
include_once 'config/Database.php';
include_once 'models/Member.php';

class MemberViewModel {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function fetchAll() {
        $query = "SELECT * FROM members ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Member');
    }

    public function fetchById($id) {
        $query = "SELECT * FROM members WHERE id = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Member');
        return $stmt->fetch();
    }

    public function create($data) {
        $query = "INSERT INTO members SET name=:name, email=:email, phone=:phone";
        $stmt = $this->conn->prepare($query);
        // Data binding
        $stmt->bindParam(":name", $data['name']);
        $stmt->bindParam(":email", $data['email']);
        $stmt->bindParam(":phone", $data['phone']);
        return $stmt->execute();
    }

    public function update($data) {
        $query = "UPDATE members SET name=:name, email=:email, phone=:phone WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":name", $data['name']);
        $stmt->bindParam(":email", $data['email']);
        $stmt->bindParam(":phone", $data['phone']);
        $stmt->bindParam(":id", $data['id']);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM members WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }
}
?>