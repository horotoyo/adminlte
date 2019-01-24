<?php
include 'koneksi.php';

function kategori($id){
	global $konek;
	$sql	= "SELECT nama FROM kategori WHERE id".$id;
	$result	= mysqli_query($konek, $sql);
	$row	= mysqli_fetch_assoc($result);
	return $row['nama'];
}

function namaUser($id) {
	global $konek;
	$name    = "SELECT name FROM user WHERE id=".$id;
	$hasil   = mysqli_query($konek, $name);
	$kolom   = mysqli_fetch_assoc($hasil);
	return $kolom['name'];
}

function jika($status) {
	if ($status==1) {
		return "<span class='label label-success' disabled>Publish</span>";
	} else {
		return "<span class='label label-warning' disabled>Draft</span>";}
}

?>