<?php
// Config/database.php

// Informasi koneksi database
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'agrokendali');

// Membuat koneksi menggunakan mysqli
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Mengecek apakah koneksi gagal?
if (mysqli_connect_errno()) {
    // Menghentikan script dan menampilkan pesan error
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// Set charset ke utf8mb4 untuk mendukung berbagai karakter
mysqli_set_charset($con, "utf8mb4");

// Fungsi ini bisa Anda panggil jika ingin memastikan koneksi berhasil di halaman lain
function checkConnection() {
    global $con;
    if ($con) {
        echo "Berhasil Terhubung!"; // Komentari ini agar tidak muncul di setiap halaman
    }
}
?>