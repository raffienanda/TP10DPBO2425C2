<?php
require_once 'models/TeamModel.php';
// Kita butuh category model untuk dropdown di form
require_once 'models/CategoryModel.php'; 

class TeamViewModel {
    private $model;
    private $categoryModel;

    public function __construct() {
        $this->model = new TeamModel();
        // Asumsi kamu sudah buat CategoryModel dengan cara yang sama
        // $this->categoryModel = new CategoryModel(); 
    }

    public function handleRequest() {
        $action = isset($_GET['action']) ? $_GET['action'] : 'index';
        $id = isset($_GET['id']) ? $_GET['id'] : null;

        switch ($action) {
            case 'create':
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $this->model->insert($_POST['name'], $_POST['city'], $_POST['category_id']);
                    header("Location: index.php?page=teams");
                } else {
                    // Data Binding: Siapkan variable kosong
                    $data = ['team' => null]; 
                    // Ambil data kategori untuk dropdown (Mocking dulu jika belum ada Model Category)
                    $categories = $this->db->query("SELECT * FROM categories"); 
                    include 'views/teams/form.php';
                }
                break;

            case 'edit':
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $this->model->update($id, $_POST['name'], $_POST['city'], $_POST['category_id']);
                    header("Location: index.php?page=teams");
                } else {
                    // Data Binding: Tarik data spesifik untuk di-bind ke form
                    $data = ['team' => $this->model->getById($id)];
                    $categories = Database::getInstance()->query("SELECT * FROM categories"); // Direct query utk simpel
                    include 'views/teams/form.php';
                }
                break;

            case 'delete':
                $this->model->delete($id);
                header("Location: index.php?page=teams");
                break;

            default:
                // Data Binding: Siapkan list teams untuk View
                $teams = $this->model->getAll();
                include 'views/teams/index.php';
                break;
        }
    }
}
?>