<?php

$conn = new PDO('mysql:host=localhost; dbname=proj_db','root', ''); 

if (isset($_POST['Submit'])) {
	move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);			
$location=$_FILES["image"]["name"];
$name=$_POST['tname'];
$major=$_POST['major'];
$position=$_POST['position'];
$bdate=$_POST['bdate'];
$address=$_POST['address'];
$ph_num=$_POST['ph_num'];
$gender=$_POST['gender'];
$l_uni=$_POST['l_uni'];
$age=$_POST['age'];
$work_age=$_POST['work_age'];


$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO tinfo_tbl (id, image, tname, major, position ,bdate , address, ph_num, gender, l_uni, age, work_age)
VALUES (NULL,'$location', '$name', '$major','$position','$bdate','$address','$ph_num',
	'$gender','$l_uni','$age','$work_age' )";

$conn->exec($sql);
echo "<script>alert('Successfully Added!!!'); window.location='teacher.php'</script>";

}

?>