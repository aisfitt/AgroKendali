<?php
// /AgroKendali/logout.php

// Panggil file konfigurasi untuk memulai session dan mendapatkan BASE_URL
require_once 'Config/KoneksiDB.php';

// 1. Hapus semua variabel session
session_unset();

// 2. Hancurkan sesi yang sedang berjalan
session_destroy();

// 3. Arahkan pengguna kembali ke halaman beranda
header("Location: " . BASE_URL . "/index.php?page=beranda");
exit();
?>