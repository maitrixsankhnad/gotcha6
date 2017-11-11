<?php
$this->load->view('commonFunction');
if(!AID){
	redirect(base_url());
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
        <li style="list-style-type: none;"> <a href="<?=base_url()?>"><img src="<?=base_url()?>assets/img/gotcha6logo.jpg" width="150" height="50"></a> </li>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li> <a class="backRating" href="<?=base_url()?>superadmin">Back</a> </li>
          <li> <a href="<?=base_url()?>process/logout">Log Out</a> </li>
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
    <div class="texhara">Payment Successful!</div>
    <p>Thank you for the prompt payment to the
      <?=$user[0]['fld_fname'].' '.$user[0]['fld_mname'].' '.$user[0]['fld_lname'].' ('.$user[0]['fld_username'].')' ?>
      account. Your payment of $<?=$payment[0]['fld_total']?> clears the remaining balance. We appreciate being able to serve you as your incident requrement.</p>
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
        <label>Transaction ID: </label>
        <?=$payment[0]['fld_payment_id']?>
      </div>
      <div class="col-md-6">
        <label>Incident title:</label>
        <a target="_blank" href="<?=base_url()?>superadmin/incident_preview/<?=encode($product[0]['fld_id'])?>"><?=$product[0]['fld_inci_title']?></a>
        <br>
        <label>Payment Method:</label> <?=$payment[0]['fld_description']?>
      </div>
      <div class="col-md-6">
        <label>Payment Date: </label>
        <?=$product[0]['fld_createdDt']?>
      </div>
      
      <div class="clearfix"></div>
      <hr />
      <div class="col-md-12">
        <h2>Paid Amount: <strong>$<?=$payment[0]['fld_total']?></strong></h2>
      </div>
      <div class="clearfix"></div>
      <hr />
      <div class="text-center"> <a href="<?=base_url();?>superadmin" class="btn btn-default">Back to Dashboard</a> <a href="<?=base_url();?>superadmin/<?=$payment[0]['fld_user_type'] == '1' ? 'smePaymentHistory':'rmPaymentHistory'?>" class="btn btn-default">Back to Payment History</a> </div>
    </form>
  </div>
</div>
<!-- /.container -->
<?php $this->load->view('front_include/script');?>
</body>
</html>
