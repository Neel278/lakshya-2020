<?php
error_reporting(0);
if (session_status() == PHP_SESSION_NONE) {
    // $_SESSION['signup']=false;
	$_SESSION['login']=false;
	session_start();
}else{
	// $_SESSION['signup']=true;
	$_SESSION['login']=true;
}
$host="localhost";
$user="Neel";
$pass="neel";
$database="event";
$conn=mysqli_connect($host,$user,$pass,$database);
	if(!$conn){
		echo "Unaurthorized connection!!!";
		die();
	}
?>