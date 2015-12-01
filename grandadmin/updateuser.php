<?php
require('connect.php');
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	session_start();
	$Id=$_SESSION['Id'];
	$query="UPDATE `users` SET `Flag`= 1 WHERE `Id`='$Id'";
	$query_run=mysql_query($query);
	if($query_run)
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Updated");'; 
		echo 'window.location.href = "newlogins.php";';
		echo '</script>';
	}
	else
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Failed to Update :(");'; 
		echo 'window.location.href = "newlogins.php";';
		echo '</script>';
	}
}
?>