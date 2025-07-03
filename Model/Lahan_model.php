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

print "Nama: ".$m['nama'].", ukuran: ".$m['size'].", jumlah: ".$m['jumlah_pohon'].", tipe tanah: ".$m['tipe_tanah']."<br>";

}
?>