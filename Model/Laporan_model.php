<?php
// Model/Laporan_model.php

/**
 * Mengambil semua data laporan dari database,
 * dan menggabungkannya dengan nama area dari tabel 'areas'.
 */
function getAllLaporan($connection) {
    $query = "SELECT l.*, a.nama AS nama_area 
              FROM laporan l
              LEFT JOIN areas a ON l.area_id = a.id
              ORDER BY l.created_at DESC";
              
    $result = mysqli_query($connection, $query);
    
    if ($result) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        // Jika ada error, tampilkan untuk debugging
        error_log("Query Gagal: " . mysqli_error($connection));
        return [];
    }
}

// Nanti Anda bisa tambahkan fungsi lain seperti tambahLaporan, hapusLaporan, dll.
?>