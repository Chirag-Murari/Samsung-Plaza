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
  <form name="frm" method="post" action="reviewfire.php">
  	<table width="450" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
	  	<td colspan="2"><h2 align="center">Review </h2></td>
	  </tr>
	  <tr>
	  	<td height="35" class="rit">User Name :</td>
		<td height="35" ><input type="text" name="txtname" class="txtbox" /></td>
	  </tr>
	  <tr>
	  	<td height="35" class="rit">Contact No. :</td>
		<td height="35" ><input type="text" name="txtcontact" class="txtbox" /></td>
	  </tr>
	  <tr>
	  	<td height="35" class="rit">Email Address :</td>
		<td height="35" ><input type="text" name="txtemail" class="txtbox1" /></td>
	  </tr>
	  <tr>
	  	<td height="35" class="rit">Write Review</td>
		<td height="35" >
			<textarea name="feed" rows="3" cols="35"></textarea>
		</td>
	  </tr>
	  <tr>
	  	<td>&nbsp;</td>
		<td height="35" ><input type="submit" name="cmdlogin" value=" Feedback " class="btn" /></td>
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
