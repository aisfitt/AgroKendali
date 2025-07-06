<?php
// Model/PupukModel.php

$con = mysqli_connect("localhost", "root", "", "agrokendali");

if (mysqli_connect_errno()) {
    echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
}

// Mengambil semua data dari tabel 'pupuk'
$query = mysqli_query($con, "SELECT * FROM pupuk ORDER BY nama ASC");

echo "<h3>Data Jenis Pupuk</h3>";
while ($m = mysqli_fetch_assoc($query)) {
    echo "<b>Nama Pupuk:</b> " . htmlspecialchars($m['nama']) . 
         ", <b>Deskripsi:</b> " . htmlspecialchars($m['deskripsi']) . 
         "<br>";
}
?>