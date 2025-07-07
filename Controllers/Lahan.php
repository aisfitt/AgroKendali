<?php
// Controllers/KebunController.php
require_once '../Model/KoneksiDB.php';
require_once '../Model/Lahan_model.php';  // Pastikan model sudah di-include

// Fungsi untuk menambah kebun
function addKebun() {
    global $con; 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $success = tambahKebun($con, $_POST);  // Panggil fungsi tambahKebun dari model

        // Jika berhasil menambah kebun, arahkan ke halaman daftar kebun
        if ($success) {
            header("Location: ../Views/Kebun/index.php?status=sukses");
        } else {
            header("Location: ../Views/Kebun/index.php?status=gagal");
        }
    }
}

// Fungsi untuk menampilkan daftar kebun
function listKebun() {
    global $con; 
    $semuaKebun = getAllKebun($con);  // Panggil fungsi getAllKebun dari model
    
    // Tampilkan halaman dengan data kebun
    include 'Views/Layouts/header.php';
    include 'Views/Kebun/index.php';  // Menampilkan daftar kebun di view
}

// Fungsi untuk menghapus kebun berdasarkan ID
function deleteKebun() {
    global $con; 
    $id_kebun = $_GET['id'];  // Ambil ID kebun dari URL
    hapusKebun($con, $id_kebun);  // Panggil fungsi hapusKebun dari model
    
    // Setelah menghapus, arahkan kembali ke halaman daftar kebun
    header("Location: ../Views/Kebun/index.php");
}

?>
