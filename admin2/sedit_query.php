<?php
$conn = new PDO('mysql:host=localhost; dbname=proj_db','root', '');
$get_id=$_REQUEST['id'];
move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);			
$location1=$_FILES["image"]["name"];
$name= $_POST['name'];
$father= $_POST['father'];
$rollnum= $_POST['rollnum'];
$phno= $_POST['phno'];
$gender= $_POST['gender'];
$bdate= $_POST['bdate'];
$email= $_POST['email'];
$nrc_no= $_POST['nrc_no'];
$major= $_POST['major'];
$year= $_POST['year'];
$address= $_POST['address'];
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE stu_tbl SET image ='$location1', name = '$name', father = '$father', rollnum = '$rollnum',  phno = '$phno',
gender = '$gender', bdate = '$bdate', email = '$email', nrc_no = '$nrc_no', major = '$major', 
year = '$year', address = '$address' WHERE id = '$get_id' ";

$conn->exec($sql);
echo "<script>alert('Successfully update The Information!'); window.location='stuinfo.php'</script>";
?>