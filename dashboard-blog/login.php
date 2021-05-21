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
		$_SESSION['message'] = 'Invalid email or password';
    	header('location:log-in.php');
	}
	else{
		$_SESSION['user'] = $auth;
		header('location:index.php');
	}
}
else{
	$_SESSION['message'] = 'You need to login first';
	header('location:log-in.php');
}
?>