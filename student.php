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
<section class="menu cid-qwvPZsEh6A" once="menu" id="menu1-16" data-rv-view="683">

    

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
                <span class="navbar-caption-wrap"><a class="navbar-caption text-primary display-4" href="https://mobirise.com">
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

<section class="engine"><a href="https://mobirise.co/f">bootstrap builder</a></section><section class="section-table cid-qxRRxaUKWO mbr-parallax-background" id="table1-21" data-rv-view="685">

  
  <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(239, 239, 239);">
  </div>
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong>Information of University Student</strong></h2>
      <div class="row align-center" align="center">
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
             <form action="student.php" method="post" align="center">
&nbsp; &nbsp; <select id="major" name="major" size="1" style="width:90%; border:0px; padding:10px;" class="dropdown-toggle" data-toggle="dropdown">
	<option value="IT" selected="selected">IT</option>
	<option value="EP" >EP</option>
	<option value="EC">EC</option>
	<option value="MC">MC</option>
	<option value="Archi">Archi</option>
	<option value="Civil">Civil</option>
	<option value="MP">MP</option>
</select>
</div>
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
<select id="year" name="year" size="1" style="width:90%;border:0px; padding:10px;">
	<option value="First Year" selected="selected">First Year</option>
	<option value="Second Year" >Second Year</option>
	<option value="Third Year">Third Year</option>
	<option value="Fourth Year">Fourth Year</option>
	<option value="Fifth Year">Fifth Year</option>
	<option value="Sixth Year" disabled="disabled">Sixth Year</option>
</select>
</div>
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
<input type="submit" name="search_btn" value="Search" class="btn btn-success" style="width:80%;border:0px; padding:10px;"/>
</div>
</label>
</form><br />
</div>
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0" style="border-left:0px; border-right:0px;">
            <thead>
              <tr class="table-heads ">
                  
                  
                  
                  
              <th class="head-item mbr-fonts-style display-7">Roll Number</th>
					  <th class="head-item mbr-fonts-style display-7">
                      Profile</th>
					  <th class="head-item mbr-fonts-style display-7">
                      Name</th>
					  <th class="head-item mbr-fonts-style display-7">
                      Major</th>
					  <th class="head-item mbr-fonts-style display-7">Year</th>
					  <th class="head-item mbr-fonts-style display-7">Action</th></tr>
            </thead>
 <?php
if (isset($_POST['search_btn'])) {
$major = $_POST['major'];
$year = $_POST['year'];
$query = "SELECT * FROM stu_tbl WHERE major='$major' AND year='$year'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
		extract($row);
		
		?>
            <tbody>
            
            <tr> 
             
              <td class="body-item mbr-fonts-style display-7"><?php echo $row['rollnum']?></td>
			  <td class="body-item mbr-fonts-style display-7"><?php if($row['image'] != ""): ?>
									<img src="admin2/uploads/<?php echo $row['image']; ?>" width="50px" height="60px" style="border:1px solid #333333;">
									<?php else: ?>
									<img src="admin2/img/default.png" width="50px" height="60px" style="border:1px solid #333333;">
									<?php endif; ?></td>
			  <td class="body-item mbr-fonts-style display-7"><?php echo $row['name']?></td>
			  <td class="body-item mbr-fonts-style display-7"><?php echo $row['major']?></td>
			  <td class="body-item mbr-fonts-style display-7"><?php echo $row['year']?></td>
			  <td class="body-item mbr-fonts-style display-7"><a href="display.php<?php echo '?id='.$id; ?>">View More</a></td>
			</tr></tbody>
				<?php
}
}

 ?>
          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Showing</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">entries</span>
             </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </div>
</section>

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