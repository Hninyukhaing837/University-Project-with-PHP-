<?php

$conn = new PDO('mysql:host=localhost; dbname=proj_db','root', ''); 

if (isset($_POST['Submit'])) {
$name=$_POST['name'];
$major=$_POST['major'];
$year=$_POST['year'];
$roll_num=$_POST['roll_num'];
$sub1=$_POST['sub1'];
$sub2=$_POST['sub2'];
$sub3=$_POST['sub3'];
$sub4=$_POST['sub4'];
$sub5=$_POST['sub5'];
$sub6=$_POST['sub6'];
$sub7=$_POST['sub7'];
$sub8=$_POST['sub8'];
$sub9=$_POST['sub9'];

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO grade_tbl (id, name, major,year ,roll_num , sub1, sub2, sub3, sub4, sub5, sub6, sub7, sub8, sub9)
VALUES (NULL, '$name', '$major','$year','$roll_num','$sub1','$sub2',
	'$sub3','$sub4','$sub5','$sub6','$sub7','$sub8','$sub9' )";

$conn->exec($sql);
echo "<script>alert('Successfully Added!!!'); window.location='grade.php'</script>";

}

?>