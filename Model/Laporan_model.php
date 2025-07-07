<?php
// Model/LaporanModel.php

$con = mysqli_connect("localhost", "root", "", "agrokendali");

if (mysqli_connect_errno()) {
    echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
}

// Mengambil semua data dari tabel 'laporan'
$query = mysqli_query($con, "SELECT * FROM laporan");

echo "<h3>Data Laporan Kondisi</h3>";
while ($m = mysqli_fetch_assoc($query)) {
    echo "<b>Kelembapan:</b> " . htmlspecialchars($m['kelembapan']) . 
         ", <b>pH:</b> " . htmlspecialchars($m['ph']) . 
         ", <b>Area ID:</b> " . htmlspecialchars($m['area_id']) . 
         ", <b>Created At:</b> " . htmlspecialchars($m['created_at']) . 
         "<br>";
}
function getAllLaporan($connection) {
    $query = "SELECT * FROM laporan";  // Query untuk mengambil semua data laporan
    $result = mysqli_query($connection, $query);
    
    // Mengecek apakah query berhasil
    if ($result) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);  // Mengembalikan data dalam bentuk array asosiatif
    } else {
        return [];  // Mengembalikan array kosong jika query gagal
    }
}
?>