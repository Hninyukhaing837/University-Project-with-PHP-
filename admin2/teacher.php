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

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>TU(Hmawbi) Admin Page</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">	
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
	<!-- for tables -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
	<!-- for tables -->
  
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
                                <a href="home.php"><i class="icon_clock_alt"></i> Timeline</a>
                            </li>
                            <li>
                                <a href="#myModal1" data-toggle="modal"><i class="icon_key_alt"></i> Log Out</a>
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
                  <li>
                      <a class="" href="home.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <li>
                      <a class="" href="grade.php">
                          <i class="icon_desktop"></i>
                          <span>Online Grading</span>
                      </a>
                  </li>
				  <li>
                      <a class="" href="stuinfo.php">
                          <i class="icon_document_alt"></i>
                          <span>Student Information</span>
                      </a>
                  </li>
				  <li class="active">
                      <a  href="teacher.php">
                          <i class="icon_genius"></i>
                          <span >Teacher Info</span>
                      </a>
                  </li>
				   <li>
                      <a class="" href="registerview.php">
                          <i class="icon_piechart"></i>
                          <span>Registeration</span>
                      </a>
                  </li>
				   <li>
                      <a class="" href="#myModal1" data-toggle="modal">
                          <i class="icon_documents_alt"></i>
                          <span>Log Out</span>
                      </a>
                  </li>
				</ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!-- Modal -->
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                            <a href="#myModal"><button class="btn btn-warning" type="button">Yes</button></a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- modal -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="home.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Teacher</li>						  	
					</ol>
				</div>
			</div>
             <div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
             <form action="teacher.php" method="post">
&nbsp; &nbsp; <select id="major" name="major" size="1" style="width:90%; border:0px; padding:10px;" class="dropdown-toggle" data-toggle="dropdown">
	<option value="IT" selected="selected">IT</option>
	<option value="EP" >EP</option>
	<option value="EC">EC</option>
	<option value="MC">MC</option>
	<option value="Archi">Archi</option>
	<option value="Civil">Civil</option>
	<option value="MP">MP</option>
	<option value="MP">English</option>
	<option value="MP">Math</option>
	<option value="MP">Myanmar</option>
	<option value="MP">Physic</option>
	<option value="MP">Chemistry</option>
	<option value="MP">staff Affair</option>
	<option value="MP">student Affair</option>
	</select>
</div>
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
<input type="submit" name="search_btn" value="Search" class="btn btn-success" style="width:80%;border:0px; padding:10px;"/>
</div>
</label>
</form><br />
</div>
<br><br><br>

<div class="row">
               	
				<div class="col-lg-12 col-md-12">
<!-- Advanced Tables -->
                    <center> <div class="panel panel-default" style="width:95%; float:center;" align="center">
                        <div class="panel-heading" style="font-size:20px; color: #33594a; text-shadow: 0 3px 3px rgba(0,0,0,0.8); padding:10px;">
                          <strong>  Information of university Teachers </strong><p style="float:right;"><?php include ('tmodal_add.php'); ?><p>
                        </div>
						
						<div class="panel-body">
                            <div class="table-responsive">
							    <table class="table" id="dataTables-example" >
    <thead>
    	<tr style="font-size:20px; color: #9bb106; text-shadow: 0 3px 3px rgba(0,0,0,0.5); padding:10px;">
			<td scope="col">No</td>
        	<td scope="col">Profile</td>
            <td scope="col">Name</td>
			<td scope="col">Major</td>
			<td scope="col">Position</td>
			<td scope="col">Contact Number</td>
			<td scope="col">Action</td>
            </tr>
    </thead>
 <?php
if (isset($_POST['search_btn'])) {
$major = $_POST['major'];
$query = "SELECT * FROM tinfo_tbl WHERE major='$major'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$count=0;
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
		extract($row);
		$count++;
		?>
   <tbody>
<tr  style="font-size:16px; color: #7a7a7a;"><td><?php echo $count;?></td>
	<td style="text-align:center; margin-top:10px; word-break:break-all; line-height:100px;">
									<?php if($row['image'] != ""): ?>
									<img src="uploads/<?php echo $row['image']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
									<?php else: ?>
									<img src="img/default.png" width="100px" height="100px" style="border:1px solid #333333;">
									<?php endif; ?>
								</td>
	<td><?php echo $row['tname']?></td>
	<td><?php echo $row['major']?></td>
	<td><?php echo $row['position']?></td>
	<td><?php echo $row['ph_num']?></td>
	<td>		<?php include ('tedit.php'); ?>
		<a href="#delete<?php echo $id;?>" data-toggle="modal" class="btn btn-danger" >Delete </a></td>
	</tr>
	<!-- Modal -->
                              <div class="modal fade" id="delete<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h4 class="modal-title" style="color:#ff1934;">DELETE !</h4>
                                          </div>
                                          <div class="modal-body">

                                             Are you sure, You want to delete ! !

                                          </div>
                                          <div class="modal-footer">
                                            <a href="tdelete.php<?php echo '?id='.$id; ?>"><button class="btn btn-danger" type="button">Yes</button></a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- modal -->
	</tbody>
	<?php
}
}
 ?>
</table>
</div>
</div>
</div>
</div>
</div>
 
            


          <div class="text-right">
          <div class="credits">
              
              <p style="padding-bottom:20px; padding-right:20px;">Develped by 5BE_IT TU(Hmawbi) project team</p>  
            </div>
        </div>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
	<script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
	<script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
	<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="js/xcharts.min.js"></script>
	<script src="js/jquery.autosize.min.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script src="js/gdp-data.js"></script>	
	<script src="js/morris.min.js"></script>
	<script src="js/sparklines.js"></script>	
	<script src="js/charts.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});

  </script>
  <!-- for table -->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script><!-- for table -->

  </body>
</html>
