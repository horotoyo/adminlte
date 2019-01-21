<?php
session_start();
include '../../config/koneksi.php';

$nama				= $_POST['nama'];
$email				= $_POST['email'];
$password			= $_POST['password'];
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

$sql = "INSERT INTO user (name, email, password, photo)
		VALUES ('$nama', '$email', '$password', '$ubah')";
mysqli_query($konek,$sql);
header('location:index.php');

// function ext() {
//   alert("Format file anda tidak sesuai!");
// }

// if ((in_array($ext, $allowed)) && ($size_gambar < 10000000)) {
// 	$acak				= rand(1111111, 9999999);
// 	$ubah				= str_replace($nama_gambar, $acak.".jpg", $nama_gambar);

// 	move_uploaded_file($tmp_name, "../../gambar/user-img/".$ubah);

// 	$sql = "INSERT INTO user (name, email, password, photo, role_id)
// 			VALUES ('$nama', '$email', '$password', '$ubah', '$type')";
// 	mysqli_query($konek,$sql);
// 	header('location:index.php');	
// } else {
// 	echo "
// 			<script type='text/javascript'>
// 				alert('file extention not allowed');
// 				window.location.href='create.php?file_type_not_allowed_error';
// 			</script>
// 		";
// }

?>