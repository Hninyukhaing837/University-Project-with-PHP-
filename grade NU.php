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
	background: #E8E8E8 url(img/bbgg2.jpg) no-repeat center top;
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
  <center><h1 style="font-size:40px; color: #31e3e5; text-shadow: 0 3px 3px rgba(0,0,0,0.5);"><strong>Enter the information to see your grade ! ! </strong></h1></center>
 <form class="form-1" action="viewgrade.php" method="post">
   <p class="field">
	<input type="text" name="name" placeholder="Student Name" />
	<i class="icon-user icon-large"></i>
  </p>	
	<p class="field">
  	<input type="text" name="roll_num" placeholder="roll number" />
	<i class="icon-lock icon-large"></i>
	</p>
	<label style="color:#6e07a4;">Major: </label>
	<select name="major" size="1" style="width:100%; border:0px;">
	<option value="IT" selected="selected">IT</option>
	<option value="EP">EP</option>
	<option value="EC">EC</option>
	<option value="MC">MC</option>
	<option value="Archi">Archi</option>
	<option value="Civil">Civil</option>
	<option value="MP">MP</option>
	</select>
   <p class="submit"><button type="submit" name="submit"><i class="icon-arrow-right icon-large"></i></button></p>
</div>
</form>
</div>
 <script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
 	<!-- footer --><div style="position: absolute; bottom:0; height:40px; margin-top:40px;">
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
