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

$get_id=$_REQUEST['id'];
$result = $conn->prepare("SELECT * FROM stu_tbl Where id ='$get_id'  ");
$result->execute();
$row = $result->fetch();
$id=$row['id'];
?>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.3.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.3.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logotu-208x243.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Student</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/data-tables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section class="menu cid-qwvPZsEh6A" once="menu" id="menu1-22" data-rv-view="720">
<nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-toggleable-sm bg-color transparent">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="http://mobileview.php">
                         <img src="assets/images/logotu-208x243.png" alt="Mobirise" title="" media-simple="true" style="height: 4rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-primary display-4" href="home.php">
                        TU(Hmawbi)</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-secondary display-4" href="home.php">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>Home                  </a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link link text-secondary display-4" href="teacher.php">Teacher</a>
                </li><li class="nav-item"><a class="nav-link link text-secondary display-4" href="student.php">Student</a></li><li class="nav-item"><a class="nav-link link text-secondary display-4" href="activity.php">Activities</a></li><li class="nav-item"><a class="nav-link link text-secondary display-4" href="department.php">Departments</a></li><li class="nav-item"><a class="nav-link link text-secondary display-4" href="about.php">About</a></li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="logout.php">Log Out</a></div>
        </div>
    </nav>
</section>
<br><br>
<table border="0" align="center" cellspacing="20px" style="padding:3em; width: 55%;">
  <tr>    <th width="130" scope="col" valign="top" align="left"><?php if($row['image'] != ""): ?>
									<img src="admin2/uploads/<?php echo $row['image']; ?>" width="130px" height="160px" style="border:1px solid #333333;">
									<?php else: ?>
									<img src="admin2/img/default.png" width="130px" height="160px" style="border:1px solid #333333;">
									<?php endif; ?></th>
    <td colspan="3" align="center" valign="top" ><center><h2 style="font-size:34px; color: #19abff; text-shadow: 0 3px 3px rgba(0,0,0,0.8); padding:10px;"><strong>Technological University <br>(Hmawbi)<br><img src="img/tutu.png" style="width:70px;height:auto; filter:drop-shadow( 0 5px 6px #555);"/></strong></h2></center></td>
  </tr>
  
  <tr   style="padding:3em; padding-bottom:3em;">
    <th width="20%" height="50" align="left" scope="row">Student Name:</th>
    <td width="30%" style="border-bottom: 2px solid #6e02b2;" valign="bottom"><?php echo $row['name']; ?> </td>
    <th width="20%" align="left"><strong>Roll Number:</strong></th>
    <td width="30%" style="border-bottom: 2px solid #6e02b2;" valign="bottom"><?php echo $row['rollnum']; ?></td>
	  </tr >
	 <br>
	<br>
   <tr   style="padding:3em;">
    <th align="left" height="50" scope="row">Major:</th>
    <td style="border-bottom: 2px solid #6e02b2;" valign="bottom"><?php echo $row['major']; ?></td>
    <th align="left">Year:</th>
    <td style="border-bottom: 2px solid #6e02b2;" valign="bottom"><?php echo $row['year']; ?></td>
  </tr>
  <tr border="4">
    <th align="left" height="50" scope="row">Father's Name:</th>
    <td style="border-bottom: 2px solid #6e02b2;" valign="bottom"><?php echo $row['father']; ?></td>
    <th align="left"><strong>NRC Number:</strong></th>
    <td style="border-bottom: 2px solid #6e02b2;" valign="bottom"><?php echo $row['nrc_no']; ?></td>
  </tr>
  <tr border="4">
    <th align="left" height="50" scope="row">Phone Number:</th>
    <td style="border-bottom: 2px solid #6e02b2;" valign="bottom"><?php echo $row['phno']; ?></td>
    <th align="left"><strong>Date of Birth:</strong></th>
    <td style="border-bottom: 2px solid #6e02b2;" valign="bottom"><?php echo $row['bdate']; ?></td>
  </tr>
  <tr border="4">
    <th align="left" height="50" scope="row">Email:</th>
    <td style="border-bottom: 2px solid #6e02b2;" valign="bottom"><?php echo $row['email']; ?></td>
    <th align="left"><strong>gender:</strong></th>
	<?php if( $row['gender'] == 0){ ?>
	<td style="border-bottom: 2px solid #6e02b2;" valign="bottom">Male</td>
	<?php } else { ?>
	<td style="border-bottom: 2px solid #6e02b2;" valign="bottom">Female</td>
	</tr>
	<?php
	}
	?>
    
  </tr>
  <tr border="4">
    <th height="63" height="50" align="left" valign="top" scope="row">Address:</th>
    <td colspan="3" align="left" style="border-bottom: 2px solid #6e02b2;" valign="bottom"><?php echo $row['address']; ?></td>
   </tr>
<tr><td colspan="4" height="60"><a href="student.php" class="btn btn-md btn-primary display-4" style=" float:right; text-shadow: 0 3px 3px rgba(0,0,0,0.8);">Back Page</a></td></tr>
</table>


<section class="cid-qwvPZuffW8" id="footer1-19" data-rv-view="717">

    

    

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    
                        <img src="assets/images/logotu-208x243.png" alt="Mobirise" title="" media-simple="true">
                    
                </div>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Address
                </h5>
                <p class="mbr-text">on the east of Yangon-Pyi Highway, Hmawbi, Yangon&nbsp;<br></p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Contacts
                </h5>
                <p class="mbr-text">
                    Email: TU(Hmawbi)@gmail.com &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>Phone: 01993939<br>Fax: +95923430433</p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3"></h5>
                <p class="mbr-text"></p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        Created by 5BE_IT Project Team</p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon" style="color: rgb(85, 180, 212);" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon" style="color: rgb(20, 157, 204);" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-youtube socicon" style="color: rgb(250, 8, 8);" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com/mobirise" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-googleplus socicon" style="color: rgb(255, 44, 44);" media-simple="true"></span>
                            </a>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/data-tables/jquery.data-tables.min.js"></script>
  <script src="assets/data-tables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/jarallax/jarallax.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>

</html>