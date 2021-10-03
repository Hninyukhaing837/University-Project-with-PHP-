<?php
$conn = new PDO('mysql:host=localhost; dbname=proj_db','root', '');
$get_id=$_REQUEST['id'];
move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);			
$location1=$_FILES["image"]["name"];
$name= $_POST['tname'];
$major= $_POST['major'];
$position= $_POST['position'];
$bdate= $_POST['bdate'];
$address= $_POST['address'];
$ph_num= $_POST['ph_num'];
$gender= $_POST['gender'];
$l_uni= $_POST['l_uni'];
$age= $_POST['age'];
$work_age= $_POST['work_age'];
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE tinfo_tbl SET image = '$location1', tname = '$name', major = '$major', position = '$position',  bdate = '$bdate',
address = '$address', ph_num = '$ph_num', gender = '$gender', l_uni = '$l_uni', age = '$age', work_age = '$work_age' WHERE id = '$get_id' ";

$conn->exec($sql);
echo "<script>alert('Successfully update The Information!'); window.location='teacher.php'</script>";
?>