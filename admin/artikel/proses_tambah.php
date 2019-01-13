<?php
session_start();
include '../../config/koneksi.php';

$judul		= $_POST['judul'];
$kategori	= $_POST['kategori'];
$isi		= $_POST['isi'];
$penulis	= $_SESSION['id'];
$date		= date('Y-m-d');
$jam		= date('H:i')." WIB";
$status		= $_POST['status'];
$gambar		= "";

$sql = "INSERT INTO artikel (judul, isi, user_id, gambar, status, kategori_id, jam, rilis)
		VALUES ('$judul', '$isi', '$penulis', '$gambar','$status','$kategori', '$jam', '$date')";
mysqli_query($konek,$sql);
header('location:index.php');

?>