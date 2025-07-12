<?php
// Models/Lahan_model.php

/**
 * Mengambil semua data kebun.
 */
function getAllKebun($connection) {
    $query = "SELECT * FROM areas ORDER BY nama ASC";
    $result = mysqli_query($connection, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

/**
 * Mengambil satu data kebun berdasarkan ID.
 */
function getKebunById($connection, $id) {
    $query = "SELECT * FROM areas WHERE id = ?";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    return mysqli_fetch_assoc($result);
}

/**
 * Menambah data kebun baru ke database.
 */
function tambahKebun($connection, $data) {
    // Menambahkan 'alamat_kebun' ke dalam query
    $query = "INSERT INTO areas (nama, size, jumlah_pohon, tipe_tanah, alamat_kebun) 
              VALUES (?, ?, ?, ?, ?)";
    
    $stmt = mysqli_prepare($connection, $query);
    
    // "s" untuk string, "i" untuk integer
    // Sesuaikan tipe data: s, s, i, s, s
    mysqli_stmt_bind_param(
        $stmt, 
        "ssiss", 
        $data['nama_kebun'], 
        $data['luas_lahan'], 
        $data['jumlah_pohon'], 
        $data['tipe_tanah'],
        $data['alamat_kebun'] // Menambahkan variabel alamat
    );
    
    return mysqli_stmt_execute($stmt);
}

/**
 * Memperbarui data kebun yang ada.
 */
function updateKebun($connection, $id, $data) {
    $query = "UPDATE areas SET 
                nama = ?, 
                size = ?, 
                jumlah_pohon = ?, 
                tipe_tanah = ?,
                alamat_kebun = ?
              WHERE id = ?";
              
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param(
        $stmt, 
        "ssissi", 
        $data['nama_kebun'], 
        $data['luas_lahan'], 
        $data['jumlah_pohon'], 
        $data['tipe_tanah'],
        $data['alamat_kebun'],
        $id
    );
    return mysqli_stmt_execute($stmt);
}

/**
 * Menghapus data kebun berdasarkan ID.
 */
function hapusKebun($connection, $id) {
    $query = "DELETE FROM areas WHERE id = ?";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    return mysqli_stmt_execute($stmt);
}
?>