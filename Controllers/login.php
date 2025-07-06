// ... setelah verifikasi password berhasil
session_start();
$_SESSION['user_id'] = $id_user_dari_database; // Ganti dengan ID user
$_SESSION['user_nama'] = $nama_user_dari_database; // Ganti dengan nama user

header("Location: ../../index.php"); // Arahkan ke beranda setelah login
exit();