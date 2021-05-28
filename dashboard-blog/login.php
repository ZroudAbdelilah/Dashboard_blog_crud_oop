<?php
//start session
session_start();
 
include_once('database.php');
include_once('User.php');
 
$user = new User();
 
if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
 
	$auth = $user->check_login($email, $password);
 
	if(!$auth){
    	header('location:log-in.php?message=Invalid email or password');
	}
	else{
		$_SESSION['user'] = $auth;
		header('location:index.php');
	}
}
else{
	header('location:log-in.php?message=You need to login first');
}
?>