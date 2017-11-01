<?php
include_once('commonFunction.php'); 
//Google Login Start
include_once 'google/gpConfig.php';
include_once 'google/User.php';
$authUrl = $gClient->createAuthUrl();
$googleButton = filter_var($authUrl, FILTER_SANITIZE_URL);
//Google Login End
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$loginType =='admin' ? 'Admin Login - ':''?> Gotcha-6</title>
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
        <div class="panel-title signInLebl"><?=$loginType =='admin' ? 'Admin Login':'Sign In'?></div>
        <!--<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>--> 
      </div>
      <div style="padding-top:30px" class="panel-body" >
        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
        
        <form id="<?=$loginType =='admin' ? 'adminlogin':'login-form'?>" class="loginWalaForm form-horizontal" method="post">
          <div style="margin-bottom: 25px" class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="email" id="login-username" type="text" class="form-control" required value="" placeholder="Email">
          </div>
          <div style="margin-bottom: 25px" class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input name="password" id="login-password" type="password" class="form-control" required placeholder="password">
          </div>
          <div class="margin-bottom: 25px">
            <div class="checkbox"> 
              <label class="pull-left"><input name="rememberMe" type="checkbox">Remember Me</label>
              <div class="pull-right">
                <a onClick="toggleLostPass(1)" href="javascript:;">Lost your password?</a>
              </div>
              <div class="clearfix"></div>
              <center>
                <button name="btnLogIn" id="btn-login" type="submit" class="btn btn-primary">Log In</button>
              </center>
            </div>
          </div>
          <?php
		  if($loginType != 'admin'){
		  ?>
          <div class="form-group">
            <div class="col-md-12 control">
              <div style="margin-top:10px" class="form-group"> 
                <div class="col-sm-12 controls">
                  <center>
                    <a href="<?=$googleButton?>">
                    <div name="googlebtn" type="button" class="btn btn-google"><i class="fa fa-google"></i> Sign in with Google</div>
                    </a> <a href="login/linkedin">
                    <button name="linkedinbtn" type="button" class="btn btn-linkedin"><i class="fa fa-linkedin"></i> Sign in with LinkedIn</button>
                    </a>
                  </center>
                </div>
              </div>
              <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" > Don't have an account? <a href="register">Sign Up Here</a> </div>
            </div>
          </div>
          <?php
		  }
		  ?>
        </form>
        
        <form id="forgetPassword" class="forgetPasswordWalaForm form-horizontal" method="post">
          <input type="hidden" name="type" value="<?=$loginType !='admin' ? 1:2?>">
          <div style="margin-bottom: 25px" class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="email" type="text" class="form-control" required placeholder="Email">
          </div>
          <div class="margin-bottom: 25px">
            <div class="checkbox">
              
              <div class="clearfix"></div>
              <center>
                <button name="btnLogIn" id="btn-login" type="submit" class="btn btn-primary">Reset Password</button>
              </center>
            </div>
          </div><br>
          <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" > Don't have an account? <a href="register">Sign Up Here</a> or <a onClick="toggleLostPass(2)" href="javascript:;">Login Now</a> </div>
        </form>
      </div>
    </div>
  </div>
  <!--<div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="panel-title">Sign Up</div>
        </a>
        <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
      </div>
      <div class="panel-body" > </div>
    </div>
  </div>--> 
</div>
</body>
<?php include('front_include/script.php');?>
</html>
