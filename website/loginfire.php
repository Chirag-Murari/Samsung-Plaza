<?php
	include('connect_str.php');
	$a=$_POST['txtlog'];
	$b=$_POST['txtpas'];
	
	$qry="select * from register where uname='$a' and pass='$b'";
	$rc=mysql_query($qry);
	$count=mysql_num_rows($rc);
	//echo $count;	
	if($count==1)
	{
			session_start();
			$_SESSION['user']=$a;
			echo"<script> window.location='index.php'; </script>";
	}
	else
	{
			echo"<script> alert('Username or Password is incorrect'); </script>";
			echo"<script> window.location='login.php'; </script>";
	}
?>