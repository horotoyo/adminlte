<?php
session_start();
include '../../config/koneksi.php';

$ID 				= $_POST['id'];
$nama				= $_POST['nama'];
$email				= $_POST['email'];
$password			= $_POST['password'];

//insert gambar
$regambar			= $_POST['regambar'];
$nama_gambar		= $_FILES['gambar']['name'];
$tmp_name			= $_FILES['gambar']['tmp_name'];

//move and rename
$pindah				= substr($nama_gambar, -4);
$acak				= rand(11111, 99999);
$ubah				= str_replace($pindah, $acak.$pindah, $pindah);
move_uploaded_file($tmp_name, "../../gambar/user-img/".$ubah);

//insert to database
$addto				= "http://localhost/adminlte/gambar/user-img/".$ubah;

$sql1 = "UPDATE user SET
			name 		= '$nama',
			email 		= '$email',
			password	= '$password',
			photo		= '$regambar'
			WHERE id 	= '$ID'"; //jika kosong

$ambil		= "SELECT * FROM user where id='$ID'";
$hasil   	= mysqli_query($konek, $ambil);
$row	   	= mysqli_fetch_assoc($hasil);
$hapus		= $row['photo'];
$awal		= substr($hapus, 42);
$del 		= "../../gambar/user-img/".$awal;

$sql2 = "UPDATE user SET
			name 		= '$nama',
			email 		= '$email',
			password	= '$password',
			photo		= '$hapus'
			WHERE id 	= '$ID'"; //jika diisi
// mysqli_query($konek,$sql);
// header('location:index.php');

if (!isset($nama_gambar)) {
	mysqli_query($konek,$sql1);
	header('location:index.php');
} else {
	mysqli_query($konek,$sql2);
	unlink($del);
	header('location:index.php');
}

?>