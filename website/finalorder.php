<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>samsung plaza</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style3 {color: #330000; font-weight: bold; }
-->
</style>
</head>

<body>
<table width="1000" border="0" cellspacing="0" cellpadding="0" align="center" class="tblmain effect8">
  <?php include('headpart.php'); ?>
  <tr>
    <td colspan="3" align="center" height="250"><img src="img/banner.jpg" /></td>
  </tr>
  
  <tr>
  <td colspan="3">
  <?php
  	@session_start();
	date_default_timezone_set('Asia/Calcutta');
	$dnt=date('dmYhis', time());
	@$bid=$log.$dnt;
  
	$user=$_SESSION['user'];
	$aa=mysql_query("select * from register where uname='$user'");
	$r=mysql_fetch_array($aa);
  ?>
  <form name="frm" method="post" action="finalfire.php">
  	<table width="750" border="0" cellspacing="0" cellpadding="0" align="center" >
      <tr>
	  	<td colspan="2"><h2 align="center">Receipt </h2></td>
	  </tr>
	  <tr>
	  	<td width="250" height="35" class="rit">Booking ID :</td>
		<td width="500" height="35" ><?php echo $bid ?></td>
	  </tr>
	  <tr>
	  	<td width="250" height="35" class="rit">Name of Customer :</td>
		<td width="500" height="35" ><?php echo $r[0]." ".$r[1] ?></td>
	  </tr>
	  <tr>
	  	<td width="250" height="35" class="rit">Contact No. :</td>
		<td width="500" height="35" ><?php echo $r[5] ?></td>
	  </tr>
	  <tr>
	  	<td width="250" height="35" class="rit">Email Address :</td>
		<td width="500" height="35" ><?php echo $r[6] ?></td>
	  </tr>
	  
	  <tr>
	  	<td height="35" colspan="2">
		
		<table width="700" border="0" cellspacing="0" cellpadding="2" style="border:#999999 dotted thin" align="center">
  <tr>
    <td width="125" bgcolor="#FFFF99"><span class="style3">Prod#ID</span></td>
    <td width="300" bgcolor="#FFFF99"><span class="style3">Product Name </span></td>
    <td width="150" bgcolor="#FFFF99"><span class="style3">Category</span></td>
    <td width="125" bgcolor="#FFFF99"><span class="style3">Price</span></td>
  </tr>
  <?php
		$qry="select * from cart where userid='$user'";
		$rc=mysql_query($qry);
		$tot=0;
		while($r=mysql_fetch_array($rc))
		{
	  	$tot=$tot+$r[4];
	  	echo "<tr>";
		echo "<td width='100'>$r[1]</td>";
	  	echo "<td width='350' height='30'><b>".ucwords($r[2])."</b></td>";
		echo "<td width='150'>$r[3]</td>";
		echo "<td width='100'>$r[4]</td>";
	    echo "<tr>";
	  }
	  ?>
</table>
		<h3 align="center">Total Amount : Rs. <?php echo $tot; ?></h3>
		
		</td>
		</tr>
    </table>  
	</form>
	</td>
  </tr>
 
  <tr><td colspan="3">&nbsp;  </td></tr>
  <?php include('footpart.php'); ?>
</table>

</body>
</html>
