<?php
require 'connect.inc.php';

function log_in()
{
if(!empty($_POST['user']))  
{
	if(!empty($_POST['pass']))
	{
	   $ur= $_POST['user'];
	   $ps= $_POST['pass'];
	}
$query = mysql_query("SELECT * FROM registration WHERE Email='$ur' 
		AND Password='$ps' ") or die(mysql_error());

		
$numrows = mysql_num_rows($query);
if ($numrows!=0)
{
echo 'Welcome ';
echo $ur;
echo '!';
}
  else
	echo("Incorrect Username or Password!");
}

}
if(isset($_POST['submit']))
{
	log_in();
}
else
	echo 'Not logged in';

?>
