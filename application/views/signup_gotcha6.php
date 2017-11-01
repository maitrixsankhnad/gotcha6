<?php include_once('commonFunction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Gotcha-6</title>
<?php include('front_include/style.php');?>
</head>

<body class="bgCover" style="padding-top:6%;">
<?php include('front_include/header.php');?>
<div class="container">
  <div id="loginbox" style="margin-top:15px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="panel-title">Sign Up</div>
        <!--<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>--> 
      </div>
      <div style="padding-top:30px" class="panel-body">
        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
        <form id="register" class="form-horizontal" method="post">
          <div class="form-group">
            <label for="email" class="col-md-3 control-label">Email</label>
            <div class="col-md-9">
              <input name="email" type="email" class="form-control" onKeyPress="$('#errorEmailMsg').slideUp();" onBlur="check_email_exists(this)" required placeholder="Email Address">
              <span id="errorEmailMsg" class="regErrorMsg">The email address you have entered is already registered</span>
            </div>
          </div>
          <div class="form-group">
            <label for="Username" class="col-md-3 control-label">Username</label>
            <div class="col-md-9">
              <input name="username" type="text" class="form-control" onKeyPress="$('#errorUserNameMsg').slideUp();" onBlur="check_user_exists(this)" id="Username" required placeholder="Username">
              <span id="errorUserNameMsg" class="regErrorMsg">The username you have entered is already registered</span>
            </div>
          </div>
          <div class="form-group">
            <label for="first_name" class="col-md-3 control-label">First Name</label>
            <div class="col-md-9">
              <input name="fname" type="text" class="form-control" id="first_name" required placeholder="First Name">
            </div>
          </div>
          <div class="form-group">
            <label for="middle_name" class="col-md-3 control-label">Middle Name</label>
            <div class="col-md-9">
              <input name="mname" type="text" class="form-control" id="middle_name" placeholder="Middle Name">
            </div>
          </div>
          <div class="form-group">
            <label for="last_name" class="col-md-3 control-label">Last Name</label>
            <div class="col-md-9">
              <input name="lname" type="text" class="form-control" id="last_name" required placeholder="Last Name">
            </div>
          </div>
          <div class="form-group">
            <label for="country" class="col-md-3 control-label">Country</label>
            <div class="col-md-9">
              <select name="country"  class="form-control" id="country" required >
       <?php foreach($country as $count): ?>
            <option value="<?php echo $count->fld_CountryCode;?>"><?php echo $count->fld_CountryName; ?></option>
            <?php endforeach; ?> 
               </select>
            </div>
          </div>
          <div class="form-group">
            <label for="timezone" class="col-md-3 control-label">Time Zone</label>
            <div class="col-md-9">
              <select name='timezone' id='timezone' style='width:373px' class="selectpicker btn dropdown-toggle btn-default">
                <option value='-12:00,0'>(-12:00) International Date Line West</option>
                <option value='-11:00,0'>(-11:00) Midway Island, Samoa</option>
                <option value='-10:00,0'>(-10:00) Hawaii</option>
                <option value='-09:00,1'>(-09:00) Alaska</option>
                <option value='-08:00,1'>(-08:00) Pacific Time (US & Canada)</option>
                <option value='-07:00,0'>(-07:00) Arizona</option>
                <option value='-07:00,1'>(-07:00) Mountain Time (US & Canada)</option>
                <option value='-06:00,0'>(-06:00) Central America, Saskatchewan</option>
                <option value='-06:00,1'>(-06:00) Central Time (US & Canada), Guadalajara, Mexico city</option>
                <option value='-05:00,0'>(-05:00) Indiana, Bogota, Lima, Quito, Rio Branco</option>
                <option value='-05:00,1'>(-05:00) Eastern time (US & Canada)</option>
                <option value='-04:00,1'>(-04:00) Atlantic time (Canada), Manaus, Santiago</option>
                <option value='-04:00,0'>(-04:00) Caracas, La Paz</option>
                <option value='-03:30,1'>(-03:30) Newfoundland</option>
                <option value='-03:00,1'>(-03:00) Greenland, Brasilia, Montevideo</option>
                <option value='-03:00,0'>(-03:00) Buenos Aires, Georgetown</option>
                <option value='-02:00,1'>(-02:00) Mid-Atlantic</option>
                <option value='-01:00,1'>(-01:00) Azores</option>
                <option value='-01:00,0'>(-01:00) Cape Verde Is.</option>
                <option value='00:00,0'>(00:00) Casablanca, Monrovia, Reykjavik</option>
                <option value='00:00,1'>(00:00) GMT: Dublin, Edinburgh, Lisbon, London</option>
                <option value='+01:00,1'>(+01:00) Amsterdam, Berlin, Rome, Vienna, Prague, Brussels</option>
                <option value='+01:00,0'>(+01:00) West Central Africa</option>
                <option value='+02:00,1'>(+02:00) Amman, Athens, Istanbul, Beirut, Cairo, Jerusalem</option>
                <option value='+02:00,0'>(+02:00) Harare, Pretoria</option>
                <option value='+03:00,1'>(+03:00) Baghdad, Moscow, St. Petersburg, Volgograd</option>
                <option value='+03:00,0'>(+03:00) Kuwait, Riyadh, Nairobi, Tbilisi</option>
                <option value='+03:30,0'>(+03:30) Tehran</option>
                <option value='+04:00,0'>(+04:00) Abu Dhadi, Muscat</option>
                <option value='+04:00,1'>(+04:00) Baku, Yerevan</option>
                <option value='+04:30,0'>(+04:30) Kabul</option>
                <option value='+05:00,1'>(+05:00) Ekaterinburg</option>
                <option value='+05:00,0'>(+05:00) Islamabad, Karachi, Tashkent</option>
                <option value='+05:30,0'>(+05:30) Chennai, Kolkata, Mumbai, New Delhi, Sri Jayawardenepura</option>
                <option value='+05:45,0'>(+05:45) Kathmandu</option>
                <option value='+06:00,0'>(+06:00) Astana, Dhaka</option>
                <option value='+06:00,1'>(+06:00) Almaty, Nonosibirsk</option>
                <option value='+06:30,0'>(+06:30) Yangon (Rangoon)</option>
                <option value='+07:00,1'>(+07:00) Krasnoyarsk</option>
                <option value='+07:00,0'>(+07:00) Bangkok, Hanoi, Jakarta</option>
                <option value='+08:00,0'>(+08:00) Beijing, Hong Kong, Singapore, Taipei</option>
                <option value='+08:00,1'>(+08:00) Irkutsk, Ulaan Bataar, Perth</option>
                <option value='+09:00,1'>(+09:00) Yakutsk</option>
                <option value='+09:00,0'>(+09:00) Seoul, Osaka, Sapporo, Tokyo</option>
                <option value='+09:30,0'>(+09:30) Darwin</option>
                <option value='+09:30,1'>(+09:30) Adelaide</option>
                <option value='+10:00,0'>(+10:00) Brisbane, Guam, Port Moresby</option>
                <option value='+10:00,1'>(+10:00) Canberra, Melbourne, Sydney, Hobart, Vladivostok</option>
                <option value='+11:00,0'>(+11:00) Magadan, Solomon Is., New Caledonia</option>
                <option value='+12:00,1'>(+12:00) Auckland, Wellington</option>
                <option value='+12:00,0'>(+12:00) Fiji, Kamchatka, Marshall Is.</option>
                <option value='+13:00,0'>(+13:00) Nuku'alofa</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="password" class="col-md-3 control-label">Password</label>
            <div class="col-md-9">
              <input id="createpassword" type="password" class="form-control" required placeholder="Password">
            </div>
          </div>
          <div class="form-group">
            <label for="password" class="col-md-3 control-label">Password</label>
            <div class="col-md-9">
              <input name="password" id="confirmpassword" type="password" class="form-control" required placeholder="Confirm Password">
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 col-md-offset-3">
              <div class="radio">
                <label>
                  <input type="radio" value="0" name="usertype" checked="checked" />
                  Customer</label>
              </div>
              <div class="radio">
                <label>
                  <input value="1" type="radio" name="usertype" />
                  Expert</label>
              </div>              
            </div>
          </div>
          <div class="form-group"> 
            <!-- Button -->
            <div class="col-md-12">
              <center>
                <br>
                <button name="btnSignUp" id="btn-signup" method="post" type="submit" class="btn btn-primary">Sign Up<i class="icon-hand-right"></i></button>
              </center>
            </div>
          </div>
          <!--<div style="border-top: 1px solid #999; padding-top:20px"  class="form-group"></div>
          <div class="col-md-offset-3 col-md-9">
            <button id="btn-fbsignup" type="button" class="btn btn-danger"><i class="icon-google"></i>Sign Up with Google</button>
          </div>-->
        </form>
      </div>
    </div>
  </div>
</div>
</body>
<?php include('front_include/script.php');?>
</html>
