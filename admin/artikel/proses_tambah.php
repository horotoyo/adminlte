<?php
session_start();
include '../../config/koneksi.php';

$judul				= $_POST['judul'];
$kategori			= $_POST['kategori'];
$isi				= $_POST['isi'];
$penulis			= $_SESSION['id'];
$date				= date('Y-m-d');
$jam				= date('H:i')." WIB";
$status				= $_POST['status'];

$nama_gambar		= $_FILES['gambar']['name'];
$tmp_name			= $_FILES['gambar']['tmp_name'];

$pindah				= substr($nama_gambar, -4);
$acak				= rand(11111, 99999);
$ubah				= str_replace($pindah, $acak.$pindah, $pindah);
move_uploaded_file($tmp_name, "../../gambar/artikel-img/".$ubah);
$addto				= "http://localhost/adminlte/gambar/artikel-img/".$ubah;


$sql = "INSERT INTO artikel (judul, isi, user_id, gambar, status, kategori_id, jam, rilis)
		VALUES ('$judul', '$isi', '$penulis', '$addto','$status','$kategori', '$jam', '$date')";
mysqli_query($konek,$sql);
header('location:index.php');

?>