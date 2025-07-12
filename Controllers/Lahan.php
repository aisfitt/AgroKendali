<?php
// Controllers/KebunController.php

require_once '../AgroKendali/model/Lahan_model.php';

// Ambil variabel dari router utama
global $page, $con, $currentPage;

// Router kecil di dalam controller
$action = $_GET['action'] ?? 'index';

// Tentukan fungsi mana yang akan dijalankan
if ($action === 'kebun-tambah') {
    showTambahForm();
} elseif ($action === 'store') {
    addKebun();
} elseif ($action === 'hapus') {
    deleteKebun();
} else {
    listKebun();
}

// Menampilkan halaman DAFTAR KEBUN
function listKebun() {
    global $con, $currentPage; 
    $semuaKebun = getAllKebun($con);
    
    require_once '../AgroKendali/Views/Layouts/template_header.php';
    include '../AgroKendali/Views/Layouts/header.php';
    echo '<div class="flex flex-1 overflow-hidden">';
    include '../AgroKendali/Views/Layouts/sidebar.php';
    include '../AgroKendali/Views/Kebun/index.php';
    echo '</div>';
    require_once '../AgroKendali/Views/Layouts/template_footer.php';
}

// Menampilkan halaman FORM TAMBAH
function showTambahForm() {
    echo "✅ showTambahForm DIJALANKAN<br>"; // ⬅️ debug baris pertama
    global $currentPage;
    $currentPage = 'kebun';
    
    require_once '../AgroKendali/Views/Layouts/template_header.php';
    include '../AgroKendali/Views/Layouts/header.php';
    echo '<div class="flex flex-1 overflow-hidden">';
    include '../AgroKendali/Views/Layouts/sidebar.php';
    include '../AgroKendali/Views/Kebun/TambahKebun.php';
    echo '</div>';
    require_once '../AgroKendali/Views/Layouts/template_footer.php';
}

// Memproses data dari form
function addKebun() {
    global $con;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        tambahKebun($con, $_POST);
        header("Location: index.php?page=kebun");
        exit();
    }
}
/**
 * Memproses penghapusan data.
 */
function deleteKebun() {
    global $con;
    $id = $_GET['id'] ?? 0; // Ambil ID dari URL

    if ($id > 0) {
        hapusKebun($con, $id);
    }
    
    // Arahkan kembali ke halaman daftar
    header("Location: index.php?page=kebun");
    exit();
}
?>