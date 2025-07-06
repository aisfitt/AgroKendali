<?php
// Controllers/KebunController.php

require_once '../Model/KoneksiDB.php';
require_once '../../Model/Lahan_model.php';

// Cek jika ada data yang dikirim dari form tambah kebun
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Panggil fungsi tambahKebun dari model dengan data dari form ($_POST)
    $sukses = tambahKebun($con, $_POST);
    
    if ($sukses) {
        // Jika berhasil, kembali ke halaman daftar kebun
        header("Location: ../Views/Kebun/index.php?status=sukses");
    } else {
        // Jika gagal, kembali dengan pesan error
        header("Location: ../Views/Kebun/index.php?status=gagal");
    }
}
?>