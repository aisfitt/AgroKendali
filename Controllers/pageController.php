<?php

// Menampilkan halaman beranda
function index() {
    require_once '../AgroKendali/Views/beranda.php';
}

// Menampilkan halaman dashboard, dengan proteksi login
function dashboard() {
    // Proteksi halaman
    if (!isUserLoggedIn()) {
        header('Location: index.php?page=login');
        exit();
    }

    // ✅ Siapkan data awal untuk dashboard
    $jumlahKebun = 0;
    $kondisiTanah = 0;
    $totalPanen = "0 Ton";
    $jenisPupuk = 0;
    $laporanHama = 0;

    // Panggil view dan kirimkan datanya
    require_once '../AgroKendali/Views/dashboard.php';
}