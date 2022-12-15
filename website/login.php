<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>samsung plaza</title>
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
  <form name="frm" method="post" action="loginfire.php">
  	<table width="350" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
	  	<td colspan="2"><h2 align="center">User Login </h2></td>
	  </tr>
	  <tr>
	  	<td height="35" class="rit">Username :</td>
		<td height="35" ><input type="text" name="txtlog" class="txtbox" /></td>
	  </tr>
	  <tr>
	  	<td height="35" class="rit">Password :</td>
		<td height="35" ><input type="password" name="txtpas" class="txtbox" /></td>
	  </tr>
	  <tr>
	  	<td>&nbsp;</td>
		<td height="35" ><input type="submit" name="cmdlogin" value=" LogIn " class="btn" /></td>
	  </tr>
	  <tr>
	  	<td>&nbsp;</td>
		<td height="35" >
			<a href="register.php">New User</a>  |  <a href="forgotpass.php">Forgot Password</a>
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
