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
    <div class="texhara">Stripe Payment</div>
    <p>Fill the following details to pay using the Stripe Merchant</p>
  </div>
  <div class="formBoxRating">
    <form class="basicPayInfo">
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
        <label>Due Ammount:</label> $<?=number_format($getBlance[1], 0, '.', ',')?>
      </div>
      <div class="clearfix"></div>
      <hr />
      <div class="text-center"> <button type="button" onClick="switchStripPay('1')" class="btn btn-default">Pay Now</button> </div>
    </form>
  
    <form method="POST" id="payment-form" class="form-inline stripPayFrm">
      <span class="payment-errors"></span>
      
      <div class="alert alert-danger errorMeser">
          <span></span>
        </div>


      <table width="60%" class="boxTarsrlk">
        <tr>
          <td>Card Number</td>
          <td colspan="3"><input type="text" size="20" class="form-control" data-stripe="number" required></td>
        </tr>
        <tr>
          <td>Expiration (MM/YY)</td>
          <td width="30%"><input type="text" size="2" class="form-control" data-stripe="exp_month" required></td>
          <td width="5%" class="text-center">/</td>
          <td width="30%"><input type="text" size="2" class="form-control" data-stripe="exp_year" required></td>
        </tr>
        <tr>
          <td>CVC</td>
          <td colspan="3"><input type="text" size="4" class="form-control" data-stripe="cvc" required></td>
        </tr>
        <tr>
          <td>Billing Email</td>
          <td colspan="3"><input type="text" size="6" class="form-control" data-stripe="address_zip" required></td>
        </tr>
        <tr>
          <td>Amount</td>
          <td colspan="3"><input type="text" class="form-control" value="<?=$getBlance[1]?>" disabled required></td>
        </tr>
      </table>
      <div class="text-center"><br><br>
        <input type="submit" class="submit btn btn-primary" value="Submit Payment">
        <input type="button" onClick="switchStripPay('')" class="btn btn-default" value="Back">
      </div>      
    </form>
    <div class="clearfix"></div>
  </div>
</div>
<!-- /.container -->
<style>
.boxTarsrlk{
	margin-left:40px;
}
.boxTarsrlk input{
	width:100% !important;
}
.boxTarsrlk td {
	padding-bottom: 10px;
}
.errorMeser{
	display:none;	
}
</style>
<?php include('front_include/script.php');?>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
<script type="text/javascript" src="https://js.stripe.com/v2/"></script> 
<script type="text/javascript">
    Stripe.setPublishableKey('pk_test_YCwQF0zRMVj5FpafXgkleoO1');
    $(function() {
        var $form = $('#payment-form');
        $form.submit(function(event) {
            // Disable the submit button to prevent repeated clicks:
            $form.find('.submit').prop('disabled', true);
            $form.find('.submit').val('Please wait...');

            // Request a token from Stripe:
            Stripe.card.createToken($form, stripeResponseHandler);
            // Prevent the form from being submitted:
            return false;
        });
    });
    function stripeResponseHandler(status, response) {

        if (response.error) {
			$('.errorMeser').show();
			$('.errorMeser span').html(response.error.message);
			$('.submit').prop('disabled', false).val('Submit Payment');
        } else {
            $.ajax({
                url: '<?=base_url('stripe_payment/process');?>',
                data: {access_token: response.id, iid: '<?=$this->input->get('iid');?>'},
                type: 'POST',
                dataType: 'JSON',
                success: function(response){
                    console.log(response);					
					if(response.success)
						$('.errorMeser').toggleClass('alert-success alert-danger').show();
						$('.errorMeser span').html(response.success);
						setTimeout(function(){
							window.location.href=base_url+"stripe_payment/success/"+response.tid;
						}, 3000);						
                },
                error: function(error){
                    console.log(error);
                }
            });
            //console.log(response.id);
        }
    }
	
	$('.boxTarsrlk input').on('keypress',function(){
		$('.errorMeser').hide()
	})
</script>
</body>
</html>
