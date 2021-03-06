<?php
include_once('commonFunction.php');
$this->load->view('userchat');
$uid = $this->session->userdata('UID');
if(!$uid){
	redirect(base_url());
	exit;
}

$getAmount = getBalanceDueAmt($incident[0]['fld_id'], '', TRUE);

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
    <div class="texhara">Payment!</div>
    <p>Pleasure to work with you. You have to pay the amount of $<?=number_format($getAmount, 0, '.', ',')?> for the Incident (<a target="_blank" href="<?=base_url()?>dashboard/incident_preview/<?=encode($incident[0]['fld_id'])?>"><?=$incident[0]['fld_inci_title']?></a>) which is sucessfully closed. Choose any of the following option to pay the amount of $<?=number_format($getAmount, 0, '.', ',')?></p>
  </div>
  <div class="formBoxRating">
    <form id="ratingFeedback">
      <div class="text-center">
        <a href="<?=base_url();?>paypal?iid=<?=$id?>" class="btn btn-default">Paypal Payment</a>
        <a href="<?=base_url();?>stripe_payment?iid=<?=$id?>" class="btn btn-default">Stripe Payment</a>
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
