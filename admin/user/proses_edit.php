<?php
session_start();
include '../../config/koneksi.php';

$ID 				= $_POST['id'];
$nama				= $_POST['nama'];
$email				= $_POST['email'];
$password			= $_POST['password'];

//insert gambar
// $regambar			= $_POST['regambar'];
$nama_gambar		= $_FILES['gambar']['name'];
$tmp_name			= $_FILES['gambar']['tmp_name'];

//move and rename
$acak				= rand(1111111, 9999999);
$ubah				= str_replace($nama_gambar, $acak.".jpg", $nama_gambar);
// move_uploaded_file($tmp_name, "../../gambar/user-img/".$ubah);
$addto				= "http://localhost/adminlte/gambar/user-img/".$ubah;

// echo $ubah."<br>";
// echo $addto."<br>";
// echo $tmp_name;

// exit();


//Jika tidak mengubah gambar
$sql1	= "UPDATE user SET 
			name  		= '$nama',
			email 		= '$email',
			password 	= '$password'
			WHERE id 	= '$ID'";

//Ambil Data
$ambil		= "SELECT * FROM user where id='$ID'";
$hasil   	= mysqli_query($konek, $ambil);
$row	   	= mysqli_fetch_assoc($hasil);
$hapus		= $row['photo'];
$awal		= substr($hapus, 42);
$del 		= "../../gambar/user-img/".$awal;

//Jika mengubah gambar
$sql2	= "UPDATE user SET 
			name 		= '$nama',
			email 		= '$email',
			password 	= '$password',
			photo		= '$addto'
			WHERE id 	= '$ID'";

// echo $hapus."<br>";
// echo $del;


if (unlink($del)) {
	mysqli_query($konek,$sql2);
	header('location:index.php');
} else {
	mysqli_query($konek,$sql1);
	header('location:index.php');
}

// if (isset($nama_gambar)) {
// 	mysqli_query($konek,$sql1);
// 	header('location:index.php');
// } else {
// 	unlink($del);
// 	mysqli_query($konek,$sql2);
// 	header('location:index.php');
// }

?>