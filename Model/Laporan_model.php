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
$query = mysqli_query($con, "SELECT * FROM laporan");
while ($m = mysqli_fetch_array($query))
{

print "Kelembapan: ".$m['kelembapan'].", ph: ".$m['ph'].", area: ".$m['area_id'].", created: ".$m['created_at']."<br>";

}
?>