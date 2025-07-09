<?php
// Controllers/PanenController.php

require_once '../AgroKendali/Model/Panen_model.php';
require_once '../AgroKendali/Model/Lahan_model.php'; // Kita butuh ini untuk menampilkan pilihan kebun di form

// Menampilkan Halaman Utama Panen (Grafik & Tabel)
function listPanen() {
    global $con, $currentPage;
    $currentPage = 'panen'; // Untuk sidebar aktif

    $dataPanen = getAllPanen($con);
    $semuaKebun = getAllKebun($con); // Ambil daftar kebun untuk form

    // Menyiapkan data untuk grafik
    $labels = [];
    $hasil = [];
    foreach (array_reverse($dataPanen) as $panen) {
        $labels[] = date('d M', strtotime($panen['tanggal']));
        $hasil[] = $panen['berat'];
    }

    // Merakit Halaman Lengkap
    require_once '../AgroKendali/Views/Layouts/header.php';
    echo '<div class="flex flex-1 overflow-hidden">';
    require_once '../AgroKendali/Views/Layouts/sidebar.php';
    require_once '../AgroKendali/Views/Panen/index.php'; // Panggil view utama
}

// Memproses Data dari Form Tambah Panen
function addPanen() {
    global $con;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        tambahPanen($con, $_POST);
        header("Location: index.php?page=panen");
        exit();
    }
}
?>