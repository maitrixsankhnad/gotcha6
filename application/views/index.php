<?php include('commonFunction.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>
<?=$defaultSetting[0]['fld_company_name']?>
</title>
<meta name="description" content="">
<meta name="author" content="">
<?php include('front_include/style.php');?>
</head>

<body class="bgCover" style="padding:0;">
<!-- Navigation -->
<?php include('front_include/header.php');?>
<div id="carousel_fade" class="carousel slide carousel-fade" data-ride="carousel">   
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active"> </div>
    <div class="item"> </div>
    <div class="item"> </div>
  </div>
</div>
<div id="landing_fade" class="container">
  <div id="landing_fade_caption" class="container col-lg-10 col-md-12 col-lg-offset-1" style="color:white">
    <center>
      <img src="<?=base_url()?>assets/images/<?=$defaultSetting[0]['fld_logo']?>" width="50%">
    </center>
    <br>
    <br>
    <div class="row">
      <div class="col-md-4"> <a href="services" STYLE="text-decoration: none">
        <div class="panel panel-default">
          <div class="panel-heading">
            <center>
              <h4> Gotcha-6 On Demand Subject Matter Expert</h4>
            </center>
          </div>
          <div class="panel-body"> More information about this offering </div>
        </div>
        </a> </div>
      <div class="col-md-4"> <a href="about" STYLE="text-decoration: none">
        <div class="panel panel-default">
          <div class="panel-heading">
            <center>
              <h4>Gotcha-6 Service Contracts for On Demand Services</h4>
            </center>
          </div>
          <div class="panel-body"> More information about Gotcha-6 </div>
        </div>
        </a> </div>
      <div class="col-md-4"> <a href="register" STYLE="text-decoration: none">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>Resource Manager/SME Registration</h4>
          </div>
          <div class="panel-body"> Sign up now to start your brand </div>
        </div>
        </a> </div>
    </div>
  </div>
</div>
<?php include('front_include/script.php');?>
</body>
</html>