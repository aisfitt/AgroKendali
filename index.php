<?php
// FILE ROUTER UTAMA

// Memuat file konfigurasi (yang akan otomatis memulai session juga)
require_once 'Config/KoneksiDB.php';

// Menentukan halaman & aksi yang akan diakses
$page = $_GET['page'] ?? 'beranda';
$action = $_GET['action'] ?? 'index';

// Routing ke Controller yang sesuai
switch ($page) {
    case 'beranda':
        require_once '../AgroKendali/Controllers/PageController.php';
        index();
        break;

    case 'dashboard':
        require_once '../AgroKendali/Controllers/PageController.php';
        dashboard();
        break;

    case 'login':
        require_once '../AgroKendali/Controllers/Auth.php';
        if ($action === 'index') {
            login_page();
        } elseif ($action === 'process') {
            login_process();
        }
        break;

    case 'register':
        require_once '../AgroKendali/Controllers/Auth.php';
        if ($action === 'index') {
            register_page();
        } elseif ($action === 'process') {
            register_process();
        }
        break;

    case 'logout':
        require_once '../AgroKendali/Controllers/Auth.php';
        logout_process();
        break;

    default:
        http_response_code(404);
        echo "Halaman tidak ditemukan";
        break;
}