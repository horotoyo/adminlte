<?php
include '../../config/koneksi.php';

$kategori	= $_POST['kategori'];
$penulis	= $_POST['user'];

$sql1 = "INSERT INTO kategori (nama, id_user) VALUES ('$kategori', '$penulis')";

mysqli_query($konek,$sql1);
header('location:index.php');

?>