<?php
// Model/Panen_model.php

function getAllPanen($connection) {
    // Menggunakan JOIN untuk mengambil nama area dari tabel 'areas'
    $query = "SELECT panen.*, areas.nama as nama_area 
              FROM panen 
              LEFT JOIN areas ON panen.area_id = areas.id
              ORDER BY panen.tanggal DESC";
    $result = mysqli_query($connection, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function tambahPanen($connection, $data) {
    // Query ini sudah benar karena TIDAK menyertakan kolom 'id'.
    // Database akan mengisinya secara otomatis berkat AUTO_INCREMENT.
    $query = "INSERT INTO panen (tanggal, area_id, berat, jumlah_tandan) VALUES (?, ?, ?, ?)";
    
    $stmt = mysqli_prepare($connection, $query);
    
    mysqli_stmt_bind_param(
        $stmt, 
        "sidi", // s(string), i(integer), d(double), i(integer)
        $data['tanggal'], 
        $data['area_id'], 
        $data['berat'], 
        $data['jumlah_tandan']
    );
    
    return mysqli_stmt_execute($stmt);
}

function sumTotalPanen($connection) {
    $query = "SELECT SUM(berat) as total_berat FROM panen";
    $result = mysqli_query($connection, $query);
    return mysqli_fetch_assoc($result)['total_berat'];
}
?>