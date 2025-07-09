<?php
// Controllers/KebunController.php (atau Lahan.php sesuai penamaan Anda)

// Panggil Model dari lokasi yang benar
// Pastikan path ini benar dari lokasi file controller ini
require_once '../AgroKendali/Model/Lahan_model.php'; 

// Fungsi untuk menampilkan daftar kebun
function listKebun() {
    global $con, $currentPage; 
    $semuaKebun = getAllKebun($con);

    // Perakitan Halaman Lengkap
    require_once '../AgroKendali/Views/Layouts/template_header.php';
    require_once '../AgroKendali/Views/Layouts/header.php';
    echo '<div class="flex flex-1 overflow-hidden">';
    require_once '../AgroKendali/Views/Layouts/sidebar.php';
    require_once '../AgroKendali/Views/Kebun/index.php'; // Konten Inti
    echo '</div>';
    require_once '../AgroKendali/Views/Layouts/template_footer.php';
}

// Fungsi untuk menampilkan form tambah
function showTambahForm() {
    global $currentPage;
    $currentPage = 'kebun';
    
    // Perakitan Halaman Lengkap
    require_once '../AgroKendali/Views/Layouts/template_header.php';
    require_once '../AgroKendali/Views/Layouts/header.php';
    echo '<div class="flex flex-1 overflow-hidden">';
    require_once '../AgroKendali/Views/Layouts/sidebar.php';
    require_once '../AgroKendali/Views/Kebun/tambah.php'; // Konten Inti
    echo '</div>';
    require_once '../AgroKendali/Views/Layouts/template_footer.php';
}

// Fungsi untuk menambahkan kebun
function addKebun() {
    global $con;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        tambahKebun($con, $_POST);
        header("Location: index.php?page=kebun");
        exit();
    }
}

// Fungsi untuk menghapus kebun
function deleteKebun() {
    global $con; // Ambil koneksi database
    $id = $_GET['id'] ?? null; // Gunakan null untuk ID jika tidak ada
    
    // Validasi ID sebelum proses
    if (is_numeric($id) && $id > 0) {
        $sukses = hapusKebun($con, $id); // Panggil fungsi hapus dari model
        
        if ($sukses) {
            header("Location: index.php?page=kebun&status=hapus_sukses");
        } else {
            header("Location: index.php?page=kebun&status=hapus_gagal");
        }
    } else {
        header("Location: index.php?page=kebun&status=id_tidak_valid");
    }
    exit(); 
}
?>