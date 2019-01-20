<?php
session_start();

if (isset($_SESSION['email'])) {
	
	include '../../config/koneksi.php';
	
	$ID 			= $_POST['id'];
	$judul			= $_POST['judul'];
	$kategori		= $_POST['kategori'];
	$isi			= $_POST['isi'];
	$status			= $_POST['status'];

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

	$penulis		= $_SESSION['id'];
	$date			= date('Y-m-d');
	$jam			= date('H:i')." WIB";
	$gambar			= "";

	$sql1 = "UPDATE artikel SET
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
