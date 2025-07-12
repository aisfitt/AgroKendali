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
        require_once '../AgroKendali/PageController.php';
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

    case 'kebun':
    require_once '../AgroKendali/Controllers/Lahan.php';
    $action = $_GET['action'] ?? 'index';

    if ($action === 'store') {
        addKebun();
    } elseif ($action === 'hapus') {
        deleteKebun();
    } elseif ($action === 'tambah') {
        showTambahForm(); // ✅ INI YANG PENTING
    } else {
        listKebun();
    }
    break;


    // --- TAMBAHKAN CASE BARU INI ---
    case 'kondisi-lahan':
        require_once '../AgroKendali/Controllers/LaporanKondisi.php'; // Path yang benar
        $action = $_GET['action'] ?? 'index'; // Cek aksi yang diminta

        if ($action === 'tambah') {
            // Jika aksinya 'tambah', panggil fungsi untuk menampilkan form
            showTambahLaporanForm();
        } elseif ($action === 'store') {
            // Jika aksinya 'store', panggil fungsi untuk memproses form
            addLaporan();
        } else {
            // Jika tidak ada aksi, tampilkan daftar laporan (default)
            listLaporan();
        }
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
    $action = $_GET['action'] ?? 'index';

    if ($action === 'riwayat') {
        showRiwayat(); // Panggil fungsi untuk menampilkan riwayat
    } elseif ($action === 'jenis') {
        showJenis(); // Panggil fungsi untuk menampilkan kelola jenis
    } else {
        // Jika tidak ada aksi, tampilkan menu pilihan
        showPupukMenu();
    }
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