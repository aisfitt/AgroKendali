<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama_kebun'];
    $luas = $_POST['luas'];
    $lokasi = $_POST['lokasi'];

    // Proses simpan ke database
    // include '../../Config/database.php';
    // $stmt = $pdo->prepare("INSERT INTO kebun (nama_kebun, luas, lokasi) VALUES (?, ?, ?)");
    // $stmt->execute([$nama, $luas, $lokasi]);

    header("Location: ../Views/Kebun/index.php");
    exit();
}
?>
