<?php
// Controllers/KebunController.php

// 1. Path ke model harus benar
require_once '../AgroKendali/Model/Lahan_model.php';

// Ambil variabel global yang dibutuhkan
$action = $_GET['action'] ?? 'index';

if ($page === 'kebun-tambah' || $action === 'tambah') {
    showTambahForm();
} elseif ($action === 'store') {
    addKebun();
} elseif ($action === 'hapus') {
    deleteKebun();
} elseif ($action === 'konfirmasi_hapus') {
    konfirmasiHapus();
}else {
    listKebun();
}

// --- Kumpulan Fungsi untuk Controller Ini ---

// Fungsi untuk menampilkan DAFTAR KEBUN
function listKebun() {
    global $con, $currentPage; 
    $semuaKebun = getAllKebun($con);

    // Perakitan Halaman
    require_once '../AgroKendali/Views/Layouts/template_header.php';
    include '../AgroKendali/Views/Layouts/header.php';
    echo '<div class="flex flex-1 overflow-hidden">';
    include '../AgroKendali/Views/Layouts/sidebar.php';
    include '../AgroKendali/Views/Kebun/index.php';

    require_once '../AgroKendali/Views/Layouts/template_footer.php';
}

// Fungsi untuk menampilkan FORM TAMBAH
function showTambahForm() {
    global $currentPage;
    $currentPage = 'kebun';
    
    require_once '../AgroKendali/Views/Layouts/template_header.php';
    include '../AgroKendali/Views/Layouts/header.php';
    echo '<div class="flex flex-1 overflow-hidden">';
    include '../AgroKendali/Views/Layouts/sidebar.php';
    include '../AgroKendali/Views/Kebun/tambah.php'; // Pastikan nama file view ini benar
    echo '</div>';
    require_once '../AgroKendali/Views/Layouts/template_footer.php';
}

// Fungsi untuk MEMPROSES DATA dari form
function addKebun() {
    global $con;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $berhasil = tambahKebun($con, $_POST);
        if ($berhasil) {
            header("Location: index.php?page=kebun&status=sukses_tambah");
        } else {
            header("Location: index.php?page=kebun&status=gagal_tambah");
        }
        exit();
    }
}

// Fungsi untuk MENGHAPUS data
function deleteKebun() {
    global $con;
    $id = $_GET['id'] ?? 0;
    if ($id > 0) {
        $berhasil = hapusKebun($con, $id);
        $status = $berhasil ? 'hapus_sukses' : 'hapus_gagal';
    } else {
        $status = 'id_tidak_valid';
    }
    header("Location: index.php?page=kebun&status=$status");
    exit();
}

function konfirmasiHapus() {
    global $con, $currentPage;
    $currentPage = 'kebun';

    $id = $_GET['id'] ?? 0;
    if ($id <= 0) {
        header("Location: index.php?page=kebun&status=id_tidak_valid");
        exit();
    }

    $kebun = getKebunById($con, $id); // Buat fungsi ini kalau belum ada
    if (!$kebun) {
        header("Location: index.php?page=kebun&status=id_tidak_valid");
        exit();
    }

    require_once '../AgroKendali/Views/Layouts/template_header.php';
    include '../AgroKendali/Views/Layouts/header.php';
    echo '<div class="flex flex-1 overflow-hidden">';
    include '../AgroKendali/Views/Layouts/sidebar.php';
    include '../AgroKendali/Views/Kebun/konfirmasi_hapus.php';
    echo '</div>';
    require_once '../AgroKendali/Views/Layouts/template_footer.php';
}

?>