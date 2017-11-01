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
<!-- iCheck -->
<link href="../bower_components/gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
<!-- bootstrap-wysiwyg -->
<link href="../bower_components/gentelella/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
<!-- Select2 -->
<link href="../bower_components/gentelella/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
<!-- Switchery -->
<link href="../bower_components/gentelella/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
<!-- starrr -->
<link href="../bower_components/gentelella/vendors/starrr/dist/starrr.css" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="../bower_components/gentelella/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
  <div class="main_container">
    <div class="col-md-3 left_col">
      <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;"> <a href="index.php" class="site_title"><i class="fa fa-laptop"></i> <span>Gotcha-6</span></a> </div>
        <div class="clearfix"></div>
        
        <!-- menu profile quick info -->
        <div class="profile">
          <div class="profile_pic"> <img src="../bower_components/gentelella/production/images/user.png" alt="..." class="img-circle profile_img"> </div>
          <div class="profile_info"> <span>Welcome,</span>
            <h2>
              <?php if(isset($_SESSION['first_name'])){echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];} ?>
            </h2>
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
                  <li><a href="form.php">Incident Update</a></li>
                  <li><a href="pricing.php">Plans</a></li>
                </ul>
              </li>
              <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> App <span class="label label-success pull-right">Coming Soon</span></a></li>
            </ul>
          </div>
        </div>
        <!-- /sidebar menu --> 
        
        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small"> <a data-toggle="tooltip" data-placement="top" title="Settings"> <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> </a> <a data-toggle="tooltip" data-placement="top" title="FullScreen"> <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span> </a> <a data-toggle="tooltip" data-placement="top" title="Lock"> <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span> </a> <a data-toggle="tooltip" data-placement="top" title="Logout"> <span class="glyphicon glyphicon-off" aria-hidden="true"></span> </a> </div>
        <!-- /menu footer buttons --> 
      </div>
    </div>
    
    <!-- top navigation -->
    <div class="top_nav">
      <div class="nav_menu">
        <nav class="" role="navigation">
          <div class="nav toggle"> <a id="menu_toggle"><i class="fa fa-bars"></i></a> </div>
          <ul class="nav navbar-nav navbar-right">
            <li class=""> <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="../bower_components/gentelella/production/images/user.png" alt="">
              <?php if(isset($_SESSION['first_name'])){echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];} ?>
              <span class=" fa fa-angle-down"></span> </a>
              <ul class="dropdown-menu dropdown-usermenu pull-right">
                <li><a href="profile_sme.php"> Profile</a></li>
                <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out </a></li>
              </ul>
            </li>
            <li role="presentation" class="dropdown"> <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false"> <i class="fa fa-envelope-o"></i> <span class="badge bg-green">6</span> </a>
              <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                <li> <a> <span class="image"><img src="../bower_components/gentelella/production/images/img.jpg" alt="Profile Image" /></span> <span> <span>John Smith</span> <span class="time">3 mins ago</span> </span> <span class="message"> Film festivals used to be do-or-die moments for movie makers. They were where... </span> </a> </li>
                <li> <a> <span class="image"><img src="../bower_components/gentelella/production/images/img.jpg" alt="Profile Image" /></span> <span> <span>John Smith</span> <span class="time">3 mins ago</span> </span> <span class="message"> Film festivals used to be do-or-die moments for movie makers. They were where... </span> </a> </li>
                <li> <a> <span class="image"><img src="../bower_components/gentelella/production/images/img.jpg" alt="Profile Image" /></span> <span> <span>John Smith</span> <span class="time">3 mins ago</span> </span> <span class="message"> Film festivals used to be do-or-die moments for movie makers. They were where... </span> </a> </li>
                <li> <a> <span class="image"><img src="../bower_components/gentelella/production/images/img.jpg" alt="Profile Image" /></span> <span> <span>John Smith</span> <span class="time">3 mins ago</span> </span> <span class="message"> Film festivals used to be do-or-die moments for movie makers. They were where... </span> </a> </li>
                <li>
                  <div class="text-center"> <a> <strong>See All Alerts</strong> <i class="fa fa-angle-right"></i> </a> </div>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- /top navigation --> 
    
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <center>
              <h3>Create New Incident</h3>
            </center>
          </div>
          <div class="title_right">
            <div class="col-md-6 col-sm-6 col-xs-12 form-group pull-right top_search">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Browse Service Catalog">
                <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
                </span> </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>New Incident<small>Access to Gotch-6 Resources</small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a> </li>
                    <li><a href="#">Settings 2</a> </li>
                  </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <br />
            <form class="form-horizontal form-label-left">
            <div class="container">
            <form class="form-horizontal" role="form">
              <div class="row">
                <div class="form-group">
                  <label for="email" class="col-sm-3 control-label">Incident Title</label>
                  <div class="col-sm-9">
                    <input type="email" id="incident_title" placeholder="ex. Security Flaws for Employees" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                  <label for="email" class="col-sm-3 control-label">Add Service Tags</label>
                  <div class="col-sm-9">
                    <input id="service_tags" type="text" class="tags form-control" placeholder="Enter a Tag" />
                    <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 0px;"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                  <label for="email" class="col-sm-3 control-label">Brief Summary</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" rows="5" id="comment" placeholder="Enter a Brief Summary"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                  <label for="email" class="col-sm-3 control-label">Email</label>
                  <div class="col-sm-9">
                    <input type="email" id="email" placeholder="Email" class="form-control">
                  </div>
                </div>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label class="control-label col-sm-3">Optional</label>
                <div class="col-sm-9">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" id="calorieCheckbox" value="Low calorie">
                      Push Notifications on updates </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" id="saltCheckbox" value="Low salt">
                      Email Confirmation </label>
                  </div>
                </div>
                <center>
                  <button class="btn btn-primary">Submit</button>
                </center>
              </div>
              <!-- /.form-group -->
              
            </form>
            
              </div>
            <!-- /form --> 
            
          </div>
          <!-- ./container --> 
          
        </div>
      </div>
    </div>
  </div>
</div>

<!-- footer content -->
<footer>
  <div class=""> Gotcha-6 Technologies </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- jQuery --> 
<script src="../bower_components/gentelella/vendors/jquery/dist/jquery.min.js"></script> 
<!-- Bootstrap --> 
<script src="../bower_components/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script> 
<!-- jQuery Tags Input --> 
<script src="../bower_components/gentelella/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script> 
<!-- FastClick --> 
<script src="../bower_components/gentelella/vendors/fastclick/lib/fastclick.js"></script> 
<!-- NProgress --> 
<script src="../bower_components/gentelella/vendors/nprogress/nprogress.js"></script> 
<!-- Chart.js --> 
<script src="../bower_components/gentelella/vendors/Chart.js/dist/Chart.min.js"></script> 
<!-- jQuery Sparklines --> 
<script src="../bower_components/gentelella/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script> 
<!-- Flot --> 
<script src="../bower_components/gentelella/vendors/Flot/jquery.flot.js"></script> 
<script src="../bower_components/gentelella/vendors/Flot/jquery.flot.pie.js"></script> 
<script src="../bower_components/gentelella/vendors/Flot/jquery.flot.time.js"></script> 
<script src="../bower_components/gentelella/vendors/Flot/jquery.flot.stack.js"></script> 
<script src="../bower_components/gentelella/vendors/Flot/jquery.flot.resize.js"></script> 
<!-- Flot plugins --> 
<script src="js/flot/jquery.flot.orderBars.js"></script> 
<script src="js/flot/date.js"></script> 
<script src="js/flot/jquery.flot.spline.js"></script> 
<script src="js/flot/curvedLines.js"></script> 
<!-- bootstrap-daterangepicker --> 
<script src="js/moment/moment.min.js"></script> 
<script src="js/datepicker/daterangepicker.js"></script> 

<!-- Custom Theme Scripts --> 
<script src="../bower_components/gentelella/build/js/custom.min.js"></script> 

<!-- jQuery Tags Input --> 
<script>
      function onAddTag(tag) {
        alert("Added a tag: " + tag);
      }

      function onRemoveTag(tag) {
        alert("Removed a tag: " + tag);
      }

      function onChangeTag(input, tag) {
        alert("Changed a tag: " + tag);
      }

      $(document).ready(function() {
        $('#tags_1').tagsInput({
          width: 'auto'
        });
      });
    </script> 
<!-- /jQuery Tags Input --> 

<!-- bootstrap-daterangepicker --> 
<script type="text/javascript">
      $(document).ready(function() {

        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
          minDate: '01/01/2012',
          maxDate: '12/31/2015',
          dateLimit: {
            days: 60
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'MM/DD/YYYY',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
          console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
          console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
          console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });
        $('#options1').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
          $('#reportrange').data('daterangepicker').remove();
        });
      });
    </script> 
<!-- /bootstrap-daterangepicker -->
</body>
</html>