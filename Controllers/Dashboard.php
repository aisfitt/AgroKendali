<?php
// Controllers/Dashboard.php

// Panggil semua model yang dibutuhkan
require_once '../AgroKendali/Model/Lahan_model.php';
require_once '../AgroKendali/Model/Laporan_model.php';
require_once '../AgroKendali/Model/Panen_model.php';
require_once '../AgroKendali/Model/Pupuk_model.php';
require_once '../AgroKendali/Model/Hama_model.php';

function dashboard() {
    global $con, $currentPage;
    $currentPage = 'dashboard';

    // Memanggil fungsi dari model
    $jumlahKebun     = countKebun($con);               // Dari Model/Lahan_model.php
    $kondisiTanah    = countLaporan($con);             // Dari Model/Laporan_model.php
    $totalPanen      = sumTotalPanen($con);            // Dari Model/Panen_model.php
    $jenisPupuk      = countJenisPupuk($con);          // Dari Model/Pupuk_model.php
    $laporanHama     = countHama($con);                // Dari Model/Hama_model.php


    // Kirim data ke view
    require_once '../AgroKendali/Views/Layouts/header.php';
    echo '<div class="flex  overflow-hidden">';
    require_once '../AgroKendali/Views/Layouts/sidebar.php';
    require_once '../AgroKendali/Views/dashboard.php';
    echo '</div>';
}

?>