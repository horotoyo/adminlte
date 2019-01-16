<?php
include '../config/koneksi.php';

$nama			= "ahiofh.jpg";
$pindah			= substr($nama, -4);
$acak			= rand(11111, 99999);
$ubah			= str_replace($pindah, $acak.$pindah, $pindah);

echo $ubah;


// $ID    		= $_GET['id'];
// $ambil		= "SELECT * FROM user where id='$ID'";
// $hasil   	= mysqli_query($konek, $ambil);
// $row	   	= mysqli_fetch_assoc($hasil);
// $hapus		= $row['photo'];

// $del 		= $hapus;

// if (!unlink($del)) {
// 	echo "You have an error!";
// } else {
// 	$sql = "DELETE FROM user WHERE id='$ID'";
// 	mysqli_query($konek,$sql);
// 	header('location:index.php?');	
// }

// $sql = "DELETE FROM user WHERE id='$ID'";
// mysqli_query($konek,$sql);
// header('location:index.php');	

// if (!unlink($hapus)) {
//  	echo "Error deleting";
//  } else {
//   	$sql = "DELETE FROM user WHERE id='$ID'";
// 	mysqli_query($konek,$sql);
// 	header('location:index.php');	
//  }
?>