<?php
// Controllers/LaporanKondisi.php

// Panggil Model dari lokasi yang benar
require_once '../AgroKendali/Model/Laporan_model.php';

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

// Tambahkan fungsi lain di sini jika perlu (tambah, hapus, dll)
?>