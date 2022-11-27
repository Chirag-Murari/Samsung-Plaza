<?php
		session_start();
		$user=$_SESSION['user'];
		if($user=="")
		{
			echo "<script> alert('Login first...'); </script>";
		echo "<script> window.location='login.php'; </script>";
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Samsung plaza</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="1000" border="0" cellspacing="0" cellpadding="0" align="center" class="tblmain effect8">
  <?php include('headpart.php'); ?>
  <tr>
    <td colspan="3" align="center" height="250"><img src="img/banner.jpg" /></td>
  </tr>
  
  <tr>
  <td colspan="3">
  
  	<table width="550" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
	  	<td colspan="5"><h2 align="center">Selected Items in CART </h2></td>
	  </tr>
	  <?php
	  	$tot=0;
		include('connect_str.php');		
		$qry="select * from cart where userid='$user'";
		$rc=mysql_query($qry);
		while($r=mysql_fetch_array($rc))
		{
	  	$tot=$tot+$r[4];
	  	echo "<tr>";
	  	echo "<td width='230' height='80'><b>".ucwords($r[2])."</b></td>";
		echo "<td width='100'>$r[3]</td>";
		echo "<td width='70'>$r[4]</td>";
		echo "<td width='120'><img src='products/$r[1].jpg' class='tiny'></td>";
		echo "<td width='30'><a href='deleteitem.php?user=$user&item=$r[1]'><img src='img/dellogo.png'></a></td>";
	    echo "<tr>";
		
	  }
	  @$_SESSION['total']=$tot;
	  ?>
    </table>  
	<h3 align="center">Total Amount : Rs. 
	<?php 
	if(!isset($_SESSION['total']))
	$tot=0;
	echo $tot; ?></h3>
	<center><input type="submit" name="cmdcont" value="Continue Order" onclick="window.location='index.php'" class="btn1" />
	  <input type="submit" name="cmdfinal" value="Final Order" onclick="window.location='finalback.php'" class="btn1" />
	  <input type="submit" name="cmdcanc" value="Cancel Order" onclick="window.location='cancel.php?btn=cancel'" class="btn1" /></center>	</td>
  </tr>
  <tr><td colspan="3">&nbsp;  </td></tr>
  <?php include('footpart.php'); ?>
</table>

</body>
</html>
