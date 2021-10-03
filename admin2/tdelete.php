<?php
$conn = new PDO('mysql:host=localhost; dbname=proj_db','root', ''); 

$get_id=$_GET['id'];

// sql to delete a record
$sql = "Delete from tinfo_tbl where id = '$get_id'";

// use exec() because no results are returned
$conn->exec($sql);
header('location:teacher.php');
?>