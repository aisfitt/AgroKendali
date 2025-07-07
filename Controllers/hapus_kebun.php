<?php
// Controllers/HapusKebun.php

require_once '../Model/KoneksiDB.php';  // Memanggil koneksi database
require_once '../../Model/Lahan_model.php';  // Memanggil model Lahan_model

// Ambil ID dari URL
$id_kebun = $_GET['id'];

// Periksa jika ID kebun ada
if (isset($id_kebun)) {
    // Memanggil fungsi hapusKebun dari model dan mengirimkan koneksi serta ID kebun
    $sukses = hapusKebun($con, $id_kebun);  // Menggunakan koneksi global $con dan ID kebun

    // Jika berhasil, arahkan ke halaman daftar kebun
    if ($sukses) {
        header("Location: ../Views/Kebun/index.php?status=sukses");
    } else {
        // Jika gagal, arahkan ke halaman daftar kebun dengan status gagal
        header("Location: ../Views/Kebun/index.php?status=gagal");
    }
} else {
    // Jika ID tidak ditemukan, arahkan kembali ke halaman kebun
    header("Location: ../Views/Kebun/index.php?status=error");
}
exit();
?>
