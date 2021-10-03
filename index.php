<?php
session_start();
?>
<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
	echo '<ul style="padding:0; color:red;">';
	foreach($_SESSION['ERRMSG_ARR'] as $msg) {
		echo '<li>',$msg,'</li>'; 
	}
	echo '</ul>';
	unset($_SESSION['ERRMSG_ARR']);
}
?>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>TU (Hmawbi)</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" href="css/adminstyle.css">
        <link rel="stylesheet" type="text/css" href="css/loginstyle.css" />
		<script src="js/modernizr.custom.63321_0001.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>	
			@import url(http://fonts.googleapis.com/css?family=Montserrat:400,700|Handlee);
			body {
				
				background: #eedfcc url(images/bg4.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size:cover;
			}
			.container > header h1 {
				font-size:40px;
				color: #054e4f;
				text-shadow: 0 3px 3px rgba(0,0,0,0.5);
			}
			.container > header h2 {
				color: #0dbed8;
				text-shadow: 0 3px 3px rgba(0,0,0,0.5);
			}
			#images {
				opacity:60%;
			}
		</style>
    </head>
	<?php
	require 'connect.php';
?>
    <body>
        <div class="container">
			<header>
				<img src="images/tulogo.png" alt="logo" width="280px" height="auto" id="images" />
				<h1><strong>Technological University (Hmawbi)</strong></h1>
				<h2>One of the best Technological University in Myanmar.</h2>
								
			</header>
			
			<section class="main">
				<form class="form-5 clearfix" action="login.php" method="post">
				    <p>
				        <input type="text" id="username" name="username" placeholder="Username" required="">
				        <input type="password" name="password" id="password" placeholder="Password" required=""> 
				    </p>
				    <button type="submit" name="submit">
				    	<i class="icon-arrow-right"></i>
				    	 <span>Sign in</span>
				    </button>     
				</form>​​​​
				<form class="form-4" action="regform.php" method="post">
				<p>
				        <input type="submit" name="submit" value="Register Here">
				    </p>
				    </button>
					<br />			
				</form>​​​​
				<form class="form-4" action="adminlogin.php" method="post">
				<p>
				        <input type="submit" name="submit" value="Admin Login">
				    </p>
				    </button>
				</form>​​​​
			</section>
			</div>
			 <div style="text-align:right; align:right; vertical-align:bottom; color:#ffffff;">
				<p style="padding-bottom:20px; padding-right:20px;">Develped by 5BE_IT TU(Hmawbi) project team</p>  
             </div>
		<!-- jQuery if needed -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
		<script  src="js/adminindex.js"></script>
		<script type="text/javascript">
		$(function(){
			$('input, textarea').placeholder();
		});
		</script>
    </body>
</html>