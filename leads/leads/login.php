<?php

$error=''; 

include "koneksi.php";
if(isset($_POST['submit']))
{				
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$level		= $_POST['level'];
					
	$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
	if(mysqli_num_rows($query) == 0)
	{
		$error = "Username or Password is invalid";
	}
	else
	{
		$row = mysqli_fetch_assoc($query);
		$_SESSION['username']=$row['username'];
		$_SESSION['level'] = $row['level'];
		
		if($row['level'] == "Administrator" && $level=="1")
		{
			
			header("Location: admin.php");
		}
		else if($row['level'] =="Sales" && $level=="2")
		{
			header("Location: sales.php");
		}
		else
		{
			$error = "Failed Login";
		}
	}
}

			
?>