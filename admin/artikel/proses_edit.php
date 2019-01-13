<?php
session_start();

if (isset($_SESSION['email'])) {
	
	include '../../config/koneksi.php';
	
	$ID 			= $_POST['id'];
	$judul			= $_POST['judul'];
	$kategori		= $_POST['kategori'];
	$isi			= $_POST['isi'];
	$status			= $_POST['status'];

	
	$penulis		= $_SESSION['id'];
	$date			= date('Y-m-d');
	$jam			= date('H:i')." WIB";
	$gambar			= "";

	$sql = "UPDATE artikel SET
			judul 		= '$judul',
			isi 		= '$isi',
			user_id		= '$penulis',
			gambar		= '$gambar',
			status 		= '$status',
			kategori_id	= '$kategori',
			jam 		= '$jam',
			rilis 		= '$date'
			WHERE id = '$ID'";
	mysqli_query($konek,$sql);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>
