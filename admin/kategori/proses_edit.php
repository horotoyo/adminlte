<?php
session_start();

if (isset($_SESSION['email'])) {
	
	include '../../config/koneksi.php';
	
	$ID 			= $_POST['id'];
	$kategori		= $_POST['kategori'];

	$sql = "UPDATE kategori SET nama = '$kategori' WHERE id = '$ID'";
	mysqli_query($konek,$sql);
	header('location:index.php');
} else {
	header('location: ../../index.php');
}
?>
