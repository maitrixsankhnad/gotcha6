<?php
$this->load->view('commonFunction');

if(!UID){
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
          <label>Incident Title: </label> <?=$product[0]['fld_inci_title']?>
          <br>
          <label>Incident ID:</label> <?=str_pad($product[0]['fld_id'], 8, '0', STR_PAD_LEFT);?>
      </div>
      <div class="col-md-6">
          <label>Amount: </label> <?=$product[0]['fld_plan_amount']?>
          <br>
          <label>Billing Name:</label> <?=$user[0]['fld_fname'].' '.$user[0]['fld_mname'].' '.$user[0]['fld_lname']?>
      </div>
      <div class="clearfix"></div>
      <div class="text-center">
        <a href="<?=base_url()?>paypal/pay/<?=$iid?>" class="btn btn-default">Pay Now</a>
      </div>
    </form>
  </div>
</div>
<!-- /.container -->
<?php $this->load->view('front_include/script');?>
</body>
</html>
