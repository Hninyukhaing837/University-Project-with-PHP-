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

?>


<html>
	<head>
    <title>TU(Hmawbi) Admin Page</title>
	 <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
     
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
		
        <link href="modal/css1/bootstrap1.css" rel="stylesheet" type="text/css" media="screen">
<script src="modal/js1/jquery1.js" type="text/javascript"></script>
<script src="modal/js1/bootstrap1.js" type="text/javascript"></script>



<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
		<style type="text/css">
		
<!--
@import url("css/tblstyle.css");
-->
</style>
		<style type="text/css">
	body {
		
	background: #E8E8E8 url(img/wall.jpg) no-repeat center top;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	background-size:cover;
	color: #000;
	font: 14px Arial;
	padding: 0;
	#img_category{
		float:left;
		padding:10px;
	
}
 
    </style>
	</head>

<body>
<form action="grade1.php" mathod="post">
<select id="major" name="major" size="1">
	<option value="IT" selected="selected">IT</option>
	<option value="EP" >EP</option>
	<option value="EC">EC</option>
	<option value="MC">MC</option>
	<option value="Archi">Archi</option>
	<option value="Civil">Civil</option>
	<option value="MP">MP</option>
</select>
<select id="year" name="year" size="1">
	<option value="First Year" selected="selected">First Year</option>
	<option value="Second Year" >Second Year</option>
	<option value="Third Year">Third Year</option>
	<option value="Fourth Year">Fourth Year</option>
	<option value="Fifth Year">Fifth Year</option>
	<option value="Sixth Year" disabled="disabled">Sixth Year</option>
</select>
<input type="submit" name="reg_btn" value="Search" />

</label>
</form><br />
<?php include ('modal_add.php'); ?>
<table id="hor-minimalist-b" summary="Employee Pay Sheet" style="width:90%; padding: 10 px; ">
    <thead>
    	<tr>
        	<th scope="col">Name</th>
            <th scope="col">Major</th>
			<th scope="col">Year</th>
            <th scope="col">Sub 1</th>
            <th scope="col">sub 2</th>
			<th scope="col">sub 3</th>
			<th scope="col">sub 4</th>
			<th scope="col">sub 5</th>
			<th scope="col">sub 6</th>
			<th scope="col">sub 7</th>
			<th scope="col">sub 8</th>
			<th scope="col">sub 9</th>
			<th scope="col">action</th>
        </tr>
    </thead>
    <tbody>
<?php
$query = "SELECT * FROM grade_tbl";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
		extract($row);
		?>
<tr><td scope="row"><?php echo $row['name']?></td>
	<td><?php echo $row['major']?></td>
	<td><?php echo $row['year']?></td>
	<td><?php echo $row['sub1']?></td>
	<td><?php echo $row['sub2']?></td>
	<td><?php echo $row['sub3']?></td>
	<td><?php echo $row['sub4']?></td>
	<td><?php echo $row['sub5']?></td>
	<td><?php echo $row['sub6']?></td>
	<td><?php echo $row['sub7']?></td>
	<td><?php echo $row['sub8']?></td>
	<td><?php echo $row['sub9']?></td>
	<td style="text-align:center; width:350px;">
		 <a href="#updte_img<?php echo $id;?>"  data-toggle="modal"  class="btn btn-warning" >Update</a>
		 <a href="#delete<?php echo $id;?>"  data-toggle="modal"  class="btn btn-danger" >Delete </a>
	</td></tr>
	<!-- Modal -->
							<div id="delete<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-header">
							<h3 id="myModalLabel" style="font-size:26px;">Delete Unwanted Student Record</h3>
							</div>
							<div class="modal-body">
							<div class="alert alert-danger">
							<b style="color:#fa1c51; margin-left:25px; font-size:20px;"><center>Name :<?php echo $row['name']; ?>&nbsp; &nbsp; &nbsp; &nbsp; Roll Number :<?php echo $row['roll_num']; ?></center></b>
							<br /><br />
							<p style="font-size: larger; text-align: center;">Are you Sure you want to Delete?</p>
							</div>
							<hr>
							<div class="modal-footer">
							<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
							<a href="delete.php<?php echo '?id='.$id; ?>" class="btn btn-danger">Yes</a>
							</div>
							</div>
							</div>
	<?php
	}

	?>
	</tbody>
</table>


    <script src="js/tindex.js"></script>
</body>
<html>

