<?php
$this->load->view('commonFunction');

if(!UID){
	redirect(base_url());
	exit;
}
$getBlance = getBalanceDueAmt($product[0]['fld_id'], TRUE, TRUE);
$getBlance = (explode('~',$getBlance));
switch ($product[0]['fld_service_level']) {
	case '0':
		$servLevl = 'Incident Manager';
		break;
	case '1':
		$servLevl = 'Project Manager';
		break;
	case '2':
		$servLevl = 'IT/Director';
		break;
}
switch ($product[0]['fld_plan_type']) {
	case '0':		
		$lblPlan = 'Hourly';
		$lblPlan1 = 'hours(s)';
		break;
	case '1':
		$lblPlan = 'Daily';
		$lblPlan1 = 'day(s)';
		break;
	case '2':
		$lblPlan = 'Monthly';
		$lblPlan1 = 'month(s)';
		break;
	case '3':
		$lblPlan = 'Yearly';
		$lblPlan1 = 'year(s)';
		break;
	default:
		exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Gotcha-6</title>
<meta name="description" content="">
<meta name="author" content="">
<link href="<?=base_url()?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
<?php $this->load->view('front_include/style');?>
</head>

<body class="bgCover">
<!-- Navigation -->
<div class="container">
  <nav id="landing_nav" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <li style="list-style-type: none;"> <a href="./"><img src="<?=base_url()?>assets/img/gotcha6logo.jpg" width="150" height="50"></a> </li>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li> <a class="backRating" href="<?=base_url()?>">Back</a> </li>
          <?php if(isset($_SESSION['UID'])): ?>
          <li> <a href="<?=base_url()?>process/logout">Log Out</a> </li>
          <?php else : ?>
          <li> <a href="<?=base_url()?>login">Login</a> </li>
          <?php endif; ?>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container --> 
  </nav>
</div>

<!-- Page Content -->
<div class="col-md-6 col-md-offset-3 ">
  <div class="msgConterer">
    <div class="texhara">PayPal</div>
    <p>Click pay now to proceed payment</p>
  </div>
  <div class="formBoxRating">
    <form>
      <div class="col-md-6">
        <label>Billing Name:</label>
        <?=$user[0]['fld_fname'].' '.$user[0]['fld_mname'].' '.$user[0]['fld_lname']?>
      </div>
      <div class="col-md-6">
        <label>Billing Email: </label>
        <?=$user[0]['fld_email']?>
      </div>
      <div class="col-md-6">
        <label>Invoice no.: </label>
        <?=str_pad($product[0]['fld_id'], 8, '0', STR_PAD_LEFT);?>
        <br>
        <label>Package taken: </label>
        <?=$product[0]['fld_plan_name']?>
      </div>
      <div class="col-md-6">
        <label>Incident title:</label>
        <a target="_blank" href="<?=base_url()?>dashboard/incident_preview/<?=encode($product[0]['fld_id'])?>"><?=$product[0]['fld_inci_title']?></a>
        <br>
        <label>Package type:</label>
        <?=$lblPlan?>
        basis </div>
      <div class="col-md-6">
        <label>Package cost: </label>
        <?=$product[0]['fld_plan_amount']?>
      </div>
      <div class="col-md-6">
        <label>Service lavel:</label>
        <?=$servLevl?>
      </div>
      <div class="clearfix"></div>
      <hr />
      <div class="col-md-6">
        <label>Total Working: </label>
        <?=$getBlance[0]?>
        <?=$lblPlan1?>
      </div>
      <div class="col-md-6">
        <label>Due Amount:</label> $<?=number_format($getBlance[1], 0, '.', ',')?>
      </div>
      <div class="clearfix"></div>
      <hr />
      <div class="text-center"> <a href="<?=base_url()?>paypal/pay/<?=$iid?>" class="btn btn-default">Pay Now</a> </div>
    </form>
  </div>
</div>
<!-- /.container -->
<?php $this->load->view('front_include/script');?>
</body>
</html>
