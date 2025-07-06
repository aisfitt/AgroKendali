<?php
// Model/HamaModel.php

$con = mysqli_connect("localhost", "root", "", "agrokendali");

if (mysqli_connect_errno()) {
    echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
}

// Mengambil semua data dari tabel 'hama'
$query = mysqli_query($con, "SELECT * FROM hama");

echo "<h3>Data Hama</h3>";
while ($m = mysqli_fetch_assoc($query)) {
    echo "<b>Judul:</b> " . htmlspecialchars($m['judul']) . 
         ", <b>Content:</b> " . htmlspecialchars($m['content']) . 
         ", <b>Image:</b> " . htmlspecialchars($m['image']) . 
         "<br>";
}
?>