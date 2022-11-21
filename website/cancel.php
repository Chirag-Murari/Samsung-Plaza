<?php
	include('connect_str.php');	
	$btn = $_GET['btn'];
	session_start();
	$user=$_SESSION['user'];
	
	if($btn=='cancel')
	{
		$qry="delete from cart where userid='$user'";
		mysql_query($qry);
		echo "<script> window.location='viewcart.php' </script>";
	}
?>