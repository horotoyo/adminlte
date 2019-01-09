<?php
include '../../config/koneksi.php';

$kategori	= $_POST['kategori'];

$sql1 = "INSERT INTO kategori (nama) VALUES ('$kategori')";
mysqli_query($konek,$sql1);
header('location:index.php');

?>