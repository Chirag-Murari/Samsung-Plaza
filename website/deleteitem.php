<?php
	include('connect_str.php');	
	$user = $_GET['user'];
	$item = $_GET['item'];
	
	$qry="delete from cart where userid='$user' and pid='$item'";
	mysql_query($qry);
	echo "<script> window.location='viewcart.php' </script>";
	
?>