<?php
require_once 'config/database.php';

class TeamModel {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getAll() {
        $query = "SELECT teams.*, categories.name as category_name 
                  FROM teams 
                  LEFT JOIN categories ON teams.category_id = categories.id";
        return $this->db->query($query);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM teams WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function insert($name, $city, $category_id) {
        $stmt = $this->db->prepare("INSERT INTO teams (name, city, category_id) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $name, $city, $category_id);
        return $stmt->execute();
    }

    public function update($id, $name, $city, $category_id) {
        $stmt = $this->db->prepare("UPDATE teams SET name=?, city=?, category_id=? WHERE id=?");
        $stmt->bind_param("ssii", $name, $city, $category_id, $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM teams WHERE id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>