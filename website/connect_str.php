<?php
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="samsung_plaza";
	
	$host=mysql_connect($hostname,$username,$password);
	$db=mysql_select_db($dbname);
	if($db!=1)
	{
		echo "Database incorrect";
	}
?>