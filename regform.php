
<?php
	session_start();
	require_once ('db.php');
	if (isset($_POST['reg_btn'])) {
		$fname= $_POST['fname'];
		$lname= $_POST['lname'];
		$username= $_POST['username'];
		$email= $_POST['email'];
		$password= $_POST['password'];
		$password2= $_POST['password2'];
		$birthday= $_POST['birthday'];
		$gender= $_POST['gender'];
		$address= $_POST['address'];
		$ph_num= $_POST['ph_num'];
		
		if ($password == $password2) {
			$password = md5($password);
			$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO reg_tbl(fname,lname,username,email,password,birthday,gender,address,ph_num) VALUES ('$fname','$lname','$username', '$email', '$password', '$birthday', '$gender','$address','$ph_num')";
			$dbc->exec($sql);
			echo "<p>You are now member !</p>";
			echo $_SESSION['username'] = $username;
			header("location: index.php");
		}else {
			echo  "<p>The two password doesn't match !</p>";
	}
	}
?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign Up Form</title>
  
  
		<link rel="stylesheet" type="text/css" href="css/buttonstyle.css" />
		<link rel="stylesheet" href="css/regstyle.css">
	    <script src="js/modernizr.custom.63321_0001.js"></script>

  
</head>

<body>
  
<div class="container">
  <form action="regform.php" method="post">
    <div class="row">
      <h4 style="font-size: 24px">Create Account</h4>
	  <h4>Accout Information</h4>
      <div class="input-group input-group-icon">
        <input type="text" name="fname" placeholder="First Name"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
	  <div class="input-group input-group-icon">
        <input type="text" name="lname" placeholder="Last Name"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
	  <div class="input-group input-group-icon">
        <input type="text" name="username" placeholder="Username"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="email" name="email" placeholder="Email Adress"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="password" name="password" placeholder="Password"/>
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
	  <div class="input-group input-group-icon">
        <input type="password" name="password2" placeholder="Retype Password"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
    </div>
    <div class="row">
	<div style="width:50%; padding:10px; float:left">
        <h4>Date of Birth</h4>
		
        <div class="input-group input-group-icon">
        <input type="text" name="birthday" placeholder="Date of birth"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
	 </div>
       <div style="padding:10px">
	    <h4>Gender</h4>
        <select name="gender">
			<option value="0">Male</option>
			<option value="1">Female</option>
		</select>
      </div>
	  
	</div>
	  <div class="row">
	  <h4>Contact Information</h4>
	  <div class="input-group input-group-icon">
        <input type="text" name="address" placeholder="Address"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
	  <div class="input-group input-group-icon">
        <input type="text" name="ph_num" placeholder="Phone Number"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
	 	<p>
		        <input type="submit" name="reg_btn" value="Register Here" class="action-button shadow animate blue">
		    </p>
				    
		</form>		
			
    	</div>
		
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/regindex.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
		<script type="text/javascript">
		$(function(){
			$('input, textarea').placeholder();
		});
		</script>

</body>
</html>
