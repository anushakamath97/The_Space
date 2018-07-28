<?php
session_start();
if(!isset($_SESSION['userlogin']))
{
	$_SESSION['user']=false;
	header('Location:login.php#log');
	
}
else
{
	$_SESSION['user']=true;
	header('Location:forumn.php');
}
?>