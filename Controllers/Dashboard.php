<?php
// Controllers/DashboardController.php
require_once '../Model/KoneksiDB.php';  // Memanggil file KoneksiDB.php untuk mendapatkan $con
require_once '../Model/LahanModel.php';  // Memanggil model untuk kebun

function showDashboard() {
    // Menggunakan $con untuk query database
    global $con;

    // Mengambil data jumlah kebun
    $jumlahKebun = count(getAllKebun($con));  // Fungsi getAllKebun() akan menggunakan koneksi database

    // Tampilkan halaman dashboard dengan data
    include 'Views/Layouts/header.php';
    include 'Views/dashboard.php';  // Tampilkan halaman dashboard
}
?>
