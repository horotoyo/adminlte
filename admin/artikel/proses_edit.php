<?php
session_start();
	
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

	//insert gambar
	$nama_gambar		= $_FILES['gambar']['name'];
	$tmp_name			= $_FILES['gambar']['tmp_name'];

	//move and rename
	$acak				= rand(1111111, 9999999);
	$ubah				= str_replace($nama_gambar, $acak.".jpg", $nama_gambar);
	move_uploaded_file($tmp_name, "../../gambar/artikel-img/".$ubah);

	//Jika tidak merubah gambar
	$sql1 = "UPDATE artikel SET
			judul 		= '$judul',
			isi 		= '$isi',
			status 		= '$status',
			kategori_id	= '$kategori',
			jam 		= '$jam',
			rilis 		= '$date'
			WHERE id = '$ID'";

	//Jika merubah gambar
	$sql2 = "UPDATE artikel SET
			judul 		= '$judul',
			isi 		= '$isi',
			gambar		= '$ubah',
			status 		= '$status',
			kategori_id	= '$kategori',
			jam 		= '$jam',
			rilis 		= '$date'
			WHERE id = '$ID'";

	//Ambil Data
	$ambil		= "SELECT * FROM artikel where id='$ID'";
	$hasil   	= mysqli_query($konek, $ambil);
	$row	   	= mysqli_fetch_assoc($hasil);
	$hapus		= $row['gambar'];
	$del 		= "../../gambar/artikel-img/".$hapus;

	if (empty($nama_gambar)) {	
		mysqli_query($konek,$sql1);
		header('location:index.php');
	} else {
		unlink($del);
		mysqli_query($konek,$sql2);
		header('location:index.php');
	}
?>
