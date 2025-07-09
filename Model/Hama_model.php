<?php
// Models/Hama_model.php

function getAllHama($connection) {
    $query = "SELECT id, judul, content, image, penanganan FROM hama ORDER BY judul ASC";
    $result = mysqli_query($connection, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getHamaById($connection, $id) {
    $query = "SELECT * FROM hama WHERE id = ?";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    return mysqli_fetch_assoc($result);
}

function tambahHama($connection, $data, $gambarPath) {
    $query = "INSERT INTO hama (judul, content, image, penanganan) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param(
        $stmt, 
        "ssss",
        $data['judul'],
        $data['content'],
        $gambarPath,
        $data['penanganan']
    );
    return mysqli_stmt_execute($stmt);
}

function hapusHama($connection, $id) {
    $hama = getHamaById($connection, $id);
    if ($hama && !empty($hama['image'])) {
        if (file_exists('../' . $hama['image'])) {
            unlink('../' . $hama['image']);
        }
    }
    $query = "DELETE FROM hama WHERE id = ?";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    return mysqli_stmt_execute($stmt);
}
?>