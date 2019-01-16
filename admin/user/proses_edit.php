<?php
session_start();
include '../../config/koneksi.php';

$ID 				= $_POST['id'];
$nama				= $_POST['nama'];
$email				= $_POST['email'];
$password			= $_POST['password'];

// $nama_gambar		= $_FILES['gambar']['name'];
// $tmp_name			= $_FILES['gambar']['tmp_name'];

// $acak				= rand(11111, 99999);
// $ubah				= str_replace($nama_gambar, $acak.".jpg", $nama_gambar);

// move_uploaded_file($tmp_name, "../../gambar/user-img/".$ubah);

// $addto				= "http://localhost/adminlte/gambar/user-img/".$ubah;

$sql = "UPDATE user SET
			name 		= '$nama',
			email 		= '$email',
			password	= '$password'
			WHERE id 	= '$ID'";
mysqli_query($konek,$sql);
header('location:index.php');
?>