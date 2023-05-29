<?php
include('koneksi.php');
	$username = isset($_POST['username']) ? $_POST['username'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';
	$level = isset ($_POST['level']) ? $_POST['level'] : '';
	$query1 = mysqli_query($koneksi,"INSERT INTO user values ('$username','$password','$level')");
	if($query1){
		header("Location: index.php");
	} else{
		echo "Aksi Gagal";
	}
	
?>