<?php
session_start();
if(!isset($_SESSION['userlogin']))
{
	$_SESSION['userl']=false;
	header('Location:login.php#log');
	
}
else
{
	$_SESSION['userl']=true;
	header('Location:showdisc.php#a');
}
?>