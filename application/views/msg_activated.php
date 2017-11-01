<?php
include_once('commonFunction.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Activation | Gotcha-6</title>
<meta name="description" content="">
<meta name="author" content="">
<?php include('front_include/style.php');?>
</head>

<body class="bgCover" style="padding-top:10%;">
<!-- Navigation -->
<?php include('front_include/header.php');?>
<div class="container">
  <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-default" >
      <div class="panel-heading">
        <div class="panel-title signInLebl">Account Activated</div>
      </div>
      <div style="padding-top:30px" class="panel-body" >
        <div id="login-alert" class="alert alert-success col-sm-12">You have been sucessfully activated.</div>        
        <form id="resetPassword" class="loginWalaForm form-horizontal" method="post">
          <div class="margin-bottom: 25px">
            <div class="checkbox"> 
              <div class="clearfix"></div>
              <center>
                <a href="<?=base_url('login')?>" class="btn btn-primary">Go Back to Login Page</a>
              </center>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
<?php include('front_include/script.php');?>
</html>
