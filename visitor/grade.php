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
	header("location: home.php");
	exit();
}

?>
<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.3.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.3.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logotu-208x243.png" type="image/x-icon">
  <meta name="description" content="Web Builder Description">
  <title>Grade Result</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/data-tables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section class="menu cid-qwvPZsEh6A" once="menu" id="menu1-j" data-rv-view="43">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
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
                         <img src="assets/images/logotu-208x243.png" alt="Mobirise" title="" media-simple="true" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="https://mobirise.com">
                        TU(Hmawbi)</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="home.php">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>Home                  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="about.php"><span class="mbri-menu mbr-iconfont mbr-iconfont-btn"></span>
                        
                        About Us
                    </a>
                </li></ul>
            
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.co/l">free bootstrap themes</a></section><section class="section-table cid-qxFXAbVOP2 mbr-parallax-background" id="table1-k" data-rv-view="45">

  
  <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(255, 255, 255);">
  </div>
  <div class="container container-table">
    <?php 
					if ($rows > 0 ) {
				?>
  
  <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2" style="font-size:28px; color: #232323; text-shadow: 0 3px 3px rgba(0,0,0,0.5);"><strong>The grades for <?php echo $name; ?> (<?php echo $roll_num; ?>) from <?php echo $major; ?> is :</strong></h2>
  
      
      <div class="table-wrapper">
        <div class="container">
                                
        <div class="container scroll">
          <table class="table isSearch" cellspacing="0" style="border-left:0px; border-right:0px;">
            <thead>
			<p style="font-size:18px; color: #7f01ba; text-shadow: 0 3px 3px rgba(0,0,0,0.5); float:right;"> This Informations is only for 2016-2017 mid-term Results</p>
              <tr class="table-heads ">
          
              <th class="head-item mbr-fonts-style display-7">
                      Subject</th><th class="head-item mbr-fonts-style display-7">
                      Result</th></tr>
            </thead>

            <tbody>
              
              
              
              
<tr> 
                
                
                
                
              <td class="body-item mbr-fonts-style display-7"><strong>Sub I</strong></td><td class="body-item mbr-fonts-style display-7"><?php if($rows['sub1']<=100 && $rows['sub1']>=81) {?><p style="font-size:18px; color: #06e311; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">A</p><?php }  elseif ($rows['sub1']<=80 && $rows['sub1']>=61){?> <p style="font-size:18px; color: #06e311; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">B</p><?php }  elseif($rows['sub1']<=60 && $rows['sub1']>=41){?><p style="font-size:18px; color: #eecf00; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">C</p><?php }  elseif($rows['sub1']<=40 && $rows['sub1']>=21){?><p style="font-size:18px; color: #ff7200; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">D</p><?php }  elseif($rows['sub1']<=20 && $rows['sub1']>=1){?><p style="font-size:18px; color: #ff0000; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">E</p><?php } else { echo "";} ?></td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7"><strong>Sub II</strong></td><td class="body-item mbr-fonts-style display-7"><?php if($rows['sub2']<=100 && $rows['sub2']>=81) {?><p style="font-size:18px; color: #06e311; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">A</p><?php }  elseif($rows['sub2']<=80 && $rows['sub2']>=61){?><p style="font-size:18px; color: #06e311; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">B</p><?php }  elseif($rows['sub2']<=60 && $rows['sub2']>=41){?><p style="font-size:18px; color: #eecf00; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">C</p><?php }  elseif($rows['sub2']<=40 && $rows['sub2']>=21){?><p style="font-size:18px; color: #ff7200; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">D</p><?php }  elseif($rows['sub2']<=20 && $rows['sub2']>=1){?><p style="font-size:18px; color: #ff0000; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">E</p><?php } else { echo "";} ?></td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7"><strong>Sub III</strong></td><td class="body-item mbr-fonts-style display-7"><?php if($rows['sub3']<=100 && $rows['sub3']>=81) {?><p style="font-size:18px; color: #06e311; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">A</p><?php }  elseif($rows['sub3']<=80 && $rows['sub3']>=61){?><p style="font-size:18px; color: #06e311; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">B</p><?php }  elseif($rows['sub3']<=60 && $rows['sub3']>=41){?><p style="font-size:18px; color: #eecf00; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">C</p><?php }  elseif($rows['sub3']<=40 && $rows['sub3']>=21){?><p style="font-size:18px; color: #ff7200; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">D</p><?php }  elseif($rows['sub3']<=20 && $rows['sub3']>=1){?><p style="font-size:18px; color: #ff0000; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">E</p><?php } else { echo "";} ?></td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7"><strong>Sub IV</strong></td><td class="body-item mbr-fonts-style display-7"><?php if($rows['sub4']<=100 && $rows['sub4']>=81) {?><p style="font-size:18px; color: #06e311; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">A</p><?php }  elseif($rows['sub4']<=80 && $rows['sub4']>=61){?><p style="font-size:18px; color: #06e311; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">B</p><?php }  elseif($rows['sub4']<=60 && $rows['sub4']>=41){?><p style="font-size:18px; color: #eecf00; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">C</p><?php }  elseif($rows['sub4']<=40 && $rows['sub4']>=21){?><p style="font-size:18px; color: #ff7200; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">D</p><?php }  elseif($rows['sub4']<=20 && $rows['sub4']>=1){?><p style="font-size:18px; color: #ff0000; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">E</p><?php } else { echo "";} ?></td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7"><strong>Sub V</strong></td><td class="body-item mbr-fonts-style display-7"><?php if($rows['sub5']<=100 && $rows['sub5']>=81) {?><p style="font-size:18px; color: #06e311; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">A</p><?php }  elseif($rows['sub5']<=80 && $rows['sub5']>=61){?><p style="font-size:18px; color: #06e311; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">B</p><?php }  elseif($rows['sub5']<=60 && $rows['sub5']>=41){?><p style="font-size:18px; color: #eecf00; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">C</p><?php }  elseif($rows['sub5']<=40 && $rows['sub5']>=21){?><p style="font-size:18px; color: #ff7200; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">D</p><?php }  elseif($rows['sub5']<=20 && $rows['sub5']>=1){?><p style="font-size:18px; color: #ff0000; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">E</p><?php } else { echo "";} ?></td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7"><strong>SUb VI</strong></td><td class="body-item mbr-fonts-style display-7"><?php if($rows['sub6']<=100 && $rows['sub6']>=81) {?><p style="font-size:18px; color: #06e311; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">A</p><?php }  elseif($rows['sub6']<=80 && $rows['sub6']>=61){?><p style="font-size:18px; color: #06e311; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">B</p><?php }  elseif($rows['sub6']<=60 && $rows['sub6']>=41){?><p style="font-size:18px; color: #eecf00; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">C</p><?php }  elseif($rows['sub6']<=40 && $rows['sub6']>=21){?><p style="font-size:18px; color: #ff7200; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">D</p><?php }  elseif($rows['sub6']<=20 && $rows['sub6']>=1){?><p style="font-size:18px; color: #ff0000; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">E</p><?php } else { echo "";} ?></td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7"><strong>Sub VII</strong></td><td class="body-item mbr-fonts-style display-7"><?php if($rows['sub7']<=100 && $rows['sub7']>=81) {?><p style="font-size:18px; color: #06e311; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">A</p><?php }  elseif($rows['sub7']<=80 && $rows['sub7']>=61){?><p style="font-size:18px; color: #06e311; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">B</p><?php }  elseif($rows['sub7']<=60 && $rows['sub7']>=41){?><p style="font-size:18px; color: #eecf00; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">C</p><?php }  elseif($rows['sub7']<=40 && $rows['sub7']>=21){?><p style="font-size:18px; color: #ff7200; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">D</p><?php }  elseif($rows['sub7']<=20 && $rows['sub7']>=1){?><p style="font-size:18px; color: #ff0000; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">E</p><?php } else { echo "";} ?></td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7"><strong>Sub VIII</strong></td><td class="body-item mbr-fonts-style display-7"><?php if($rows['sub1']<=100 && $rows['sub1']>=81) {?><p style="font-size:18px; color: #06e311; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">A</p><?php }  elseif($rows['sub8']<=80 && $rows['sub8']>=61){?><p style="font-size:18px; color: #06e311; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">B</p><?php }  elseif($rows['sub8']<=60 && $rows['sub8']>=41){?><p style="font-size:18px; color: #eecf00; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">C</p><?php }  elseif($rows['sub8']<=40 && $rows['sub8']>=21){?><p style="font-size:18px; color: #ff7200; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">D</p><?php }  elseif($rows['sub8']<=20 && $rows['sub8']>=1){?><p style="font-size:18px; color: #ff0000; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">E</p><?php } else { echo "";} ?></td></tr><tr>
                
                
                
                
              <td class="body-item mbr-fonts-style display-7"><strong>Sub IX</strong></td><td class="body-item mbr-fonts-style display-7"><?php if($rows['sub9']<=100 && $rows['sub9']>=81) {?><p style="font-size:18px; color: #06e311; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">A</p><?php }  elseif($rows['sub9']<=80 && $rows['sub9']>=61){?><p style="font-size:18px; color: #06e311; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">B</p><?php }  elseif($rows['sub9']<=60 && $rows['sub9']>=41){?><p style="font-size:18px; color: #eecf00; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">C</p><?php }  elseif($rows['sub9']<=40 && $rows['sub9']>=21){?><p style="font-size:18px; color: #ff7200; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">D</p><?php }  elseif($rows['sub9']<=20 && $rows['sub9']>=1){?><p style="font-size:18px; color: #ff0000; text-shadow: 0 3px 3px rgba(0,0,0,0.5); ">E</p><?php } else { echo "";} ?></td></tr><tr></tbody>
          </table>
		  <?php
} else { 
	echo '<h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2" style="font-size:28px; color: #232323; text-shadow: 0 3px 3px rgba(0,0,0,0.5);"><strong>There is no data with this information.<a href="home.php">Please try Again!</a></strong></h2>' ;
}
?>
</div>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </div>
</section>

<section once="" class="cid-qxG0NaTvqN mbr-reveal" id="footer7-n" data-rv-view="117">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            
            <div class="row">
                <div class="social-list align-right pb-2">
                    
                    
                    
                    
                    
                    
                <div class="soc-item">
                        <a href="https://twitter.com/mobirise" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon" style="color: rgb(85, 180, 212);" media-simple="true"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon" style="color: rgb(20, 157, 204);" media-simple="true"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.youtube.com/c/mobirise" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-youtube socicon" style="color: rgb(250, 8, 8);" media-simple="true"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://instagram.com/mobirise" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-googleplus socicon" style="color: rgb(255, 44, 44);" media-simple="true"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white display-7">
                    Created by 5BE_IT Project Team</p>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/data-tables/jquery.data-tables.min.js"></script>
  <script src="assets/data-tables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/jarallax/jarallax.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>