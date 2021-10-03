<?php

$conn = new PDO('mysql:host=localhost; dbname=proj_db','root', ''); 

if (isset($_POST['Submit'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$title=$_POST['title'];
$message=$_POST['message'];


$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO contaact_tbl (name, email,phone , title, message )
VALUES ('$name', '$email','$phone', '$title', '$message' )";

$conn->exec($sql);
echo "<script>alert('Successfully Send Message!!!'); window.location='about.php'</script>";

}

?>