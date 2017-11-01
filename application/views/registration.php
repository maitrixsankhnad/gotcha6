<?php include('commonFunction.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Gotcha-6</title>
<meta name="description" content="">
<meta name="author" content="">
<?php include('front_include/style.php');?>
</head>

<body class="bgCover" >
<!-- Navigation -->
<?php include('front_include/header.php');?>
<div class="container"> 
  
  <!-- Marketing Icons Section -->
  <div class="row col-lg-10 col-lg-offset-1">
    <div class="col-lg-12"> <br>
      <center>
        <h1 class="page-header"> Registration </h1>
      </center>
    </div>
    <div id="info_about" class="container col-lg-8 col-lg-offset-2">
      <p>Gotcha-6’s business model describes all of the core interrelated co-operational and
        
        financial arrangements designed and developed by companies presently and in the
        
        future, as well as all core products and/or services the company offers. Based on these
        
        arrangements the company achieves its strategic goals and objectives. Below you may choose what account type you will be signing up as. </p>
    </div>
    
   	<?php if($user[0]['fld_user_type'] == 1){?>
    <div class="col-md-6"><br>
      <div class="panel panel-default">
        <div class="panel-heading">
          <center>
            <h4><i class="fa fa-fw fa-laptop"></i> Subject Matter Expert</h4>
          </center>
        </div>
        <div class="panel-body">
          <p>SME will be a proffessional in one or many service tags. Whether you want to work full time of just one night a week for a few hours makes no difference. Gotcha-6 has the power to allow you to work on what you want when you want. You will be an essential role in providing on demand support to customers in need on your watch. All you need to do is provide some information so that you may begin starting your brand. </p>
          <center>
            <a href="<?php echo site_url('dashboard/complete_registration/sme'); ?>">
            <button type="button" class="btn btn-default">Select</button>
            </a>
          </center>
        </div>
      </div>
    </div>
    <div class="col-md-6"><br>
      <div class="panel panel-default">
        <div class="panel-heading">
          <center>
            <h4><i class="fa fa-fw fa-users"></i> Resource Manager</h4>
          </center>
        </div>
        <div class="panel-body">
          <p>The Resource Manager plays a vital role. They will be involved in all projects or incidents opened and will provide front end support to the customer. They will utilize ITIL practices in incident and project handling as well as the engagement of Subject Matter Expert resources. Customer service will be the primary responsibility of the resource manager as they will also be rated by the customers.</p>
          <center>
            <a href="<?php echo site_url('dashboard/complete_registration/rm'); ?>">
            <button type="button" class="btn btn-default">Select</button>
            </a>
          </center>
        </div>
      </div>
    </div>
    <?php } else{?>
    <div class="col-md-6"><br>
      <div class="panel panel-default">
        <div class="panel-heading">
          <center>
            <h4><i class="fa fa-fw fa-laptop"></i> Customer</h4>
          </center>
        </div>
        <div class="panel-body">
          
          <center>
            <a href="<?php echo site_url('dashboard/change_status/customer'); ?>">
            <button type="button" class="btn btn-default">Select</button>
            </a>
          </center>
        </div>
      </div>
    </div>
    <div class="col-md-6"><br>
      <div class="panel panel-default">
        <div class="panel-heading">
          <center>
            <h4><i class="fa fa-fw fa-users"></i> Expert</h4>
          </center>
        </div>
        <div class="panel-body">
          
          <center>
            <a href="<?php echo site_url('dashboard/change_status/expert'); ?>">
            <button type="button" class="btn btn-default">Select</button>
            </a>
          </center>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
<?php include('front_include/script.php');?>
</body>
</html>