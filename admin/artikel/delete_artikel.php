<?php
include '../../config/koneksi.php';

$ID    		= $_GET['id'];
$ambil		= "SELECT * FROM artikel where id='$ID'";
$hasil   	= mysqli_query($konek, $ambil);
$row	   	= mysqli_fetch_assoc($hasil);
$hapus		= $row['gambar'];

$del 		= "../../gambar/artikel-img/".$hapus;

if (unlink($del)) {
	$sql = "DELETE FROM artikel WHERE id='$ID'";
	mysqli_query($konek,$sql);
	header('location:index.php?');	
} else {
	echo "You have an error!";	
}
?>