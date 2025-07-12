<?php
// Controllers/PupukController.php

// Path ke Model sudah diperbaiki
require_once '../AgroKendali/Model/Pupuk_model.php';
require_once '../AgroKendali/Model/Lahan_model.php';

$action = $_GET['action'] ?? 'index';

// Tentukan fungsi mana yang akan dijalankan
if ($action === 'riwayat') {
    showRiwayat();
} elseif ($action === 'jenis') {
    showJenis();
} elseif ($action === 'store_jenis') {
    addJenisPupuk();
} elseif ($action === 'store_transaksi') {
    addTransaksiPupuk();
} else {
    showPupukMenu();
}


// --- Kumpulan Fungsi untuk Pupuk ---

// Menampilkan Halaman Menu Pilihan
function showPupukMenu() {
    global $con, $currentPage; 
    $currentPage = 'pupuk';

    // 1. Ambil semua data transaksi dari database
    $dataTransaksi = getAllTransaksiPupuk($con);

    // 2. Olah data untuk grafik
    $pemakaianPerJenis = [];
    // Hitung total pemakaian untuk setiap jenis pupuk
    foreach ($dataTransaksi as $transaksi) {
        $namaPupuk = $transaksi['nama_pupuk'];
        $jumlah = (float)$transaksi['jumlah'];
        if (!isset($pemakaianPerJenis[$namaPupuk])) {
            $pemakaianPerJenis[$namaPupuk] = 0;
        }
        $pemakaianPerJenis[$namaPupuk] += $jumlah;
    }

    // 3. Pisahkan label (nama pupuk) dan data (total jumlah)
    $grafikLabels = array_keys($pemakaianPerJenis);
    $grafikData = array_values($pemakaianPerJenis);

    // Perakitan halaman dengan path yang benar
    require_once '../AgroKendali/Views/Layouts/template_header.php';
    include '../AgroKendali/Views/Layouts/header.php';
    echo '<div class="flex flex-1 overflow-hidden">';
    include '../AgroKendali/Views/Layouts/sidebar.php';
    include '../AgroKendali/Views/Pupuk/index.php';
    echo '</div>';
    require_once '../AgroKendali/Views/Layouts/template_footer.php';
}

// Menampilkan Halaman Kelola Jenis Pupuk
function showJenis() {
    global $con, $currentPage;
    $currentPage = 'pupuk';
    $dataJenis = getAllJenisPupuk($con);

    require_once '../AgroKendali/Views/Layouts/template_header.php';
    include '../AgroKendali/Views/Layouts/header.php';
    echo '<div class="flex flex-1 overflow-hidden">';
    include '../AgroKendali/Views/Layouts/sidebar.php';
    include '../AgroKendali/Views/Pupuk/jenis.php';
    echo '</div>';
    require_once '../AgroKendali/Views/Layouts/template_footer.php';
}

// Menampilkan Halaman Riwayat Transaksi
function showRiwayat() {
    global $con, $currentPage;
    $currentPage = 'pupuk';
    $dataTransaksi = getAllTransaksiPupuk($con);
    $semuaKebun = getAllKebun($con);
    $dataJenis = getAllJenisPupuk($con);

    require_once '../AgroKendali/Views/Layouts/template_header.php';
    include '../AgroKendali/Views/Layouts/header.php';
    echo '<div class="flex flex-1 overflow-hidden">';
    include '../AgroKendali/Views/Layouts/sidebar.php';
    include '../AgroKendali/Views/Pupuk/riwayat.php';
    echo '</div>';
    require_once '../AgroKendali/Views/Layouts/template_footer.php';
}

// Memproses penambahan JENIS pupuk baru
function addJenisPupuk() {
    global $con;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        tambahJenisPupuk($con, $_POST);
        header("Location: index.php?page=pupuk&action=jenis");
        exit();
    }
}

// Memproses penambahan TRANSAKSI pupuk baru
function addTransaksiPupuk() {
    global $con;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        tambahTransaksiPupuk($con, $_POST);
        header("Location: index.php?page=pupuk&action=riwayat");
        exit();
    }
}
?>