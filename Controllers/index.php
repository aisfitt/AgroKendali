<?php
session_start(); // Mulai sesi untuk login

// Ambil parameter 'page' dari URL untuk menentukan controller dan view yang akan ditampilkan
$page = $_GET['page'] ?? 'beranda';  // Default page adalah beranda

switch ($page) {
    case 'dashboard':
        require_once 'Controllers/DashboardController.php';
        showDashboard();
        break;

    case 'kebun':
        require_once 'Controllers/KebunController.php';
        listKebun();
        break;

    case 'login':
        require 'Views/akun/login.php';
        break;

    case 'logout':
        require_once 'Controllers/AuthController.php';
        logout();
        break;

    default:
        include 'Views/beranda.php';  // Menampilkan halaman beranda
        break;
}
?>
 