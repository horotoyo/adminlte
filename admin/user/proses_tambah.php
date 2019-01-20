<?php
session_start();
include '../../config/koneksi.php';

$nama				= $_POST['nama'];
$email				= $_POST['email'];
$password			= $_POST['password'];

$nama_gambar		= $_FILES['gambar']['name'];
$tmp_name			= $_FILES['gambar']['tmp_name'];

$acak				= rand(1111111, 9999999);
$ubah				= str_replace($nama_gambar, $acak.".jpg", $nama_gambar);

move_uploaded_file($tmp_name, "../../gambar/user-img/".$ubah);

$sql = "INSERT INTO user (name, email, password, photo)
		VALUES ('$nama', '$email', '$password', '$ubah')";
mysqli_query($konek,$sql);
header('location:index.php');

?>