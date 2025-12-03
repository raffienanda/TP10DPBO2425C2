<?php
// --- LOAD SEMUA VIEWMODELS ---
include_once 'viewmodels/MemberViewModel.php';
include_once 'viewmodels/TrainerViewModel.php';
include_once 'viewmodels/EquipmentViewModel.php';
include_once 'viewmodels/SessionViewModel.php';

// --- ROUTING ---
$page = isset($_GET['page']) ? $_GET['page'] : 'members';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// --- HEADER ---
include 'views/template/header.php';
// Tambahin link navigasi baru di header.php kamu secara manual ya:
// <a href="index.php?page=equipment">Alat Gym</a>

// --- LOGIC SWITCH ---
switch ($page) {
    // 1. ANGGOTA
    case 'members':
        $viewModel = new MemberViewModel();
        if ($action == 'create') {
            include 'views/member_form.php';
        } elseif ($action == 'edit') {
            $member = $viewModel->fetchById($_GET['id']);
            include 'views/member_form.php';
        } elseif ($action == 'store') {
            if (!empty($_POST['id'])) {
                $viewModel->update($_POST);
            } else {
                $viewModel->create($_POST);
            }
            header("Location: index.php?page=members");
        } elseif ($action == 'delete') {
            $viewModel->delete($_GET['id']);
            header("Location: index.php?page=members");
        } else {
            $members = $viewModel->fetchAll();
            include 'views/member_list.php';
        }
        break;

    // 2. PELATIH
    case 'trainers':
        $viewModel = new TrainerViewModel();
        if ($action == 'create') {
            include 'views/trainer_form.php';
        } elseif ($action == 'edit') {
            $trainer = $viewModel->fetchById($_GET['id']);
            include 'views/trainer_form.php';
        } elseif ($action == 'store') {
            if (!empty($_POST['id'])) {
                $viewModel->update($_POST);
            } else {
                $viewModel->create($_POST);
            }
            header("Location: index.php?page=trainers");
        } elseif ($action == 'delete') {
            $viewModel->delete($_GET['id']);
            header("Location: index.php?page=trainers");
        } else {
            $trainers = $viewModel->fetchAll();
            include 'views/trainer_list.php';
        }
        break;

    // 3. EQUIPMENT
    case 'equipment':
        $viewModel = new EquipmentViewModel();
        if ($action == 'create') {
            include 'views/equipment_form.php';
        } elseif ($action == 'edit') {
            $equipment = $viewModel->fetchById($_GET['id']);
            include 'views/equipment_form.php';
        } elseif ($action == 'store') {
            if (!empty($_POST['id'])) {
                $viewModel->update($_POST);
            } else {
                $viewModel->create($_POST);
            }
            header("Location: index.php?page=equipment");
        } elseif ($action == 'delete') {
            $viewModel->delete($_GET['id']);
            header("Location: index.php?page=equipment");
        } else {
            $equipmentList = $viewModel->fetchAll();
            include 'views/equipment_list.php';
        }
        break;

    // 4. SESSIONS (JADWAL) - RELASI
    case 'sessions':
        $sessionViewModel = new SessionViewModel();
        
        if ($action == 'create') {
            // Kita butuh data Member dan Trainer untuk Dropdown
            $memberVM = new MemberViewModel();
            $trainerVM = new TrainerViewModel();
            
            $membersList = $memberVM->fetchAll();
            $trainersList = $trainerVM->fetchAll();
            
            include 'views/session_form.php';
        } elseif ($action == 'store') {
            $sessionViewModel->create($_POST);
            header("Location: index.php?page=sessions");
        } else {
            $sessions = $sessionViewModel->fetchAll();
            include 'views/session_list.php';
        }
        break;

    default:
        echo "<h2>404 - Halaman tidak ditemukan</h2>";
}

echo "</body></html>";
?>                      