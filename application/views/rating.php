<?php
include_once('commonFunction.php');
$uid = $this->session->userdata('UID');
if(!$uid){
	redirect(base_url());
	exit;
}
$rmID = getAssignedRMID($inci_complete[0]['fld_id']);
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
    <div class="texhara">We love your feedback!</div>
    <p>
      What can we do to improve your Gotcha-6 experience?<br>
      We work everyday to make Gotcha-6 as easy and plesant experience, That's why we need your help <br>
      to keep getting better. Any advice you could give us for this incident(<strong><a target="_blank" href="<?=base_url()?>dashboard/incident_preview/<?=encode($inci_complete[0]['fld_id'])?>"><?=$inci_complete[0]['fld_inci_title']?></a></strong>) will be awesome.<br>
      We look forword to hearing from you. Thanks!</p>
  </div>
  <div class="formBoxRating">
    <form id="ratingFeedback">
      <input type="hidden" name="iid" class="iid" value="<?=encode($inci_complete[0]['fld_id'])?>" />
      <div class="form-group">
        <label for="middle-name" class="control-label">Incident Title - <a target="_blank" href="<?=base_url()?>dashboard/incident_preview/<?=encode($inci_complete[0]['fld_id'])?>"><?=$inci_complete[0]['fld_inci_title']?></a> </label>
      </div>
        <div class="form-group">
            <label for="middle-name" class="control-label">Resource Manager - <?=get_user_name($rmID[0]['fld_rm_id']);?> </label>
            <input type="hidden" name="rateID" value="<?=$rmID[0]['fld_rm_id']?>"/>
        </div>
      <div class="form-group">
        <label>Was your issue resolved within SLA window?</label>
        <div class="clearfix">
          <label>
            <input type="radio" class="flat" required value="0" checked name="solved">
            Yes &nbsp;&nbsp; </label>
          <label>
            <input type="radio" class="flat" required value="1" name="solved">
            No </label>
        </div>
      </div>
      <div class="form-group">
        <label>Rate our service</label>
        <div class="clearfix">
          <div class="star-ratings start-ratings-main clearfix">
            <div class="stars stars-example-bootstrap">
              <select id="ratingBox" name="rating" required autocomplete="off">
                <option value=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="middle-name" class="control-label">We value your feedback. Tell us how we can improve.</label>
        <textarea class="form-control" required rows="5" name="feedback" placeholder="Enter your feedback"></textarea>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-default">Send this feedback</button>
      </div>
    </form>
  </div>
</div>
<!-- /.container -->
<?php include('front_include/script.php');?>
<script src="<?=base_url()?>assets/js/jquery.barrating.min.js"></script> 
<script src="<?=base_url()?>assets/vendors/iCheck/icheck.min.js"></script> 
<script>
$(document).ready(function () {
    if ($("input.flat")[0]) {
        $(document).ready(function () {
            $('input.flat').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green'
            });
        });
    }
	
	$('#ratingBox').barrating({
            theme: 'bootstrap-stars',
            showSelectedRating: false
        });
});
</script>
</body>
</html>
