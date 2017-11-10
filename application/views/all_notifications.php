<?php 
include_once('commonFunction.php');

if(!AID){
	redirect(base_url());
	exit;
}

$isNotificationPanl = 'true';

//print_r($tagsId);
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
   <?php include('include/admin-sidebar.php'); ?>
    <?php include('include/admin-header.php'); ?>
    <div class="right_col" role="main">
      <div class="">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                  <div class="x_title">
                      <h2>All Notification <small>Recent Activity</small></h2>
                      <div class="clearfix"></div>
                      <button  class="btn btn-sm btn-primary notifydelete" onclick="clearAllNotifyActivity(this, '1')" type="button" data-original-title="Clear All"/>Clear All</button>
                
                  </div>
                  
                  <div class="x_content">

                      <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="" role="tabpanel" data-example-id="togglable-tabs">
                              <input type="hidden" class="notiFD" value="1">

                              <div class="tab-content">
                                  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab"> 
                                      <!-- start recent activity -->
                                      <ul class="messages">
                                          <?php
                                          if (count($activityList) > 0) {
                                              echo $nActivityLog;
                                              ?>
                                          <?php } else { ?>
                                              <li> <span class="message">No record found</span> </li>
                                              <?php } ?>
                                      </ul>
                                      <!-- end recent activity --> 

                                  </div>



                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <?php include('include/footer.php'); ?>
  </div>
</div>
<?php include('include/script.php'); ?>
<!-- jQuery --> 
<!-- morris.js --> 
<script src="<?=base_url() ?>assets/vendors/raphael/raphael.min.js"></script> 
<script src="<?=base_url() ?>assets/vendors/morris.js/morris.min.js"></script> 
<!-- bootstrap-progressbar --> 
<script src="<?=base_url() ?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> 

<!-- Custom Theme Scripts --> 
<script src="<?=base_url() ?>assets/build/js/custom.js"></script> 
<script src="<?=base_url() ?>assets/js/jquery.barrating.min.js"></script> 
<script>
timeSlot=0; 
	boxHourMint=$('.boxReadernr').html(); 
       // var temp = "10";
       // alert(temp);
	$(function (){
		getHoursMinuts();
               
                
		$('.inlineBlockFull select.mintsP, .inlineBlockFull select.hrsP').selectpicker();
//                $("#hrstart > [value=" + temp + "]").attr("selected", "selected");
	});
</script> 
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