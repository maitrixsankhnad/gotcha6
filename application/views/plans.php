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
<?php include('include/style.php'); ?>
</head>
<body class="nav-md">
<div class="container body">
  <div class="main_container">
    <?php include('include/sidebar.php'); ?>
    <?php include('include/header.php'); ?>
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_full">
            <h3>Pricing/Plans Available</h3>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Pricing/Plans</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
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
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include('include/footer.php'); ?>
  </div>
</div>
<?php include('include/script.php'); ?>
<script src="<?=base_url() ?>assets/build/js/custom.js"></script>
</body>
</html>