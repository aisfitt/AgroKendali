<?php
// Pastikan menggunakan instruksi untuk mengkoneksikan ke database
$con = mysqli_connect("localhost","root","","agrokendali");
// Mengecek apakah koneksi gagal?
if (mysqli_connect_errno($con))
{
echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
}
// QueryArray dimulai
// pupuk adalah nama tabel
$query = mysqli_query($con, "SELECT * FROM pupuk");
while ($m = mysqli_fetch_array($query))
{

print "Jenis Pupuk: ".$m['nama'].", Deskripsi: ".$m['desciption']."<br>";

}
?>