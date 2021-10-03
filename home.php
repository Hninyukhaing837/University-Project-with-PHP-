<!DOCTYPE html>
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
	<style>
		body {
	background: #E8E8E8 url(img/gk.jpg) no-repeat center top;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	background-size:cover;
	color: #000;
	font: 14px Arial;
	padding: 0;
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

                              
        <div class="container">
           
            
            <div class="content">
             
                <ul class="ca-menu">
                    <li>
                        <a href="grade.php">
                            <span class="ca-icon">F</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Online Grading</h2>
                                <h3 class="ca-sub">See your personal grade</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="stu_info.php">
                            <span class="ca-icon">H</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Student's Information</h2>
                                <h3 class="ca-sub">University student's record</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="teacher.php">
                            <span class="ca-icon">A</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Teacher's Information</h2>
                                <h3 class="ca-sub">Duty at University for now</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="onlineregister.php">
                            <span class="ca-icon">K</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Online Registration</h2>
                                <h3 class="ca-sub">You can register to University!</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="about.php">
                            <span class="ca-icon">L</span>
                            <div class="ca-content">
                                <h2 class="ca-main">About/Contact Us</h2>
                                <h3 class="ca-sub">About ours and feedback to us!</h3>
                            </div>
                        </a>
                    </li>
                </ul>
            </div><!-- content -->
        </div>
		<!-- footer --><div style="text-align:right; align:right; vertical-align:bottom;">
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