<?php
session_start();
include '../../config/koneksi.php';

$nama				= $_POST['nama'];
$email				= $_POST['email'];
$password			= md5($_POST['password']);
$type 				= $_POST['type'];


//Input files gambar
$allowed 			=  array('jpeg','png' ,'jpg');
$nama_gambar		= $_FILES['gambar']['name'];
$tmp_name			= $_FILES['gambar']['tmp_name'];
$size_gambar		= $_FILES['gambar']['size'];
$ext 				= pathinfo($nama_gambar, PATHINFO_EXTENSION);


$acak				= rand(1111111, 9999999);
$ubah				= str_replace($nama_gambar, $acak.".jpg", $nama_gambar);

move_uploaded_file($tmp_name, "../../gambar/user-img/".$ubah);

$sql = "INSERT INTO user (name, email, password, photo, role_id)
		VALUES ('$nama', '$email', '$password', '$ubah', $type)";
mysqli_query($konek,$sql);
header('location:index.php');

?>