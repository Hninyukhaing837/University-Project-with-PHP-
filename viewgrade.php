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

$name = $_REQUEST['name'];
$roll_num = $_REQUEST['roll_num'];
$major = $_REQUEST['major'];


if($name == '') {
	$errmsg_arr[] = 'You must enter your name';
	$errflag = true;
}

if($roll_num == '') {
	$errmsg_arr[] = 'You must enter your roll_number';
	$errflag = true;
}
if($major == '') {
	$errmsg_arr[] = 'Please choose your major';
	$errflag = true;
}
// query
$result = $conn->prepare("SELECT * FROM grade_tbl Where name ='$name' AND roll_num='$roll_num' AND major='$major'  ");
$result->execute();
$rows = $result->fetch();

if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: grade.php");
	exit();
}

?>
<html lang="en">
    <head>
        <title>Technological University (Hmawbi)</title>
        
        <link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" href="assets/demo.css">
		<link rel="stylesheet" href="assets/header-login-signup.css">
        <link rel="stylesheet" type="text/css" href="css/stylehome.css" />
		<!-- Bootstrap CSS -->    
    <link href="admin2/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="admin2/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="admin2/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="admin2/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="admin2/css/style.css" rel="stylesheet">
    <link href="admin2/css/style-responsive.css" rel="stylesheet" />
	 <link rel="stylesheet" type="text/css" href="css/gradestyle.css" />
		<script src="js/modernizr.custom.63321.js"></script>
	<style>
		body {
	background: #E8E8E8 url(img/gifbg2.gif) no-repeat center top;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	background-size:cover;
	color: #000;
	font: 14px Arial;
	padding: 0;
	width:100%;
	height:100%;
			}	
		#images {
	opacity:60%;
			}
	</style>
        
    </head>
    <body>
	<header class="header-login-signup">

	<div class="header-limiter">
		<img src="img/banlogo.png" alt="" style="float:left; position:relative;"/> 
		<h1 >&nbsp; &nbsp; <span>TU</span>(Hmawbi)</h1>

		<nav>
		  
			<a href="home.php"  class="active">Home</a>
			<a href="grade.php" >Grading</a>
			<a href="stu_info.php" >Student Information</a>
			<a href="teacher.php">Teacher Information</a>
			<a href="onlinereg.php">Online Registration</a>
		</nav>

		<ul>
			
			<li><a href="#myModal" data-toggle="modal" class="btn btn-warning">Log Out</a></li>
	
		</ul>

	</div>
		<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h4 class="modal-title">LOG OUT!</h4>
                                          </div>
                                          <div class="modal-body">

                                            <strong style="color:#4c8fff;"> Are you sure, You want to Log Out ! ! </strong>

                                          </div>
                                          <div class="modal-footer">
                                            <a href="logout.php"><button class="btn btn-warning" type="button">Yes</button></a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- modal -->
</header>
<?php
if ($rows>0) {
	?>
<h2 style="font-size:38px; color: #31e3e5; text-shadow: 0 3px 3px rgba(0,0,0,0.5); float:left; padding:10px;"><strong>The grades for <?php echo $name; ?> (<?php echo $roll_num; ?>) from <?php echo $major; ?> is :</strong></h2>

<center><table style="width:80%; padding: 10 px; border:0px;">
    <thead style="font-size:32px; color: #25e9f5; padding:10px; text-shadow: 0 3px 3px rgba(0,0,0,0.5); font-weight:bold;">
    	<tr align="center">
        	<td>Sub 1</td>
            <td>sub 2</td>
			<td>sub 3</td>
			<td>sub 4</td>
			<td>sub 5</td>
			<td>sub 6</td>
			<td>sub 7</td>
			<td>sub 8</td>
			<td>sub 9</td>
		</tr>
    </thead>
    <tbody style="font-size:30px; color: #2de2a4; padding:15px; text-shadow: 0 3px 3px rgba(0,0,0,0.5); font-weight:bold;" >
<tr align="center">
	<td><?php echo $rows['sub1']?></td>
	<td><?php echo $rows['sub2']?></td>
	<td><?php echo $rows['sub3']?></td>
	<td><?php echo $rows['sub4']?></td>
	<td><?php echo $rows['sub5']?></td>
	<td><?php echo $rows['sub6']?></td>
	<td><?php echo $rows['sub7']?></td>
	<td><?php echo $rows['sub8']?></td>
	<td><?php echo $rows['sub9']?></td>
	</tr>
	</tbody>
</table></center>
<?php
} else { 
	echo '<h1 style="font-size:30px; color: #ff900e; text-shadow: 0 3px 3px rgba(0,0,0,0.5); padding:10px;"><strong>There is no data with this information.<a href="grade.php" style="font-size:30px; color: #ff6f29; text-shadow: 0 3px 3px rgba(0,0,0,0.5); padding:10px;">Please try Again!<a></strong></h1>' ;
}
?>


 <script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
 	<!-- footer --><div style="position: absolute; bottom:0; height:40px; margin-top:40px; color:#ffffff;">
							<p style="padding-bottom:20px; padding-right:20px;">Develped by 5BE_IT TU(Hmawbi) project team</p>  
						</div>
         <!-- javascripts -->
    <script src="admin2/js/jquery.js"></script>
    <script src="admin2/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="admin2/js/jquery.scrollTo.min.js"></script>
    <script src="admin2/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- gritter -->
   
    <!-- custom gritter script for this page only-->
    <script src="admin2/js/gritter.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="admin2/js/scripts.js"></script>
</body>
</html>
