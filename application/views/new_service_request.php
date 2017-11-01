<?php
include_once('commonFunction.php');
$uid = $this->session->userdata('UID');
if(!$uid){
	redirect(base_url());
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Gotcha-6</title>
<!-- iCheck -->
<link href="<?=base_url()?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
<?php include('include/style.php'); ?>
</head>
<body class="nav-md">
<div class="container body">
  <div class="main_container">
    <?php include('include/sidebar.php'); ?>
    <?php include('include/header.php'); ?>
    
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_full">
            <h3>Create New Service Request</h3>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content">
                <h2>Service Request</h2>
                <!-- Tabs -->
                <form class="form-horizontal form-label-left">
                  <div id="wizard_verticle" class="form_wizard wizard_verticle">
                    <ul class="list-unstyled wizard_steps">
                      <li> <a href="#step-11"> <span class="step_no">1</span> </a> </li>
                      <li> <a href="#step-22"> <span class="step_no">2</span> </a> </li>
                      <li> <a href="#step-33"> <span class="step_no">3</span> </a> </li>
                      <li> <a href="#step-44"> <span class="step_no">4</span> </a> </li>
                    </ul>
                    <div id="step-11">
                      <h2 class="StepTitle">Step 1</h2>
                      <span class="section">Select Skill Set</span>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3" for="first-name">Skill List <span class="required">*</span> </label>
                        <div class="col-md-6 col-sm-6">
                          <input type="text" id="first-name2" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                    </div>
                    <div id="step-22">
                      <h2 class="StepTitle">Step 2</h2>
                      <span class="section">Service Level Selectoin</span>
                      <div class="form-group">
                        <label>Select Service Level *:</label>
                        <div class="radio">
                          <label>
                            <input type="radio" class="flat" checked name="expert">
                            Incident Manager </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" class="flat" name="expert">
                            IT/Director </label>
                        </div>
                      </div>
                    </div>
                    <div id="step-33">
                      <h2 class="StepTitle">Step 3</h2>
                      <span class="section">Pricing/Plans</span>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="panel panel-default text-center">
                            <div class="panel-heading">
                              <h3 class="panel-title">Bronze</h3>
                            </div>
                            <div id="bronze-price" class="panel-body"> <span class="price"><sup>$</sup>185<sup>00</sup></span> <span class="period">per hour</span> </div>
                            <ul class="list-group">
                              <li class="list-group-item"><strong>Best Effort</strong> Service Commitment</li>
                              <li class="list-group-item"><strong>Updates</strong> Every 60 min</li>
                              <li class="list-group-item"><a href="<?=base_url()?>payment/bronze" class="btn btn-primary">Select</a> </li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div id="gold-price" class="panel panel-primary text-center">
                            <div class="panel-heading">
                              <h3 class="panel-title">Gold <span class="label label-success">Best Value</span></h3>
                            </div>
                            <div class="panel-body"> <span class="price"><sup>$</sup>250<sup>00</sup></span> <span class="period">per hour</span> </div>
                            <ul class="list-group">
                              <li class="list-group-item"><strong>Next Business Day</strong> Service Level</li>
                              <li class="list-group-item"><strong>Updates</strong> Every 30 min</li>
                              <li class="list-group-item"><a href="<?=base_url()?>payment/gold" class="btn btn-primary">Select</a> </li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div id="platinum-price" class="panel panel-default text-center">
                            <div class="panel-heading panel-heading-platinum">
                              <h3 class="panel-title">Platinum</h3>
                            </div>
                            <div class="panel-body"> <span class="price"><sup>$</sup>1,000<sup>00</sup></span> <span class="period">+ $250 per hour</span> </div>
                            <ul class="list-group">
                              <li class="list-group-item"><strong>3 Hour</strong> Service Level</li>
                              <li class="list-group-item"><strong>Updates </strong> Every 30 min</li>
                              <li class="list-group-item"><a href="<?=base_url()?>payment/platinum" class="btn btn-primary">Select</a> </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="step-44">
                      <h2 class="StepTitle">Final Step</h2>
                      <span class="section">Select Skill Set</span>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3" for="first-name">Skill List <span class="required">*</span> </label>
                        <div class="col-md-6 col-sm-6">
                          <input type="text" id="first-name2" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                <!-- End SmartWizard Content --> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /page content -->
    <?php include('include/footer.php'); ?>
  </div>
</div>
<?php include('include/script.php'); ?>
<!-- iCheck --> 
<script src="<?=base_url()?>assets/vendors/iCheck/icheck.min.js"></script> 
<script src="<?=base_url()?>assets/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script> 
<script src="<?=base_url() ?>assets/build/js/custom.js"></script>
</body>
</html>