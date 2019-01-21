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
		return "<em style='color:#008bd1'>Active</em>";
	} else {
		return "<em style='color:#ff0000'>Non-Active</em>";}
}

?>