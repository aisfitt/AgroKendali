<?php
// Controllers/HapusKebun.php

require_once '../Model/KoneksiDB.php';
require_once '../../Model/Lahan_model.php';

// Ambil ID dari URL
$id_kebun = $_GET['id'];

if (isset($id_kebun)) {
    // Panggil fungsi hapusKebun dari model
    hapusKebun($con, $id_kebun);
}

// Kembali ke halaman daftar kebun
header("Location: ../Views/Kebun/index.php");
?>