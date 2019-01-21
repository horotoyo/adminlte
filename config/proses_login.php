<?php
session_start();
include 'koneksi.php';
$email		= $_POST['email'];
$pass		= $_POST['password'];

//checking type user
$sql1		= "SELECT * FROM role";
$query1		= mysqli_query($konek, $sql1);
$row1		= mysqli_fetch_assoc($query1);

if(!empty($email) && !empty($pass)) {
	$sql2		= "SELECT * FROM user WHERE email = '$email' AND password = '$pass'";
	$query2		= mysqli_query($konek, $sql2);
	$row2 		= mysqli_fetch_assoc($query2);
	if (mysqli_num_rows($query2)>0) {
		$_SESSION['email']	= $email;
		$_SESSION['name']	= $row2['name'];
		$_SESSION['photo']	= $row2['photo'];
		$_SESSION['id']		= $row2['id'];
		$_SESSION['user']	= $row2['role_id'];
		header('location: ../admin/index.php');
	} else {
		echo "Email anda salah";
	}
} else {
	echo "Email dan password anda kosong";
}

?>