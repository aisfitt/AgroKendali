<?php
// Pastikan menggunakan instruksi untuk mengkoneksikan ke database
$con = mysqli_connect("localhost","root",""," WPWdb ");
// Mengecek apakah koneksi gagal?
if (mysqli_connect_errno($con))
{
echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
}
// QueryArray dimulai
// mahasiswa adalah nama tabel
$query = mysqli_query($con, "SELECT * FROM hama");
while ($m = mysqli_fetch_array($query))
{

print "judul: ".$m['judul'].", content: ".$m['content'].", image: ".$m['image'].", is_published: ".$m['is_published'].", created_at: ".$m['created_at']."<br>";

}
?>