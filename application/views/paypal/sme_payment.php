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
        <li style="list-style-type: none;"> <a href="./"><img src="<?=base_url()?>assets/img/gotcha6logo.jpg" width="150" height="50"></a> </li>
      </div>

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
      <form method="post" action="<?=base_url()?>paypal/paySMEAdmin/<?=encode($product[0]['fld_id'])?>/<?=encode($smeid)?>">
        <?php  
                $iid = decode($iid);
                $smeid = $smeid;
                $inciSMEData = userInfo($smeid);
        ?>
      <div class="col-md-6">
          <label>Incident Title: </label> <?=$product[0]['fld_inci_title']?>
          <br>
          <label>Incident ID:</label> <?=str_pad($product[0]['fld_id'], 8, '0', STR_PAD_LEFT);?>
      </div>
      <div class="col-md-6">
          <label>Amount: </label> <input type="number" id="amount" name="amount" required class="form-control" />
          <br>
          <label>Billing Name:</label> <?=$inciSMEData[0]['fld_fname'].' '.$inciSMEData[0]['fld_mname'].' '.$inciSMEData[0]['fld_lname'];?>
          <br>
          <label>Email:</label> <?=$inciSMEData[0]['fld_paypal'];?>
      
      </div>
      <div class="clearfix"></div>
      <div class="text-center">
          <input type="submit" name="Pay Now" value="Pay Now" class="btn btn-default">
      </div>
    </form>
  </div>
</div>
<!-- /.container -->
<?php $this->load->view('front_include/script');?>
</body>
</html>
