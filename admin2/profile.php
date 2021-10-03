<?php
$conn = new PDO('mysql:host=localhost; dbname=proj_db','root', '');
if (isset($_POST['submit'])) {
	
$title=$_POST['title'];
move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);			
$location=$_FILES["image"]["name"];
$discription=$_POST['discription'];


$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO profile_tbl (title, image, disctiption)
VALUES ('$title', '$location', '$discription' )";

$conn->exec($sql);
echo "<script>alert('Successfully Added!!!'); window.location='profile.php'</script>";
// }
}
// }
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Admin Profile</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">TU(Hmawbi) <span class="lite">Admin</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                   <!-- task notificatoin start -->
                  <!--  <li id="task_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="">
                            <i class="icon-task-l"></i>
                            <span class="badge bg-important"></span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 6 pending letter</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Design PSD </div>
                                        <div class="percent">90%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                            <span class="sr-only">90% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- task notificatoin end -->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/tuavator.png">
                            </span>
                            <span class="username">TU(Hmawbi) Adminstration</span>
                          <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="profile.php"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="index.php"><i class="icon_clock_alt"></i> Timeline</a>
                            </li>
                            <li>
                                <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                           
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

   <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <li>
                      <a class="" href="index.php">
                          <i class="icon_desktop"></i>
                          <span>Online Grading</span>
                      </a>
                  </li>
				  <li>
                      <a class="" href="index.php">
                          <i class="icon_document_alt"></i>
                          <span>Student Information</span>
                      </a>
                  </li>
				  <li>
                      <a class="" href="index.php">
                          <i class="icon_genius"></i>
                          <span >Teacher Info</span>
                      </a>
                  </li>
				   <li>
                      <a class="" href="index.php">
                          <i class="icon_piechart"></i>
                          <span>Registeration</span>
                      </a>
                  </li>
				   <li>
                      <a class="" href="index.php">
                          <i class="icon_documents_alt"></i>
                          <span>Log Out</span>
                      </a>
                  </li>
				</ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_documents_alt"></i>Pages</li>
						<li><i class="fa fa-user-md"></i>Profile</li>
					</ol>
				</div>
			</div>
              <div class="row">
                <!-- profile-widget -->
                <div class="col-lg-12">
                    <div class="profile-widget profile-widget-info">
                          <div class="panel-body">
                            <div class="col-lg-2 col-sm-2">
                              <h4>TU (Hmawbi)</h4>               
                              <div class="follow-ava">
                                  <img src="img/tuavator_big.png" alt="">
                              </div>
                              <h6>Administration</h6>
                            </div>
                            <div class="col-lg-4 col-sm-4 follow-info">
                                <p>Technological University (Hmawbi) Adminstration department</p>
                                <p>@tuhmawbi</p>
								<p><i class="fa fa-twitter">hmawbitweet</i></p>
                               <!-- <h6>
                                    <span><i class="icon_clock_alt"></i>11:05 AM</span>
                                    <span><i class="icon_calendar"></i>17.10.13</span>
                                    <span><i class="icon_pin_alt"></i>NY</span>
                                </h6> -->
                            </div>
                            
							
                          </div>
                    </div>
                </div>
              </div>
              <!-- page start-->
              <div class="row">
                 <div class="col-lg-12">
                    <section class="panel">
                          <header class="panel-heading tab-bg-info">
                              <ul class="nav nav-tabs">
                                  <li class="active">
                                      <a data-toggle="tab" href="#recent-activity">
                                          <i class="icon-home"></i>
                                          Activities
                                      </a>
                                  </li>
                                  <li>
                                      <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                         University Profiles
                                      </a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                          Upload Activities
                                      </a>
                                  </li>
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                  
                                  <!-- profile -->
                                  <div id="profile" class="tab-pane">
                                    <section class="panel">
                                      <div class="bio-graph-heading">
                                           Technological University is one of the Engineering Universities in Myanmar.Our University have seven major departments for IT, civil, EP, EC, Archi, MC and MP.      
                                      </div>
                                      <div class="panel-body bio-graph-info">
                                          <h1>Basic Information of Technology</h1>
										<div class="section">
		
		<p><span style="font-size: 14pt"><strong>Background History</strong></span></p>
<p><span style="font-size: 14pt">Technological University (Hmawbi) was</span></p>
<ul>
<li style="text-align: justify"><span style="font-size: 14pt">opened as a Technical High School on 23-10-1989.</span></li>
<li style="text-align: justify"><span style="font-size: 14pt">upgraded as a Government Technical Institute on 1-12-1998.</span></li>
<li style="text-align: justify"><span style="font-size: 14pt">upgraded as a Government Technological College on 8-1-2001.</span></li>
<li style="text-align: justify"><span style="font-size: 14pt">upgraded as a Technological University on 20-1-2007.</span></li>
</ul>
<p>&nbsp;</p>
<p><span style="font-size: 14pt"><strong>Location and Area</strong></span></p>
<p><span style="font-size: 14pt">The Technological University of Hmawbi is located on</span></p>
<ul>
<li style="text-align: justify"><span style="font-size: 14pt">Between mile post 33/3 and 34/0</span></li>
<li style="text-align: justify"><span style="font-size: 14pt">on the east of Yangon-Pyi highway</span></li>
<li style="text-align: justify"><span style="font-size: 14pt">Hmawbi, Yangon</span></li>
<li style="text-align: justify"><span style="font-size: 14pt">Area (78.04) acres</span></li>
</ul>
<p>&nbsp;</p>
<p><span style="font-size: 14pt"><strong>Location of TU (Hmawbi)</strong></span></p>

 <img src="img/map.jpg" alt="" width="90%">
</div>
</div>
</div>
                                  
                                        
                                  <!-- edit-profile -->
                                  <div id="edit-profile" class="tab-pane">
                                    <section class="panel">                                          
                                          <div class="panel-body bio-graph-info">
                                              <h1> Profile Info</h1>
                                              <form class="form-horizontal" role="form" action="profile.php" mathod="post">                                                  
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">caption :</label>
                                                      <div class="col-lg-10">
                                                          <input type="text" name="title" class="form-control" id="f-name" placeholder=" ">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">activity image :</label>
                                                      <div class="col-lg-10">
                                                          <input type="file" name="image" class="form-control" id="l-name" placeholder=" ">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Description :</label>
                                                      <div class="col-lg-10">
                                                          <textarea name="discription" id="" class="form-control" cols="30" rows="5"></textarea>
                                                      </div>
                                                  </div>
                                                  
                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                                        </div>
                                                  </div>
                                              </form>
                                          </div>
                                      </section>
                                  </div>
                              </div>
                          </div>
                      </section>
                 </div>
              </div>

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <div class="text-right">
            <div class="credits">
                
              <p style="padding-bottom:20px; padding-right:20px;">Develped by 5BE_IT TU(Hmawbi) project team</p> 
            </div>
        </div>
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery knob -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>

  <script>

      //knob
      $(".knob").knob();

  </script>


  </body>
</html>
