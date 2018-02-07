<?php
include("../functions/function.php");
?>
<html style="border:2px solid Black;">
<head>
	<title>
	Shopping Garage
	</title>
	<link rel='stylesheet' href='../styles/clothing.css' type='text/css'/>   
</head>
<body style="width:1326px;">
	<div class="container" style="width:1326px;">
	<div style="margin-left:-8px;margin-top:-8px;height:101px;width:1346px;background-image:url('../images/head.png');">
		<a href="" class="myButton"  target="popup" onclick="window.open('../login/loginform.html','popup','width=300,height=350,scrollbars=no,resizable=no'); return false;"><img style="margin-left:1085px; float:left; margin-top:10px;" src="../images/login.png"/></a>
		
		<a href="" class="myButton"  target="popup" onclick="window.open('../registration/Registration.html','popup','width=600,height=650,scrollbars=no,resizable=no'); return false;"><img style="margin-left:35px; float:left; margin-top:10px;" src="../images/register.png"/></a>
		<a href="../pages/cart.html"><img style="margin-left:1150px; float:left; margin-top:10px;" src="../images/cart.png"/></a>
		<a href="../index.php"><div style="float:left;margin-top:-85px;margin-left:5px;width:366px;height:40px;"></div></a>
		</div>
	
		<div id="products_box">
		<?php getPro(); ?>
			
		</div>
	<div class="fter">
			<center><B>&copy; 2014-16 by www.ShoppingAdda.com, Inc.</B></center>
		</div>
		
</body>
</html>