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
      <form style="margin:0" id="selfAssesment">
        <div class="container-fluid">
          <section class="container">
            <div class="container-page">
              <a class="btn btn-primary pull-right" href="<?=base_url()?>dashboard/new_service_request"><i class="fa fa-plus" aria-hidden="true"></i> Open New Service Ticket</a>              
              <div class="clearfix"></div>
              <br>
              <div class="row">
                <div class="col-md-4">
                  <div class="topAssesLbl"></div>
                </div>
                <div class="col-md-4">
                  <div class="topAssesLbl"></div>
                </div>
                <div class="col-md-2 col-md-offset-2">
                  <div class="topAssesLbl text-right"></div>
                </div>
              </div>
              <div class="clearfix"></div>
              <table class="table selfAssesementTbl table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>Service Tags</th>
                    <th>Rating</th>
                    <th>Certification Number</th>
                    <th>Expiray Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="boxInputFull">
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="javascript:;" onClick="removeTRsection(this)" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a></td>
                  </tr>
                </tbody>
              </table>
              <br>
              <center>
                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
              </center>
              <br>
              <br>
            </div>
          </section>
        </div>
      </form>
    </div>
    <?php include('include/footer.php'); ?>
  </div>
</div>
<?php include('include/script.php'); ?>
<script src="<?=base_url() ?>assets/vendors/jquery-knob/dist/jquery.knob.min.js"></script> 
<script src="<?=base_url() ?>assets/js/jquery.barrating.min.js"></script> 
<script src="<?=base_url() ?>assets/build/js/custom.js"></script> 
<script>
$(function (){
	function ratingEnable(target) {
		var currentRating = $('.selfRatingOption'+target).data('current-rating');

		$('.stars-example-fontawesome-o'+target+' .clear-rating').on('click', function(event) {
			event.preventDefault();
			$('.selfRatingOption'+target)
				.barrating('clear');
		});
	
		$('.selfRatingOption'+target).barrating({
			theme: 'fontawesome-stars-o',
			showSelectedRating: false,
			initialRating: currentRating,
			onSelect: function(value, text) {
				if (!value) {
					$('.selfRatingOption'+target).barrating('clear');
				} else {
					$('.stars-example-fontawesome-o'+target+' .current-rating').addClass('hidden');	
					$('.stars-example-fontawesome-o'+target+' .your-rating').removeClass('hidden').find('span').html(value);
				}
			},
			onClear: function(value, text) {
				
				$('.stars-example-fontawesome-o'+target).find('.current-rating').removeClass('hidden').end().find('.your-rating').addClass('hidden');
			}
		});
	}
	
	
	for(var i = 1; i<= $('.boxInputFull tr').length; i++){
		ratingEnable(i);
	}
	
	
});
</script>
</body>
</html>