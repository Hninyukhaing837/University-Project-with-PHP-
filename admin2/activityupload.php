<?php

$conn = new PDO('mysql:host=localhost; dbname=proj_db','root', ''); 

if (isset($_POST['Submit'])) {
	move_uploaded_file($_FILES["photo"]["tmp_name"],"uploads/" . $_FILES["photo"]["name"]);			
$location=$_FILES["photo"]["name"];
$title=$_POST['title'];
$discription=$_POST['discription'];


$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO activity_tbl (id, photo, title, discription)
VALUES (NULL,'$location', '$title', '$discription')";

$conn->exec($sql);
echo "<script>alert('Successfully Added!!!'); window.location='profile.php'</script>";

}

?>