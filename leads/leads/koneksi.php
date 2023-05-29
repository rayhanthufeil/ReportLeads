<?php
	define('db_host','localhost');
	define('db_user','root'); //user database
	define('db_pass',''); //passwd database
	define('db_name','165db');
 
	$koneksi=mysqli_connect("localhost",db_user,db_pass,db_name);
	mysqli_select_db($koneksi,db_name);

?>
