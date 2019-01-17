<?php
include '../../config/koneksi.php';

$ID    		= $_GET['id'];
$ambil		= "SELECT * FROM user where id='$ID'";
$hasil   	= mysqli_query($konek, $ambil);
$row	   	= mysqli_fetch_assoc($hasil);
$hapus		= $row['photo'];

$awal		= substr($hapus, 42);

$del 		= "../../gambar/user-img/".$awal;

if (unlink($del)) {
	$sql = "DELETE FROM user WHERE id='$ID'";
	mysqli_query($konek,$sql);
	header('location:index.php?');	
} else {
	echo "You have an error!";	
}
?>