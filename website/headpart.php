			<style type="text/css">
		img.icon {
		border:none;
		width:40px;
		height:40px;
		padding:25px 5px 8px 5px;
		}
		
		.ext {
			padding:10px;
			font-weight:bold;
			border:#666 solid thin;
		}
		.ext:hover {
			
			font-weight:bold;
			background-color:#666;
			color:#FFFFFF;
			border:#000 solid thin;
		}
		
	</style>
	<tr>
    <td width="40">&nbsp;</td>
    <td width="160">
		<a href="index.php"><img src="img/logoo.png" /></a>	</td>
    <td width="800" align="center" style="vertical-align:top; padding-top:50px;">
	<div class="user">
	<?php
		@ session_start();
		
		@$user=$_SESSION['user'];
		if (@$_SESSION['user'] == '')
		{
			$user='Guest';
			echo "Welcome to $user";  
		}
		else
		{
		include('connect_str.php');		
		$qry="select * from register where uname='$user'";
		$rcc=mysql_query($qry);
		$rw=mysql_fetch_array($rcc);
		$nm = $rw[0]." ".$rw[1];
		echo "Welcome to ".strtoupper($nm)." | <a href='logout.php'>Logout</a>";  
		}
	?>
<?php
		if(@$_SESSION['user']==''){?>
			<a href="login.php">~ Login</a> | <a href="register.php">Register</a></div>
		<?php }
		else{
		echo "</br>	</br>";
		}
		?>
	
	<div class="navigation">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="about.php">About Us</a></li>
		<li><a href="viewcart.php">View Cart</a></li>
		<li><a href="review.php">Review</a></li>
		<li><a href="contact.php">Contact</a></li>
	</ul>
	<br /><br /><br />
	
	</div>	
	
			<a href="mobiles.php">Mobiles</a>
			<a href="tv.php">Tvs </a>
			<a href="sw.php">Smartwatches</a>
		
	</td>
  </tr>