<?php
require_once 'auth_check.php';
session_unset();
session_destroy();
header("Location: index.php"); // Kembali ke beranda
exit();
?>