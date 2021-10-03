<!DOCTYPE html>
<html>
	<head>
	 
		<title>TU(Hmawbi) Admin Page</title>
	
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>

		<style type="text/css">
	body {
		
	background: #E8E8E8 url(img/navb.jpg) no-repeat center top;
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
		<div class="container">	
			<div class="main">
				
				<div class="side">
					<nav class="dr-menu">
						<div class="dr-trigger"><span class="dr-icon dr-icon-menu"></span><a class="dr-label"><strong>Admin Menu</strong></a></div>
						<ul>
							<li><a class="dr-icon dr-icon-user" href="grade.php" target="main">Online Grading</a></li>
							<li><a class="dr-icon dr-icon-camera" href="stu_info.php" target="main">Student Information</a></li>
							<li><a class="dr-icon dr-icon-heart" href="teacher.php" target="main">Teacher Information</a></li>
							<li><a class="dr-icon dr-icon-bullhorn" href="time.php" target="main">Time Table Schedule</a></li>
							<li><a class="dr-icon dr-icon-switch" href="logout.php" target="main">Logout</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div><!-- /container -->
		<script src="js/ytmenu.js"></script>
	</body>
</html>