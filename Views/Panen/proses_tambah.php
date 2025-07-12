<?php
// Views/Panen/proses_tambah.php
require_once '../../Model/KoneksiDB.php'; // Panggil koneksi

// Cek jika ada data yang dikirim dari form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $tanggal = $_POST['tanggal'];
    $area_id = $_POST['area_id'];
    $berat = $_POST['berat'];
    $jumlah_tandan = $_POST['jumlah_tandan'];


    // Query untuk menyimpan data
    $query = "INSERT INTO panen (tanggal, area_id, berat, jumlah_tandan) 
              VALUES ('$tanggal', '$area_id', '$berat', '$jumlah_tandan')";
    
    // Jalankan query
    mysqli_query($con, $query);

    // Setelah simpan, kembalikan pengguna ke halaman utama panen
    header("Location: index.php");
    exit();
    
}
?>