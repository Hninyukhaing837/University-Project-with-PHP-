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
<html >
<head>
  <meta charset="UTF-8">
  <title>Adminstration Log in</title>
  
  
  
      <link rel="stylesheet" href="css/adminstyle.css">
	  <style type="text/css">
body {
		
	background: #eedfcc url(images/bookbg.png) no-repeat center top;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	background-size:cover;
	color: #000;
	font: 14px Arial;
	margin: 0 auto;
	padding: 0;
	position: relative;
	
}
 </style> 
</head>

<body>
  <body>
<div class="container">
	<section id="content">
		<form action="adminreg.php" method="post">
			<h1>Admin Login</h1>
			<div>
				<input type="text" name="username" placeholder="Username" required="" id="username" />
			</div>
			<div>
				<input type="text" name="email" placeholder="email" required="" id="email" />
			</div>
			<div>
				<input type="password" name="password" placeholder="Password" required="" id="password" />
			</div>
			<div>
				<input type="password" name="comfirmid" placeholder="Comfirm ID" required="" id="comfirmid" />
			</div>
			<div>
				<input type="submit" value="Admin Log In" />
				<a href="index.php">Back to login Page</a>
			</div>
		</form><!-- form -->
	</section><!-- content -->
</div><!-- container -->
</body>
  
    <script  src="js/adminindex.js"></script>

</body>
</html>
