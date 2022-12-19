<?php
	session_start();
	$user=$_SESSION['user'];
	if($user=="")
	{
		echo "<script> alert('Login first...'); </script>";
		echo "<script> window.location='login.php'; </script>";
	}
	else
	{
		$user=$_SESSION['user'];
		//echo $user;
	}
	$id=$_GET['id'];
	//echo $id;
	include('connect_str.php');
	$qry="select * from product where pid='$id'";
	$rc=mysql_query($qry);
	$row=mysql_fetch_array($rc);
	
	mysql_query("insert into cart values('$user','$row[0]','$row[1]','$row[2]',$row[3])");
	echo "<script> window.location='viewcart.php' </script>";
?>