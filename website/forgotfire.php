<?php
	include('connect_str.php');
	$a=$_POST['txtuser'];
	$b=$_POST['txtcontact'];
	$c=$_POST['txtemail'];
	$d=$_POST['txtans'];
	
	$rc=mysql_query(" select * from register where uname='$a' and contact='$b' and email='$c' and secans='$d' ");
	$row=mysql_fetch_array($rc);
	echo "<script> alert('Password : $row[8]'); </script>";
	echo "<script> window.location='login.php'; </script>";
?>