<?php
// Models/PanenModel.php

/**
 * Mengambil semua data panen, diurutkan dari yang terbaru.
 */
function getAllPanen($connection) {
    $query = "SELECT panen.*, areas.nama as nama_area 
              FROM panen 
              LEFT JOIN areas ON panen.area_id = areas.id
              ORDER BY panen.tanggal DESC";
    $result = mysqli_query($connection, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

/**
 * Menambah data panen baru.
 */
function tambahPanen($connection, $data) {
    $tanggal = mysqli_real_escape_string($connection, $data['tanggal']);
    $area_id = (int)$data['area_id'];
    $berat = (float)$data['berat']; // float untuk desimal
    $jumlah_tandan = (int)$data['jumlah_tandan'];

    $query = "INSERT INTO panen (tanggal, area_id, berat, jumlah_tandan) 
              VALUES ('$tanggal', $area_id, $berat, $jumlah_tandan)";
              
    return mysqli_query($connection, $query);
}

/**
 * Menghapus data panen berdasarkan ID.
 */
function hapusPanen($connection, $id) {
    $id = (int)$id;
    $query = "DELETE FROM panen WHERE id = $id";
    return mysqli_query($connection, $query);
}

// Anda bisa tambahkan fungsi updatePanen di sini
?>