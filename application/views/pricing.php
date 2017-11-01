<?php 
	session_start(); 
	require 'utilities.php';
	if(!guard())
	{
		header("Location: logout.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gotcha-6</title>

    <!-- Bootstrap -->
    <link href="../bower_components/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- jVectorMap -->
    <link href="../bower_components/gentelella/build/css/maps/jquery-jvectormap-2.0.3.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="../bower_components/gentelella/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-laptop"></i> <span>Gotcha-6</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="../bower_components/gentelella/production/images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php if(isset($_SESSION['first_name'])){echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];} ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index2.php">Dashboard</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Incidents <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="create_incident.php">New Incident</a></li>
                      <li><a href="form.php">Incident Form</a></li>
                      <li><a href="pricing.php">Plans</a></li>
                    </ul>
                  </li>
                  
                  
                  
                                 
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i>  <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="../bower_components/gentelella/production/images/user.png" alt=""><?php if(isset($_SESSION['first_name'])){echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];} ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profile_sme.html">Profile</a></li>
                    
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i>Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="../bower_components/gentelella/production/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="../bower_components/gentelella/production/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="../bower_components/gentelella/production/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="../bower_components/gentelella/production/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main"><br><br><br>
          <center><h1>Pricing/Plans Available</h1></center><br>
          <div class="row">
              

            <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bronze</h3>
                    </div>
                    <div id="bronze-price" class="panel-body">
                        <span class="price"><sup>$</sup>185<sup>00</sup></span>
                        <span class="period">per hour</span>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Best Effort</strong> Service Commitment</li>
                        <li class="list-group-item"><strong>Updates</strong> Every 60 min</li>
                        <li class="list-group-item"><a href="#" class="btn btn-primary">Select</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div id="gold-price" class="panel panel-primary text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">Gold <span class="label label-success">Best Value</span></h3>
                    </div>
                    <div class="panel-body">
                        <span class="price"><sup>$</sup>250<sup>00</sup></span>
                        <span class="period">per hour</span>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Next Business Day</strong> Service Level</li>
                        <li class="list-group-item"><strong>Updates</strong> Every 30 min</li>
                        <li class="list-group-item"><a href="#" class="btn btn-primary">Select</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div id="platinum-price" class="panel panel-default text-center">
                    <div class="panel-heading panel-heading-platinum">
                        <h3 class="panel-title">Platinum</h3>
                    </div>
                    <div class="panel-body">
                        <span class="price"><sup>$</sup>1,000<sup>00</sup></span>
                        <span class="period">+ $250 per hour</span>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>3 Hour</strong> Service Level</li>
                        <li class="list-group-item"><strong>Updates </strong> Every 30 min</li>
                        <li class="list-group-item"><a href="#" class="btn btn-primary">Select</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
      </div>
    </div>


            
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-left">
            Gotcha-6
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../bower_components/gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../bower_components/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  
    
    <!-- Custom Theme Scripts -->
    <script src="../bower_components/gentelella/build/js/custom.min.js"></script>

    <!-- /bootstrap-daterangepicker -->
  </body>
</html>