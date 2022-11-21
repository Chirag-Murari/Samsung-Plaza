<?php
	session_start();
	$user=$_SESSION['user'];
	include('connect_str.php');		
	
	date_default_timezone_set('Asia/Calcutta');
	$dnt=date('dmYhis', time());
	$bid=$user.$dnt;
	
	$r1=mysql_query("select * from register where uname='$user'");
	$row1=mysql_fetch_array($r1);
	
	$name=$row1[0]." ".$row1[1];
	$contact=$row1[5];
	$email=$row1[6];
	$total=$_SESSION['total'];
	
	mysql_query("insert into orderitem values('$name','$bid','$user','$contact','$email',$total)");
	echo "<script> window.location='finalorder.php'; </script>";
	

?>