<?php
// Controllers/LaporanKondisi.php

require_once '../AgroKendali/Model/Laporan_model.php';
require_once '../AgroKendali/Model/Lahan_model.php';

$action = $_GET['action'] ?? 'index'; // Cek aksi yang diminta

        if ($action === 'tambah') {
            // Jika aksinya 'tambah', panggil fungsi untuk menampilkan form
            showTambahLaporanForm();
        } elseif ($action === 'store') {
            // Jika aksinya 'store', panggil fungsi untuk memproses form
            addLaporan();
        } elseif ($action == 'hapus') {
            deleteLaporan();
        } elseif ($action === 'konfirmasi_hapus') 
            konfirmasiHapus();
        else {
            // Jika tidak ada aksi, tampilkan daftar laporan (default)
            listLaporan();
        }
// ... (fungsi listLaporan() Anda yang sudah ada) ...

// Fungsi untuk menampilkan halaman daftar laporan
function evaluasiKondisi($kelembapan, $ph) {
    $status = [];

    if ($kelembapan < 40 || $kelembapan > 70) {
        $status[] = 'Kelembapan tidak normal';
    }

    if ($ph < 5.5 || $ph > 7) {
        $status[] = 'pH tidak normal';
    }

    return empty($status) ? 'Aman' : 'Tidak Aman: ' . implode(', ', $status);
}

function listLaporan() {
    global $con, $currentPage;
    $semuaLaporan = getAllLaporan($con);

    // Tambahkan evaluasi kondisi ke tiap laporan
    foreach ($semuaLaporan as &$laporan) {
        $laporan['status_kondisi'] = evaluasiKondisi($laporan['kelembapan'], $laporan['ph']);
        if ($laporan['status_kondisi'] === 'Aman') {
            $laporan['status_kondisi_color'] = 'text-green-600';
        } else {
            $laporan['status_kondisi_color'] = 'text-red-600';
        }

    }

    require_once '../AgroKendali/Views/Layouts/header.php';
    echo '<div class="flex  overflow-hidden">';
    require_once '../AgroKendali/Views/Layouts/sidebar.php';
    require_once '../AgroKendali/Views/kondisi/index.php';
    echo '</div>';
}


// FUNGSI BARU UNTUK MENAMPILKAN FORM TAMBAH
function showTambahLaporanForm() {
    global $con, $currentPage;
    $currentPage = 'kondisi-lahan';

    // Ambil data kebun untuk pilihan dropdown di form
    // Pastikan Anda punya model Lahan_model.php
    require_once '../AgroKendali/Model/Lahan_model.php';
    $semuaKebun = getAllKebun($con);

    // Perakitan Halaman
    require_once '../AgroKendali/Views/Layouts/template_header.php';
    include '../AgroKendali/Views/Layouts/header.php';
    echo '<div class="flex flex-1 overflow-hidden">';
    include '../AgroKendali/Views/Layouts/sidebar.php';
    include '../AgroKendali/Views/kondisi/tambah.php'; // Panggil view yang berisi form
    echo '</div>';
    require_once '../AgroKendali/Views/Layouts/template_footer.php';
}

// FUNGSI BARU UNTUK MEMPROSES FORM
function addLaporan() {
    global $con;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        tambahLaporan($con, $_POST); // Panggil fungsi dari Laporan_model.php
        header("Location: index.php?page=kondisi-lahan");
        exit();
    }
}

function deleteLaporan() {
    global $con;
    if (isset($_GET['id'])) {
        hapusLaporan($con, $_GET['id']); // Fungsi ini ada di Laporan_model.php
    }
    header("Location: index.php?page=kondisi-lahan");
    exit();
}

function konfirmasiHapus() {
    global $con, $currentPage;
    $currentPage = 'areas';

    $id = $_GET['id'] ?? 0;
    if ($id <= 0) {
        header("Location: index.php?page=areas&status=id_tidak_valid");
        exit();
    }

    $kebun = getKebunById($con, $id); // Buat fungsi ini kalau belum ada
    if (!$kebun) {
        header("Location: index.php?page=areas&status=id_tidak_valid");
        exit();
    }

    require_once '../AgroKendali/Views/Layouts/template_header.php';
    include '../AgroKendali/Views/Layouts/header.php';
    echo '<div class="flex flex-1 overflow-hidden">';
    include '../AgroKendali/Views/Layouts/sidebar.php';
    include '../AgroKendali/Views/kondisi/konfirmasi_hapus.php';
    echo '</div>';
    require_once '../AgroKendali/Views/Layouts/template_footer.php';
}
?>