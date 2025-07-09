<?php
// Controllers/HamaController.php

require_once '../AgroKendali/Model/Hama_model.php';

// Router kecil di dalam controller
$action = $_GET['action'] ?? 'index';

if ($action === 'tambah') {
    showTambahForm();
} elseif ($action === 'store') {
    addHama();
} else {
    listHama();
}


// --- Kumpulan Fungsi untuk Hama ---

// Menampilkan halaman utama (daftar hama)
function listHama() {
    global $con, $currentPage;
    $currentPage = 'hama';
    $dataHama = getAllHama($con);

    // Perakitan halaman
    require_once '../AgroKendali/Views/Layouts/template_header.php';
    include '../AgroKendali/Views/Layouts/header.php';
    echo '<div class="flex flex-1 overflow-hidden">';
    include '../AgroKendali/Views/Layouts/sidebar.php';
    include '../AgroKendali/Views/Hama/index.php';
    echo '</div>';
    require_once '../AgroKendali/Views/Layouts/template_footer.php';
}

// Menampilkan halaman form tambah
function showTambahForm() {
    global $currentPage;
    $currentPage = 'hama';
    
    // Perakitan halaman
    require_once '../AgroKendali/Views/Layouts/template_header.php';
    include '../AgroKendali/Views/Layouts/header.php';
    echo '<div class="flex flex-1 overflow-hidden">';
    include '../AgroKendali/Views/Layouts/sidebar.php';
    include '../AgroKendali/Views/Hama/tambahHama.php';
    echo '</div>';
    require_once '../AgroKendali/Views/Layouts/template_footer.php';
}

// Memproses data dari form
function addHama() {
    global $con;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Logika upload gambar
        $gambarName = $_FILES['gambar']['name'];
        $gambarTmp = $_FILES['gambar']['tmp_name'];
        // Pastikan folder 'uploads' ada di folder utama proyek Anda
        $uploadDir = '../uploads/'; 
        $gambarPath = 'uploads/' . basename($gambarName); // Path untuk disimpan di DB
        
        // Pindahkan file ke folder tujuan
        move_uploaded_file($gambarTmp, $uploadDir . basename($gambarName));

        // Panggil model untuk simpan data ke DB
        tambahHama($con, $_POST, $gambarPath);

        header("Location: index.php?page=hama");
        exit();
    }
}
?>