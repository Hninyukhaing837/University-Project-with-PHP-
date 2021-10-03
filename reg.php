<?php
session_start();
	require 'connect.php';

$errmsg_arr = array();
$errflag = false;


// new data

$user = $_POST['login'];
$password = $_POST['pword'];

if($user == '') {
	$errmsg_arr[] = 'You must enter your Username';
	$errflag = true;
}
if($password == '') {
	$errmsg_arr[] = 'You must enter your Password';
	$errflag = true;
}

// query
$result = $dbConnection->prepare("SELECT * FROM user_tbl WHERE WHERE username=:user AND password=:password");
$result->bindParam('username', $user);
$result->bindParam('password', $password);
$result->execute();
$rows = $result->fetch(PDO::FETCH_NUM);
if($user==username && $password==password) {
header("location: home.php");
}
else{
	$errmsg_arr[] = 'Username and Password are not found';
	$errflag = true;
}
if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: index.php");
	exit();
}

?>