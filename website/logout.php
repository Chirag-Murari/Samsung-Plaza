<?php
	session_start();
	unset($_SESSION['user']); 
	session_destroy(); 
	echo "<script> window.location='index.php'; </script>";
?>