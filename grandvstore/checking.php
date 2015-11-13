<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

	include('connect.php');
	$Email=$_POST['email'];
	$password=$_POST['password'];
	$Email=stripslashes($Email);
	$password=stripslashes($password);
	$query="SELECT `Email` FROM users WHERE Email='$Email'";
	$query_run=mysql_query($query);
	$num=mysql_num_rows($query_run);
	if(empty($Email))
	{
		$EmailErr = "Email Id is required";
	}
	if(empty($password))
	{
		$passErr = "Password is required";
	}
	else if($num!=1)
	{
		$EmailErr = "User Dosenot Exist";
		$newURL="index.php";
		header('Location: '.$newURL);	
	}
	else
	{
		
		$query="SELECT * FROM users WHERE Email='$Email'";
		$query_run=mysql_query($query);
		$row=mysql_fetch_assoc($query_run);
		$pass=$row['Password'];
		$Id=$row['Id'];
		session_start();
		if($pass == $password)
		{
			$_SESSION['Id']=$Id;
			$newURL="home.php";
			header('Location: '.$newURL);
		}
		else
		{
			$newURL="index.php";
			header('Location: '.$newURL);	
		}
	}
}
?>