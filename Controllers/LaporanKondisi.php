<?php
// Controllers/LaporanKondisi.php

require_once '../AgroKendali/Model/Laporan_model.php';
require_once '../AgroKendali/Model/Lahan_model.php';
// ... (fungsi listLaporan() Anda yang sudah ada) ...

// Fungsi untuk menampilkan halaman daftar laporan
function listLaporan() {
    global $con, $currentPage; 
    $semuaLaporan = getAllLaporan($con); // Ambil data dari model
    
    // Perakitan Halaman
    require_once '../AgroKendali/Views/Layouts/header.php';
    echo '<div class="flex flex-1 overflow-hidden">';
    require_once '../AgroKendali/Views/Layouts/sidebar.php';
    require_once '../AgroKendali/Views/kondisi/index.php'; // Panggil view untuk menampilkan konten
    echo '</div>';
}

// FUNGSI BARU UNTUK MENAMPILKAN FORM TAMBAH
function showTambahLaporanForm() {
    global $con, $currentPage;
    $currentPage = 'kondisi-lahan';

    // Ambil data kebun untuk pilihan dropdown di form
    // Pastikan Anda punya model Lahan_model.php
    require_once '../AgroKendali/Model/Lahan_model.php';
    $semuaKebun = getAllKebun($con);

    // Perakitan Halaman
    require_once '../AgroKendali/Views/Layouts/template_header.php';
    include '../AgroKendali/Views/Layouts/header.php';
    echo '<div class="flex flex-1 overflow-hidden">';
    include '../AgroKendali/Views/Layouts/sidebar.php';
    include '../AgroKendali/Views/KondisiLahan/tambah.php'; // Panggil view yang berisi form
    echo '</div>';
    require_once '../AgroKendali/Views/Layouts/template_footer.php';
}

// FUNGSI BARU UNTUK MEMPROSES FORM
function addLaporan() {
    global $con;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        tambahLaporan($con, $_POST); // Panggil fungsi dari Laporan_model.php
        header("Location: index.php?page=kondisi-lahan");
        exit();
    }
}
?>