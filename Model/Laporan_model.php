<?php
// Models/Laporan_model.php

function getAllLaporan($connection) {
    // Query untuk join dengan tabel kebun agar bisa menampilkan nama kebun
    $query = "SELECT l.*, a.nama AS nama_kebun FROM laporan l 
              JOIN areas a ON l.area_id = a.id 
              ORDER BY l.created_at DESC";
    $result = mysqli_query($connection, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

// FUNGSI BARU: Untuk mengambil nama kebun di form
function getAllKebunForDropdown($connection) {
    $query = "SELECT id, nama FROM areas ORDER BY nama ASC";
    $result = mysqli_query($connection, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function tambahLaporan($connection, $data) {
    $query = "INSERT INTO laporan (area_id, kelembapan, ph) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param(
        $stmt, 
        "idd", // i: integer, d: double/decimal
        $data['area_id'], 
        $data['kelembapan'], 
        $data['ph']
    );
    return mysqli_stmt_execute($stmt);
}
?>