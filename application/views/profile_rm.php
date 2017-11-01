<?php include_once('commonFunction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Gotcha-6</title>
<?php include('include/style.php');?>
</head>

<body class="nav-md">
<div class="container body">
  <div class="main_container"> 
    <!-- Sidebar Menu -->
    <?php include('include/sidebar.php');?>
    <!-- Sidebar Menu --> 
    
    <!-- top navigation -->
    <?php include('include/header.php');?>
    <!-- /top navigation --> 
    
    <!-- page content -->
    <div class="right_col" role="main">
      <form style="margin:0" id="expertRegistration">
        <input type="hidden" name="fld_user_type" value="<?=$user_type?>" />
        <div class="container-fluid">
          <section class="container">
            <div class="container-page">
              <center>
                <h3 class="dark-grey"><br>
                  Resource Manager Registration</h3>
                <br>
                <br>
              </center>
              <div class="col-md-6">
                <div class="form-group col-lg-6">
                  <label>Username</label>
                  <input type="text" name="fld_username" class="form-control" onKeyPress="$('#errorEmailMsg').slideUp();" onBlur="check_userID_exists(this)" value="<?=$user[0]['fld_username'];?>" >
                  <span id="errorEmailMsg" class="regErrorMsg">The username you have entered is already registered</span> </div>
                <div class="form-group col-sm-6">
                  <label class="control-label">Profile Picture</label>
                  <input  type="file" accept=".gif,.jpg,.jpeg,.JPG,.JPEG,.png," name="fld_picture" size="20" value="<?=$user[0]['fld_picture'];?>">
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-lg-6">
                  <label>First Name</label>
                  <input type="text" name="fld_fname" class="form-control" value="<?=$user[0]['fld_fname'];?>">
                </div>
                <div class="form-group col-lg-6">
                  <label>Last Name</label>
                  <input type="text" name="fld_lname" class="form-control" value="<?=$user[0]['fld_lname'];?>">
                </div>
                <div class="form-group col-lg-6">
                  <label>Facebook Link</label>
                  <div class="boxIconInput">
                    <input type="text" name="fld_facebook" class="form-control" value="<?=$user[0]['fld_facebook'];?>" >
                    <span class="fa fa-facebook iconRight" aria-hidden="true"></span> </div>
                </div>
                <div class="form-group col-lg-6">
                  <label>Microsoft Link</label>
                  <div class="boxIconInput">
                    <input type="text" name="fld_microsoft" class="form-control" value="<?=$user[0]['fld_microsoft'];?>" >
                    <span class="fa fa-windows iconRight" aria-hidden="true"></span> </div>
                </div>
                <div class="form-group col-lg-6">
                  <label>Google+ Link</label>
                  <div class="boxIconInput">
                    <input type="text" name="fld_google" class="form-control" value="<?=$user[0]['fld_google'];?>" >
                    <span class="fa fa-google-plus iconRight" aria-hidden="true"></span> </div>
                </div>
                <div class="col-sm-6">
                  <label class="control-label">Upload Resume / CV</label>
                  <input  type="file" accept=".pdf,.txt,.docx,.doc" name="fld_resume" size="20" value="<?=$user[0]['fld_resume'];?>">
                </div>
              </div>
              <div class="col-md-6">
                <h3 class="dark-grey">Terms and Conditions</h3>
                <p> By clicking on "Register" you agree to The Company's' Terms and Conditions </p>
                <p> While rare, prices are subject to change based on exchange rate fluctuations - 
                  should such a fluctuation happen, we may request an additional payment. You have the option to request a full refund or to pay the new price. (Paragraph 13.5.8) </p>
                <p> Should there be an error in the description or pricing of a product, we will provide you with a full refund (Paragraph 13.5.6) </p>
                <p> Acceptance of an order by us is dependent on our suppliers ability to provide the product. (Paragraph 13.5.6) </p>
              </div>
              <div class="clearfix"></div>
              <br>
              <div class="form-group inlineBlockFull">
                <div class="col-md-2">
                  <label class="form-label">Availability</label>
                  <br>
                  <a onClick="appendNewHour()" href="javascript:;">Add More Time Slot</a> </div>
                <div class="col-md-10 ">
                  <div class="row boxReadernr">
                    <div class="form-group col-md-3">
                      <label>Start Time</label>
                      <div class="row">
                        <div class="col-xs-6">
                          <select title="Hours" class="hrsP" data-size="5" data-width="100%" data-live-search="true">
                          </select>
                        </div>
                        <div class="col-xs-6">
                          <select title="Minuts" class="mintsP" data-size="5" data-width="100%" data-live-search="true">
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-lg-3">
                      <label>End Time</label>
                      <div class="row">
                        <div class="col-xs-6">
                          <select title="Hours" class="hrsP" data-size="5" data-width="100%" data-live-search="true">
                          </select>
                        </div>
                        <div class="col-xs-6">
                          <select title="Minuts" class="mintsP" data-size="5" data-width="100%" data-live-search="true">
                          </select>
                        </div>
                      </div>
                    </div>
                    <div style="margin-bottom:10px;" class="clearfix"></div>
                  </div>
                  <div class="row setBoxNewHor"> </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label class="form-label col-md-2 col-sm-2 col-xs-3" for="comment">Market yourself: Tell Us About You</label>
                  <div class="col-md-8 col-sm-8 col-xs-9">
                    <textarea class="form-control" rows="5" name="fld_about" id="comment"> <?=$user[0]['fld_about'];?>
</textarea>
                  </div>
                </div>
              </div>
              <br>
              <center>
                <button type="submit" class="btn btn-primary">Save</button>
              </center>
            </div>
          </section>
        </div>
      </form>
    </div>
    
    <!-- /page content --> 
    
    <!-- footer content -->
    <?php include('include/footer.php');?>
    <!-- /footer content --> 
  </div>
</div>
<!-- / Default Scripts -->
<?php include('include/script.php');?>
<!-- jQuery Knob --> 
<script src="<?=base_url()?>assets/vendors/jquery-knob/dist/jquery.knob.min.js"></script> 
<!-- Custom Theme Scripts --> 
<script src="<?=base_url()?>assets/build/js/custom.js"></script> 
<script>
boxHourMint = $('.boxReadernr').html();
$(function() { 
	getHoursMinuts();
});
</script>
</body>
</html>
