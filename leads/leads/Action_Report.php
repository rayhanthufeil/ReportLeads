<?php
include('koneksi.php');
	$id_report = isset($_POST['id_report']) ? $_POST['id_report'] : '';
	$nama_klien = isset($_POST['nama_klien']) ? $_POST['nama_klien'] : '';
	$nama_perusahaan = isset ($_POST['nama_perusahaan']) ? $_POST['nama_perusahaan'] : '';
	$no_telp = isset ($_POST['no_telp']) ? $_POST['no_telp'] : '';

	$email = isset ($_POST['email']) ? $_POST['email'] : '';
	$referensi = isset ($_POST['referensi']) ? $_POST['referensi'] : '';
	$tanggal_visit = isset ($_POST['tanggal_visit']) ? $_POST['tanggal_visit'] : '';
	$tanggal_event = isset ($_POST['tanggal_event']) ? $_POST['tanggal_event'] : '';
	$jumlah_pax = isset ($_POST['jumlah_pax']) ? $_POST['jumlah_pax'] : '';
	$kategori_event = isset ($_POST['kategori_event']) ? $_POST['kategori_event'] : '';
	$sales = isset ($_POST['sales']) ? $_POST['sales'] : '';
	$progres = isset ($_POST['progres']) ? $_POST['progres'] : '';
	

	
	$query1 = mysqli_query($koneksi,"INSERT INTO report values ('$id_report','$nama_klien','$nama_perusahaan','$no_telp','$email','$referensi','$tanggal_visit','$tanggal_event','$jumlah_pax','$kategori_event','$sales','$progres')");
	
	if($query1){
		header("Location: index.php");
	} else{
		echo "Aksi Gagal";
	}
	
?>