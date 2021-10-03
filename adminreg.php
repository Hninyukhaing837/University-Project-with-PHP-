<?php
session_start();
$errmsg_arr = array();
$errflag = false;
// configuration
$dbhost 	= "localhost";
$dbname		= "proj_db";
$dbuser		= "root";
$dbpass		= "";

// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

// new data

$user = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$comfirmid = $_POST['comfirmid'];

if($user == '') {
	$errmsg_arr[] = 'You must enter your Username';
	$errflag = true;
}

if($email == '') {
	$errmsg_arr[] = 'You must enter your email';
	$errflag = true;
}
if($password == '') {
	$errmsg_arr[] = 'You must enter your Password';
	$errflag = true;
}
if($comfirmid == '') {
	$errmsg_arr[] = 'You must enter your Comfirming id';
	$errflag = true;
}

// query
$result = $conn->prepare("SELECT * FROM admin_tbl WHERE username= :hjhjhjh  AND email= :asas AND password= :jhjhjhj  AND comfirmid= :sasa");
$result->bindParam(':hjhjhjh', $user);
$result->bindParam(':asas', $email);
$result->bindParam(':jhjhjhj', $password);
$result->bindParam(':sasa', $comfirmid);
$result->execute();
$rows = $result->fetch(PDO::FETCH_NUM);
if($rows>0) {
header("location: admin2/home.php");
}
else{
	$errmsg_arr[] = 'Username and Password are not found';
	$errflag = true;
}
if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: adminlogin.php");
	exit();
}

?>