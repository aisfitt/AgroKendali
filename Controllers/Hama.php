<?php
// Controllers/HamaController.php
require_once '../Model/KoneksiDB.php';
require_once '../Model/HamaModel.php';

function showHama() {
    global $con; 
    $dataHama = getAllHama($con); // Ambil data hama dari model

    // Menampilkan view dengan data hama
    include 'Views/Layouts/header.php';
    include 'Views/hama.php';  // Ganti dengan file view hama kamu
}
?>
