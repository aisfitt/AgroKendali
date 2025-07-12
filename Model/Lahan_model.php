<?php
// Models/Lahan_model.php

function getAllKebun($connection) {
    $query = "SELECT * FROM areas ORDER BY nama ASC";
    $result = mysqli_query($connection, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function tambahKebun($connection, $data) {
    $query = "INSERT INTO areas (nama, size, jumlah_pohon, tipe_tanah, alamat_kebun) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "ssiss", $data['nama_kebun'], $data['luas_lahan'], $data['jumlah_pohon'], $data['tipe_tanah'], $data['alamat_kebun']);
    return mysqli_stmt_execute($stmt);
}


function hapusKebun($connection, $id) {
    // Hapus panen dulu
    $deletePanen = mysqli_prepare($connection, "DELETE FROM panen WHERE area_id = ?");
    mysqli_stmt_bind_param($deletePanen, "i", $id);
    mysqli_stmt_execute($deletePanen);
    mysqli_stmt_close($deletePanen);

    // Lanjut hapus kebun
    $query = "DELETE FROM areas WHERE id = ?";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    return mysqli_stmt_execute($stmt);
}


function getKebunById($con, $id) {
    $stmt = mysqli_prepare($con, "SELECT * FROM areas WHERE id = ?");
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    return mysqli_fetch_assoc($result);
}

function countKebun($connection) {
    $query = "SELECT COUNT(id) as total FROM areas";
    $result = mysqli_query($connection, $query);
    return mysqli_fetch_assoc($result)['total'];
}
?>