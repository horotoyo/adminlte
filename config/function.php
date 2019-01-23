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
		return "<em style='color:#008bd1'><span class='btn btn-success btn-xs' disabled>Publish</span></em>";
	} else {
		return "<em style='color:#ff0000'><span class='btn btn-danger btn-xs' disabled>Draft</span></em>";}
}

?>