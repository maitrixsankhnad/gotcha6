<?php
$this->load->view('commonFunction');
if(!AID){
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
<?php include('front_include/style.php');?>
</head>

<body class="bgCover">
<!-- Navigation -->
<div class="container">
  <nav id="landing_nav" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <li style="list-style-type: none;"> <a href="<?=base_url();?>"><img src="<?=base_url()?>assets/img/gotcha6logo.jpg" width="150" height="50"></a> </li>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li> <a class="backRating" onClick="history.back(1);" href="javascript:;">Back</a> </li>
          <li> <a href="<?=base_url()?>process/logout">Log Out</a> </li>
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
    <div class="texhara">Payment!</div>
    <p>Customer has paid the amount of $<?=number_format($getBlance[1], 0, '.', ',')?> for the Incident (<a target="_blank" href="<?=base_url()?>superadmin/incident_preview/<?=encode($product[0]['fld_id'])?>"><?=$product[0]['fld_inci_title']?></a>) which is sucessfully completed. Choose any of the following payment method to pay the amount</p>
  </div>
  <div class="formBoxRating">
  <form id="rmPaymentFrm" method="get">
        <input type="hidden" value="<?=$iid?>" name="iid" />
        <input type="hidden" value="<?=$rid?>" name="rid" />
        <input type="hidden" value="" name="payType" />
        <input type="hidden" value="<?=$utype=='1' ? '1' : '0'?>" name="usertype" />
        
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
        <a target="_blank" href="<?=base_url()?>superadmin/incident_preview/<?=encode($product[0]['fld_id'])?>"><?=$product[0]['fld_inci_title']?></a>
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
        <?=$utype=='1' ? 'SME' : $servLevl?>
      </div>
      <div class="clearfix"></div>
      <hr />
      
      <div class="col-md-6">
        <label>Total project duration: </label>
        <?=$getBlance[0]?>
        <?=$lblPlan1?>
      </div>
      
      <div class="col-md-6">
        <label>Amount paid by customer:</label> $ <?=number_format($getBlance[1], 0, '.', ',')?>
      </div>
      
      <?php 
	  	if($utype=='1'){
		$totaltime = trackSMETotalTime(decode($rid), $this->input->get('rmid'), decode($iid));
		$resourMgName = userInfo($this->input->get('rmid'));
	  ?>
      <div class="col-md-6">
        <label>Individual work duration: </label>
        <?=$totaltime[0]->TotalTime;?>
      </div>
      <div class="col-md-6">
        <label><?=$servLevl?>: </label>
        <?=$resourMgName[0]['fld_fname'].' '.$resourMgName[0]['fld_mname'].' '.$resourMgName[0]['fld_lname'].' ('.$resourMgName[0]['fld_username'].')'?>
      </div>
      <?php } ?>
      <div class="clearfix"></div>
      <hr />
      <div class="text-center">
      		<h4>Pay Now!</h4>
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="Enter Amount" required name="paynow" value="" />
                </div>
            </div>
            <div class="clearfix"></div>
            <?php if($user[0]['fld_paypal'] != ''){?>
            <button type="button" class="btn btn-default" onClick="payMethodRMSME('1')">Paypal Payment</button>
            <?php } if($user[0]['fld_stripe'] != ''){?>
            <button type="button" class="btn btn-default" onClick="payMethodRMSME('2')">Stripe Payment</button>
            <?php } ?>
      </div>
    </form>
    
    
    
  </div>
</div>
<!-- /.container -->
<?php include('front_include/script.php');?>
<script src="<?=base_url()?>assets/js/jquery.barrating.min.js"></script> 
<script src="<?=base_url()?>assets/vendors/iCheck/icheck.min.js"></script>
</body>
</html>
