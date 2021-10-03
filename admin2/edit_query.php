<?php
$conn = new PDO('mysql:host=localhost; dbname=proj_db','root', '');
$get_id=$_REQUEST['id'];
$name= $_POST['name'];
$major= $_POST['major'];
$year= $_POST['year'];
$roll_num= $_POST['roll_num'];
$sub1= $_POST['sub1'];
$sub2= $_POST['sub2'];
$sub3= $_POST['sub3'];
$sub4= $_POST['sub4'];
$sub5= $_POST['sub5'];
$sub6= $_POST['sub6'];
$sub7= $_POST['sub7'];
$sub8= $_POST['sub8'];
$sub9= $_POST['sub9'];
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE grade_tbl SET name = '$name', major = '$major', year = '$year',  roll_num = '$roll_num',
sub1 = '$sub1', sub2 = '$sub2', sub3 = '$sub3', sub4 = '$sub4', sub5 = '$sub5', sub6 = '$sub6', 
sub7 = '$sub7', sub8 = '$sub8', sub9 = '$sub9' WHERE id = '$get_id' ";

$conn->exec($sql);
echo "<script>alert('Successfully update The Information!'); window.location='grade.php'</script>";
?>