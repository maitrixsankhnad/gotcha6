<?php
include_once('commonFunction.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Reset Password | Gotcha-6</title>
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
        <div class="panel-title signInLebl">Reset Password</div>
      </div>
      <div style="padding-top:30px" class="panel-body" >
        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
        
        <form id="resetPassword" class="loginWalaForm form-horizontal" method="post">
          <input type="hidden" value="<?=$type?>" name="type" />
          <input type="hidden" value="<?=$email?>" name="email" />
          <input type="hidden" value="<?=$id?>" name="id" />
          <div style="margin-bottom: 25px" class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="nPass" type="password" class="form-control nPassword" required placeholder="New Password">
          </div>
          <div style="margin-bottom: 25px" class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="password" class="form-control cPassword" required placeholder="Confirm Password">
          </div>
          <div class="margin-bottom: 25px">
            <div class="checkbox"> 
              <div class="clearfix"></div>
              <center>
                <button name="btnLogIn" id="btn-login" type="submit" class="btn btn-primary">Update Password</button>
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
