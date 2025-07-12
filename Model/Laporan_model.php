<?php
// Models/Laporan_model.php

function getAllLaporan($connection) {
    $query = "SELECT l.*, a.nama AS nama_kebun 
              FROM laporan l 
              JOIN areas a ON l.area_id = a.id 
              ORDER BY l.created_at DESC";
    $result = mysqli_query($connection, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

// FUNGSI BARU UNTUK MENYIMPAN LAPORAN
function tambahLaporan($connection, $data) {
    $query = "INSERT INTO laporan (area_id, kelembapan, ph) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($connection, $query);
    // Tipe data: i (integer), d (double/desimal), d (double/desimal)
    mysqli_stmt_bind_param(
        $stmt, 
        "idd", 
        $data['area_id'], 
        $data['kelembapan'], 
        $data['ph']
    );
    return mysqli_stmt_execute($stmt);
}

// FUNGSI UNTUK MENGHAPUS LAPORAN
function hapusLaporan($connection, $id) {
    $query = "DELETE FROM laporan WHERE id = ?";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    return mysqli_stmt_execute($stmt);
}

function countLaporan($connection) {
    $query = "SELECT COUNT(id) as total FROM laporan";
    $result = mysqli_query($connection, $query);
    return mysqli_fetch_assoc($result)['total'];
}
?>