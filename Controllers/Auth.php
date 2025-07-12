<?php
// Memanggil file Model
require_once '../AgroKendali/Model/User_model.php';

// Router kecil di dalam controller
$action = $_GET['action'] ?? 'index';

if ($page === 'login') {
    if ($action === 'process') {
        login_process();
    } else {
        login_page();
    }
} elseif ($page === 'register') {
    // ... logika untuk register ...
} elseif ($page === 'logout') {
    // ... logika untuk logout ...
}

// Menampilkan HALAMAN LOGIN
function login_page() {
    // Controller merakit halaman dari awal sampai akhir
    require_once '../AgroKendali/Views/Layouts/template_header_auth.php'; // Panggil template khusus
    include '../AgroKendali/Views/akun/login.php';                     // Panggil konten inti
    require_once '../AgroKendali/Views/Layouts/template_footer.php';       // Panggil penutup
}
// Menampilkan halaman register
function register_page() {
    if (isUserLoggedIn()) {
        header('Location: index.php?page=dashboard');
        exit();
    }
    require_once '../AgroKendali/Views/akun/register.php';
}

// Memproses data pendaftaran
function register_process() {
    global $con;
    if (empty($_POST['nama']) || empty($_POST['email']) || empty($_POST['password'])) {
        header('Location: index.php?page=register&error=incomplete');
        exit();
    }
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (findUserByEmail($con, $email)) {
        header('Location: index.php?page=register&error=email_exists');
        exit();
    }

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $success = createUser($con, $nama, $email, $hashed_password);

    if ($success) {
        header('Location: index.php?page=login&status=registered');
    } else {
        header('Location: index.php?page=register&error=db_error');
    }
    exit();
}

// Memproses data login
function login_process() {
    global $con;
    if (empty($_POST['email']) || empty($_POST['password'])) {
        header('Location: index.php?page=login&error=incomplete');
        exit();
    }
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = findUserByEmail($con, $email);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['nama'];
        header('Location: index.php?page=dashboard');
        exit();
    } else {
        header('Location: index.php?page=login&error=invalid');
        exit();
    }
}

// Proses logout
function logout_process() {
    session_destroy();
    header('Location: index.php?page=beranda');
    exit();
}