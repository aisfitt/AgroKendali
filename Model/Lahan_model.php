<?php
// Model/Lahan_model.php

/**
 * Mengambil semua data kebun dari database.
 * @param mysqli $connection Objek koneksi database.
 * @return array Daftar semua kebun.
 */
function getAllKebun($connection) {
    $query = "SELECT * FROM areas ORDER BY nama ASC";
    $result = mysqli_query($connection, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

/**
 * Mengambil satu data kebun berdasarkan ID.
 * @param mysqli $connection Objek koneksi database.
 * @param int $id ID kebun yang dicari.
 * @return array|null Data kebun atau null jika tidak ditemukan.
 */
function getKebunById($connection, $id) {
    $id = (int)$id;
    $query = "SELECT * FROM areas WHERE id = $id";
    $result = mysqli_query($connection, $query);
    return mysqli_fetch_assoc($result);
}

/**
 * Menambahkan data kebun baru ke database.
 * @param mysqli $connection Objek koneksi database.
 * @param array $data Data dari form, contoh: ['nama_kebun' => ..., 'luas_lahan' => ...]
 * @return bool True jika berhasil, false jika gagal.
 */
function tambahKebun($connection, $data) {
    // Ambil data dari array dan lindungi dari SQL Injection
    $nama = mysqli_real_escape_string($connection, $data['nama_kebun']);
    $size = mysqli_real_escape_string($connection, $data['luas_lahan']);
    $jumlah_pohon = (int)$data['jumlah_pohon'];
    $tipe_tanah = mysqli_real_escape_string($connection, $data['tipe_tanah']);

    $query = "INSERT INTO areas (nama, size, jumlah_pohon, tipe_tanah) 
              VALUES ('$nama', '$size', $jumlah_pohon, '$tipe_tanah')";
    
    return mysqli_query($connection, $query);
}

/**
 * Memperbarui data kebun yang sudah ada.
 * @param mysqli $connection Objek koneksi database.
 * @param int $id ID kebun yang akan diperbarui.
 * @param array $data Data baru dari form.
 * @return bool True jika berhasil, false jika gagal.
 */
function updateKebun($connection, $id, $data) {
    $id = (int)$id;
    $nama = mysqli_real_escape_string($connection, $data['nama_kebun']);
    $size = mysqli_real_escape_string($connection, $data['luas_lahan']);
    $jumlah_pohon = (int)$data['jumlah_pohon'];
    $tipe_tanah = mysqli_real_escape_string($connection, $data['tipe_tanah']);

    $query = "UPDATE areas SET 
                nama = '$nama', 
                size = '$size', 
                jumlah_pohon = $jumlah_pohon, 
                tipe_tanah = '$tipe_tanah' 
              WHERE id = $id";
              
    return mysqli_query($connection, $query);
}

/**
 * Menghapus data kebun berdasarkan ID.
 * @param mysqli $connection Objek koneksi database.
 * @param int $id ID kebun yang akan dihapus.
 * @return bool True jika berhasil, false jika gagal.
 */
function hapusKebun($connection, $id) {
    $id = (int)$id;
    $query = "DELETE FROM areas WHERE id = $id";
    return mysqli_query($connection, $query);
}
?>