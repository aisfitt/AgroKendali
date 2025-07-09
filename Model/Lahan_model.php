<?php

/**
 * Fungsi untuk mengambil semua kebun
 * @param mysqli $connection Koneksi database
 * @return array Data kebun dalam bentuk array asosiatif
 */
function getAllKebun($connection) {
    $query = "SELECT * FROM areas ORDER BY nama ASC";
    $result = mysqli_query($connection, $query);
    
    if ($result) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);  // Mengembalikan data sebagai array asosiatif
    } else {
        return [];  // Kembalikan array kosong jika query gagal
    }
}

/**
 * Fungsi untuk mengambil kebun berdasarkan ID
 * @param mysqli $connection Koneksi database
 * @param int $id ID kebun
 * @return array|null Data kebun jika ditemukan, null jika tidak ditemukan
 */
function getKebunById($connection, $id) {
    $id = (int)$id;  // Pastikan ID adalah integer untuk mencegah SQL Injection
    $query = "SELECT * FROM areas WHERE id = $id";
    $result = mysqli_query($connection, $query);
    
    if ($result) {
        return mysqli_fetch_assoc($result);  // Mengembalikan data kebun
    } else {
        return null;  // Jika tidak ditemukan, kembalikan null
    }
}

/**
 * Fungsi untuk menghapus kebun berdasarkan ID
 * @param mysqli $connection Koneksi database
 * @param int $id ID kebun yang akan dihapus
 * @return bool True jika berhasil menghapus, false jika gagal
 */
function hapusKebun($connection, $id) {
    $id = (int)$id;  // Pastikan ID adalah integer
    $query = "DELETE FROM areas WHERE id = $id";
    return mysqli_query($connection, $query);  // Eksekusi query dan kembalikan hasilnya
}

/**
 * Fungsi untuk menambah kebun baru
 * @param mysqli $connection Koneksi database
 * @param array $data Data kebun yang akan dimasukkan (nama, luas, jumlah pohon, tipe tanah)
 * @return bool True jika berhasil, false jika gagal
 */
function tambahKebun($connection, $data) {
    // Sanitasi input untuk mencegah SQL Injection
    $nama = mysqli_real_escape_string($connection, $data['nama_kebun']);
    $luas = mysqli_real_escape_string($connection, $data['luas_lahan']);
    $jumlah_pohon = (int)$data['jumlah_pohon'];  // Pastikan ini integer
    $tipe_tanah = mysqli_real_escape_string($connection, $data['tipe_tanah']);
    $alamat_kebun = mysqli_real_escape_string($connection, $data['alamat_kebun']);

    // Query untuk memasukkan data kebun
    $query = "INSERT INTO areas (nama, size, jumlah_pohon, tipe_tanah, alamat_kebun) 
              VALUES ('$nama', '$luas', $jumlah_pohon, '$tipe_tanah', '$alamat_kebun')";
    
    // Jalankan query dan kembalikan hasilnya
    return mysqli_query($connection, $query);
}
?>
