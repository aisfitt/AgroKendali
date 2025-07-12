<?php
// Controllers/UserController.php

require_once '../AgroKendali/Model/User_model.php';

// Ambil variabel page dari router utama
global $page;

// Tentukan fungsi mana yang akan dijalankan
if ($page === 'ubah-password') {
    showUbahPasswordForm();
} else {
    showProfile(); // Defaultnya adalah menampilkan info akun
}

// Fungsi untuk menampilkan halaman profil
function showProfile() {
    global $con, $currentPage;
    $currentPage = ''; // Halaman ini tidak ada di sidebar, jadi bisa dikosongkan

    // Pastikan pengguna sudah login
    if (!isset($_SESSION['user_id'])) {
        header("Location: index.php?page=login");
        exit();
    }

    // Ambil ID user dari session
    $userId = $_SESSION['user_id'];
    // Ambil data user dari model
    $user = getUserById($con, $userId);

    // Perakitan halaman
    require_once '../AgroKendali/Views/Layouts/template_header.php';
    include '../AgroKendali/Views/Layouts/header.php';
    echo '<div class="flex flex-1 overflow-hidden">';
    include '../AgroKendali/Views/Layouts/sidebar.php';
    // Panggil view profil dan kirimkan data user
    include '../AgroKendali/Views/akun/informasi.php';
    echo '</div>';
    require_once '../AgroKendali/Views/Layouts/template_footer.php';
}

function showUbahPasswordForm() {
    global $currentPage;
    $currentPage = 'profil';

    // Perakitan Halaman
    require_once '../AgroKendali/Views/Layouts/template_header.php';
    include '../AgroKendali/Views/Layouts/header.php';
    echo '<div class="flex flex-1 overflow-hidden">';
    include '../AgroKendali/Views/Layouts/sidebar.php';
    // Panggil view yang berisi form ubah password
    include '../AgroKendali/Views/akun/ubah_password.php'; 
    echo '</div>';
    require_once '../AgroKendali/Views/Layouts/template_footer.php';
}

function processChangePassword() {
    global $con;
    if (!isUserLoggedIn()) {
        header('Location: index.php?page=login');
        exit();
    }

    // 1. Validasi input
    if (empty($_POST['password_lama']) || empty($_POST['password_baru']) || empty($_POST['konfirmasi_password'])) {
        header('Location: index.php?page=ubah-password&status=gagal_kosong');
        exit();
    }
    if ($_POST['password_baru'] !== $_POST['konfirmasi_password']) {
        header('Location: index.php?page=ubah-password&status=gagal_tidak_cocok');
        exit();
    }

    // 2. Verifikasi password lama
    $userId = $_SESSION['user_id'];
    $user = getUserById($con, $userId);

    if ($user && password_verify($_POST['password_lama'], $user['password'])) {
        // Jika password lama benar, hash password baru
        $newHashedPassword = password_hash($_POST['password_baru'], PASSWORD_BCRYPT);
        
        // 3. Panggil model untuk update password di database
        $sukses = updateUserPassword($con, $userId, $newHashedPassword);

        if ($sukses) {
            // PERUBAHAN DI SINI:
            // Arahkan ke halaman informasi-akun dengan status sukses
            header('Location: index.php?page=informasi-akun&status=sukses_password');
            exit();
        } else {
            header('Location: index.php?page=ubah-password&status=gagal_db');
            exit();
        }
    } else {
        // Jika password lama salah
        header('Location: index.php?page=ubah-password&status=gagal_password_lama');
        exit();
    }
}

?>