<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// FILE ROUTER UTAMA

// Memuat file konfigurasi (yang akan otomatis memulai session juga)
require_once '../AgroKendali/Config/KoneksiDB.php';

// Menentukan halaman & aksi yang akan diakses
$page = $_GET['page'] ?? 'beranda';
$action = $_GET['action'] ?? 'index';

// Variabel ini akan digunakan oleh sidebar untuk menandai halaman aktif
$currentPage = $page;

// Routing ke Controller yang sesuai
switch ($page) {
    case 'beranda':
        require_once '../AgroKendali/Controllers';
        index();
        break;

    case 'dashboard':
        require_once '../AgroKendali/Controllers/Dashboard.php';
        dashboard();
        break;

    case 'ubah-password':
        require_once '../AgroKendali/Controllers/User.php';
        break;

    case 'login':
        require_once '../AgroKendali/Controllers/Auth.php';
        if ($action === 'index') {
            login_page();
        } elseif ($action === 'process') {
            login_process();
        }
        break;

    case 'informasi-akun':
        require_once '../AgroKendali/Controllers/user.php';
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
        require_once '../AgroKendali/Controllers/index.php';
        logout_process();
        break;

    case 'kebun':
    case 'kebun-tambah':
        require_once 'Controllers/Lahan.php'; // Ganti nama file jika perlu
        break;

    // --- TAMBAHKAN CASE BARU INI ---
    case 'kondisi-lahan':
        require_once '../AgroKendali/Controllers/LaporanKondisi.php'; // Path yang benar
        break;

    // TAMBAHKAN CASE INI
    case 'panen':
        require_once '../AgroKendali/Controllers/Panen.php'; // Ganti nama file jika perlu
        $action = $_GET['action'] ?? 'index';

        if ($action === 'store') {
            addPanen();
        } else {
            listPanen();
        }
        break;

        // --- TAMBAHKAN CASE UNTUK FITUR PUPUK ---
    case 'pupuk':
    require_once '../AgroKendali/Controllers/Pupuk.php';
    break;

    // TAMBAHKAN ATAU PASTIKAN CASE INI ADA
    case 'hama':
        require_once '../AgroKendali/Controllers/Hama.php';
        break; // Biarkan controller yang bekerja selanjutnya

    default:
        http_response_code(404);
        echo "Halaman tidak ditemukan";
        break;
}