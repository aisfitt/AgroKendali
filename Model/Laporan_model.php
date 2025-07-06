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
?>