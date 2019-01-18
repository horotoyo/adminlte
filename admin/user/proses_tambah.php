<?php
session_start();
include '../../config/koneksi.php';

$nama				= $_POST['nama'];
$email				= $_POST['email'];
$password			= $_POST['password'];

$nama_gambar		= $_FILES['gambar']['name'];
$tmp_name			= $_FILES['gambar']['tmp_name'];


// $pindah				= substr($nama_gambar, -4);
$acak				= rand(1111111, 9999999);
$ubah				= str_replace($nama_gambar, $acak.".jpg", $nama_gambar);

// $acak				= rand(11111, 99999);
// $ubah				= str_replace($nama_gambar, $acak.".jpg", $nama_gambar);

move_uploaded_file($tmp_name, "../../gambar/user-img/".$ubah);

$addto				= "http://localhost/adminlte/gambar/user-img/".$ubah;

$sql = "INSERT INTO user (name, email, password, photo)
		VALUES ('$nama', '$email', '$password', '$addto')";
mysqli_query($konek,$sql);
header('location:index.php');

?>