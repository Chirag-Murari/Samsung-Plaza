<?php
		$a=$_POST['txtname'];
		$b=$_POST['txtcontact'];
		$c=$_POST['txtemail'];
		$d=$_POST['feed'];
		
		include("connect_str.php");

		$qry="insert into feedback values('$a' , '$b' , '$c' , '$d')";
		$rc=mysql_query($qry);
			echo"<script> alert('Your valueable review is successfully inserted...'); </script>";
			echo"<script> window.location='index.php'; </script>";
		
?>