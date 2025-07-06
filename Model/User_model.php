<?php
// Model/UserModel.php

$con = mysqli_connect("localhost", "root", "", "agrokendali");

if (mysqli_connect_errno()) {
    echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
}

// Mengambil semua data dari tabel 'users'
$query = mysqli_query($con, "SELECT * FROM users");

echo "<h3>Data Pengguna</h3>";
while ($m = mysqli_fetch_assoc($query)) {
    echo "<b>Nama:</b> " . htmlspecialchars($m['nama']) . 
         ", <b>Username:</b> " . htmlspecialchars($m['username']) . 
         ", <b>Email:</b> " . htmlspecialchars($m['email']) .
         ", <b>Role:</b> " . htmlspecialchars($m['role']) .
         "<br>";
}
?>