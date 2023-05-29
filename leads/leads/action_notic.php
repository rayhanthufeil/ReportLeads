<?php
include('koneksi.php');
	$id_notic = isset($_POST['id_notic']) ? $_POST['id_notic'] : '';
	$message = isset($_POST['message']) ? $_POST['message'] : '';
	
	$query1 = mysqli_query($koneksi,"UPDATE notic set id_notic='$id_notic',message='$message'");
	
	if($query1){
		header("Location: NC.php");
	} else{
		echo "Aksi Gagal";
	}
	
?>