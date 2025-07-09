<?php
// Controllers/PupukController.php

// Panggil AgroKendali/Model dari lokasi yang benar
require_once '../AgroKendali/Model/Pupuk_model.php';
require_once '../AgroKendali/Model/Lahan_model.php';

// FUNGSI 1: Menampilkan Halaman Menu Pilihan
function showPupukMenu() {
    global $currentPage;
    $currentPage = 'pupuk';
    
    // Perakitan Halaman
    require_once '../AgroKendali/Views/Layouts/template_header.php'; // Path diperbaiki
    require_once '../AgroKendali/Views/Layouts/header.php';         // Path diperbaiki
    echo '<div class="flex flex-1 overflow-hidden">';
    require_once '../AgroKendali/Views/Layouts/sidebar.php';        // Path diperbaiki
    require_once '../AgroKendali/Views/Pupuk/index.php';             // Memanggil view menu
    echo '</div>';
    require_once '../AgroKendali/Views/Layouts/template_footer.php';// Path diperbaiki
}

// FUNGSI 2: Menampilkan Halaman Riwayat Transaksi
function showRiwayat() {
    global $con, $currentPage;
    $currentPage = 'pupuk';
    $dataTransaksi = getAllTransaksiPupuk($con);

    require_once '../AgroKendali/Views/Layouts/template_header.php';
    require_once '../AgroKendali/Views/Layouts/header.php';
    echo '<div class="flex flex-1 overflow-hidden">';
    require_once '../AgroKendali/Views/Layouts/sidebar.php';
    require_once '../AgroKendali/Views/Pupuk/riwayat.php'; // HANYA memanggil view riwayat
    echo '</div>';
    require_once '../AgroKendali/Views/Layouts/template_footer.php';
}

// FUNGSI 3: Menampilkan Halaman Kelola Jenis Pupuk
function showJenis() {
    global $con, $currentPage;
    $currentPage = 'pupuk';
    $dataJenis = getAllJenisPupuk($con);

    require_once '../AgroKendali/Views/Layouts/template_header.php';
    require_once '../AgroKendali/Views/Layouts/header.php';
    echo '<div class="flex flex-1 overflow-hidden">';
    require_once '../AgroKendali/Views/Layouts/sidebar.php';
    require_once '../AgroKendali/Views/Pupuk/jenis.php'; // HANYA memanggil view kelola jenis
    echo '</div>';
    require_once '../AgroKendali/Views/Layouts/template_footer.php';
}

// Fungsi untuk memproses penambahan JENIS pupuk baru
function addJenisPupuk() {
    global $con;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        tambahJenisPupuk($con, $_POST);
        header("Location: index.php?page=pupuk&action=jenis");
        exit();
    }
}

// Fungsi untuk memproses penambahan TRANSAKSI pupuk baru
function addTransaksiPupuk() {
    global $con;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        tambahTransaksiPupuk($con, $_POST);
        header("Location: index.php?page=pupuk&action=riwayat");
        exit();
    }
}
?>