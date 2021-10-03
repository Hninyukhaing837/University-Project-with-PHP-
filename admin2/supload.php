<?php

$conn = new PDO('mysql:host=localhost; dbname=proj_db','root', ''); 

if (isset($_POST['Submit'])) {
	move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);			
$location=$_FILES["image"]["name"];
$name=$_POST['name'];
$father=$_POST['father'];
$rollnum=$_POST['rollnum'];
$phno=$_POST['phno'];
$gender=$_POST['gender'];
$bdate=$_POST['bdate'];
$email=$_POST['email'];
$nrc_no=$_POST['nrc_no'];
$major=$_POST['major'];
$year=$_POST['year'];
$address=$_POST['address'];

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO stu_tbl (id, image, name, father, rollnum ,phno , gender, bdate, email, nrc_no, major, year, address)
VALUES (NULL,'$location', '$name', '$father','$rollnum','$phno','$gender','$bdate',
	'$email','$nrc_no','$major','$year','$address' )";

$conn->exec($sql);
echo "<script>alert('Successfully Added!!!'); window.location='stuinfo.php'</script>";

}

?>