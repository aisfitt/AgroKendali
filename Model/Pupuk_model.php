<?php
// Model/Pupuk_model.php

function getAllJenisPupuk($connection) {
    $query = "SELECT * FROM pupuk ORDER BY nama ASC";
    $result = mysqli_query($connection, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

// Fungsi ini sekarang akan berjalan dengan benar
function getAllTransaksiPupuk($connection) {
    $query = "SELECT tp.*, p.nama AS nama_pupuk, a.nama AS nama_area 
              FROM transaksi_pupuk tp
              JOIN pupuk p ON tp.pupuk_id = p.id
              JOIN areas a ON tp.area_id = a.id
              ORDER BY tp.created_at DESC";
    $result = mysqli_query($connection, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function tambahJenisPupuk($connection, $data) {
    $nama = mysqli_real_escape_string($connection, $data['nama_pupuk']);
    $deskripsi = mysqli_real_escape_string($connection, $data['deskripsi']);
    $query = "INSERT INTO pupuk (nama, deskripsi) VALUES ('$nama', '$deskripsi')";
    return mysqli_query($connection, $query);
}

// Pastikan fungsi tambah Anda menyertakan area_id
function tambahTransaksiPupuk($connection, $data) {
    $query = "INSERT INTO transaksi_pupuk (pupuk_id, jumlah, area_id) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($connection, $query);
    // 'i' untuk integer, 'd' untuk double/float
    mysqli_stmt_bind_param($stmt, "idi", $data['pupuk_id'], $data['jumlah'], $data['area_id']);
    return mysqli_stmt_execute($stmt);
}
?>