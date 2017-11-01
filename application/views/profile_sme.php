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
      <center>
        <h1>Dashboard</h1>
      </center>
      <form style="margin:0" id="expertRegistration">
      	<input type="hidden" name="fld_user_type" value="<?=$user_type?>" />
        <div class="container-fluid">
          <section class="container">
            <div class="container-page">
              <center>
                <h3 class="dark-grey">SME Registration</h3>
              </center>
              <div class="col-md-6">
                <div class="form-group col-lg-6">
                  <label>First Name</label>
                  <input type="" name="fld_fname" class="form-control" id="" value="<?=$user[0]['fld_fname'];?>">
                </div>
                <div class="form-group col-lg-6">
                  <label>Last Name</label>
                  <input type="first-name" name="fld_lname" class="form-control" id="" value="<?=$user[0]['fld_lname'];?>">
                </div>
                <div class="form-group col-lg-6">
                  <label>Country</label>
                  <input type="text" name="fld_country" class="form-control" id="" value="<?=$user[0]['fld_country'];?>">
                </div>
                
                <div class="col-sm-6">
                  <label class="control-label">Upload Resume / CV</label>
                  <input  type="file" name="fld_resume" size="20" value="<?=$user[0]['fld_resume'];?>">
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
            </div>
          </section>
        </div>
        <br>
        <div class="row">
          <div class="form-group inlineBlockFull">
            <label class="form-label col-md-2 col-sm-2 col-xs-3">Service Tags</label>
            <div class="col-md-8 col-sm-8 col-xs-9">
              <select class="selectpicker" name="servicetags[]"  data-width="100%" data-live-search="true" data-actions-box="true" multiple data-selected-text-format="count > 3">
                <?php 
				
				  foreach($serviceTag as $tag) {
					  echo '<option data-subtext="'.$tag['fld_manufacturer'].'" value="'.$tag['fld_id'].'">'.$tag['fld_serviceName'].'</option>';
				  }
				  ?>
              </select>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="form-group">
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
<!-- Custom Theme Scripts --> 
<script src="<?=base_url()?>assets/build/js/custom.js"></script>
</body>
</html>
