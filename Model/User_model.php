<?php

function findUserByEmail($con, $email) {
    $stmt = mysqli_prepare($con, "SELECT id, nama, password FROM users WHERE email = ?");
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) === 1) {
        return mysqli_fetch_assoc($result);
    }
    return null;
}

function createUser($con, $nama, $email, $hashed_password) {
    $stmt = mysqli_prepare($con, "INSERT INTO users (nama, email, password) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sss", $nama, $email, $hashed_password);
    return mysqli_stmt_execute($stmt);
}