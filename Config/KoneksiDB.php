<?php
// KONFIGURASI UTAMA APLIKASI

// 1. Tampilkan semua error untuk debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Mulai session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// 3. Informasi Database
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'agrokendali');

// 4. Informasi Alamat Website (PENTING!)
define('BASE_URL', '/Projek/AgroKendali'); // Sesuaikan jika nama folder berbeda

// 5. Membuat Koneksi Database
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// 6. Fungsi Helper Global
function isUserLoggedIn() {
    return isset($_SESSION['user_id']);
}