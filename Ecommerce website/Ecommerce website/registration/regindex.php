<?php
require 'connect.inc.php';

function reg_in()
{
If(isset($_POST['submit'])){

	   $userr= $_POST['email'];
	   $pass= $_POST['pass'];
	
	$query = "INSERT INTO `registration` (`Id`, `Email` , `Password`) VALUES ('','$userr' , '$pass')";
	
if($query_run=mysql_query($query))  
	{
		header('Location: register_success.php');
	}
	else
	{
		echo mysql_error();
	}
  }
}
if(isset($_POST['submit']))
{
	reg_in();
	echo 'Data successfully inserted';
}
else
	echo 'Not registered';
?>