<?php
// Main Router
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'teams':
        require_once 'viewmodels/TeamViewModel.php';
        $vm = new TeamViewModel();
        $vm->handleRequest();
        break;
        
    case 'players':
        // require_once 'viewmodels/PlayerViewModel.php';
        // $vm = new PlayerViewModel();
        // $vm->handleRequest();
        echo "Silakan copy struktur TeamViewModel untuk Players!";
        break;
        
    // Tambahkan case untuk 'categories' dan 'staff' disini
        
    default:
        echo "<h1>Dashboard Olahraga</h1>";
        echo "<ul>
                <li><a href='index.php?page=categories'>Manage Categories</a></li>
                <li><a href='index.php?page=teams'>Manage Teams</a></li>
                <li><a href='index.php?page=players'>Manage Players</a></li>
                <li><a href='index.php?page=staff'>Manage Staff</a></li>
              </ul>";
        break;
}
?>