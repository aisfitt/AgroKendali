<?php
// Controllers/LaporanKondisiController.php
require_once '../Model/LaporanModel.php';

function showLaporanKondisi() {
    global $con; 
    $dataLaporan = getAllLaporan($con);  // Ambil semua laporan dari model
    include 'Views/Layouts/header.php';
    include 'Views/LaporanKondisi/index.php';  // Tampilkan laporan kondisi di view
}
?>
