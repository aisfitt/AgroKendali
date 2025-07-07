<?php
// Memanggil file Model
require_once '../AgroKendali/Model/User_model.php';

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

// Menampilkan halaman login
function login_page() {
    if (isUserLoggedIn()) {
        header('Location: index.php?page=dashboard');
        exit();
    }
    require_once '../AgroKendali/Views/akun/login.php';
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