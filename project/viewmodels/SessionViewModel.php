<?php
include_once 'config/Database.php';
include_once 'models/Session.php';

class SessionViewModel {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    // --- READ ALL (dengan JOIN untuk ambil nama member & trainer) ---
    public function fetchAll() {
        $query = "SELECT s.*, m.name as member_name, t.name as trainer_name 
                  FROM sessions s
                  JOIN members m ON s.member_id = m.id
                  JOIN trainers t ON s.trainer_id = t.id
                  ORDER BY s.session_date DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Session');
    }

    // --- READ SINGLE (untuk form Edit) ---
    public function fetchById($id) {
        $query = "SELECT * FROM sessions WHERE id = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Session');
        return $stmt->fetch();
    }

    // --- CREATE ---
    public function create($data) {
        $query = "INSERT INTO sessions SET member_id=:mid, trainer_id=:tid, session_date=:sdate, notes=:notes";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":mid", $data['member_id']);
        $stmt->bindParam(":tid", $data['trainer_id']);
        $stmt->bindParam(":sdate", $data['session_date']);
        $stmt->bindParam(":notes", $data['notes']);
        return $stmt->execute();
    }

    // --- UPDATE ---
    public function update($data) {
        $query = "UPDATE sessions SET member_id=:mid, trainer_id=:tid, session_date=:sdate, notes=:notes WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":mid", $data['member_id']);
        $stmt->bindParam(":tid", $data['trainer_id']);
        $stmt->bindParam(":sdate", $data['session_date']);
        $stmt->bindParam(":notes", $data['notes']);
        $stmt->bindParam(":id", $data['id']);
        return $stmt->execute();
    }

    // --- DELETE ---
    public function delete($id) {
        $query = "DELETE FROM sessions WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }
}
?>