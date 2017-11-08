<?php
include_once('commonFunction.php');
if(!AID){
	redirect(base_url());
	exit;
}
if($id){
	$subBtn = 'Update Review';
	$isSolved = $rating[0]['fld_is_solved'];
	$feedback = $rating[0]['fld_feedback'];
	$ratingVal = $rating[0]['fld_rating'];
	
	$incidentData = incident($rating[0]['fld_incident_id']);
	$incidentTitle = $incidentData[0]['fld_inci_title'];
	$incidentID = $incidentData[0]['fld_id'];
	$ratedTO = userInfo($rating[0]['fld_uid']);
	$to_id = $ratedTO[0]['fld_id'];
	$to_username = $ratedTO[0]['fld_username'];
	$to_fname = $ratedTO[0]['fld_fname'];
	$to_lname = $ratedTO[0]['fld_lname'];
	
	$ratedBy = userInfo($rating[0]['fld_rating_ID']);
	$by_id = $ratedBy[0]['fld_id'];
	$by_username = $ratedBy[0]['fld_username'];
	$by_fname = $ratedBy[0]['fld_fname'];
	$by_lname = $ratedBy[0]['fld_lname'];
}else{
	$subBtn = 'Add Review';
	$isSolved = $feedback = $ratingVal = $incidentData = $incidentTitle = $incidentID = $ratedTO = $to_id = $to_username = $to_fname = $to_lname = $ratedBy = $by_id = 	$by_username = $by_fname = $by_lname = '';
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
    <?php include('include/admin-sidebar.php'); ?>
    <?php include('include/admin-header.php'); ?>
    
    <!--Start: page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3>Review Information</h3>
          </div>
          <?php if($admin[0]['fld_role'] == '0' && $id){?>
          <div class="title_right"> <a class="pull-right btn btn-primary" href="<?=base_url()?>review/add"><i class="fa fa-star"></i> Add New Rating</a> </div>
          <?php } ?>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="row">
                <?php if($admin[0]['fld_role'] == '0'){?>
                <form class="form-horizontal form-label-left input_mask addEditReview">
                  <input type="hidden" value="<?=encode($id)?>" name="rid" class="rid" />
                  <div class="x_title">
                    <h2>Update Review</h2>
                    <div class="clearfix"></div>
                  </div>
                  <?php } else {?>
                  <div class="form-horizontal form-label-left input_mask">
                  <div class="x_title">
                    <h2>View Review</h2>
                    <div class="clearfix"></div>
                  </div>
                  <?php } ?>
                  <div class="col-md-6 col-xs-12">
                    <div class="x_panel">
                      <div class="x_content"> <br />
                        <?php if($id){?>
                        <div class="form-group">
                          <label class="control-label col-sm-3">Rating By</label>
                          <div class="col-sm-9"> <a class="form-control" data-toggle="tooltip"  data-original-title="<?=$by_fname.' '.$by_lname?>" href="<?=base_url()?>/userprofile/<?=encode($by_id)?>">
                            <?=$by_username?>
                            </a> </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3">Rating To</label>
                          <div class="col-sm-9"> <a data-toggle="tooltip" class="form-control"  data-original-title="<?=$to_fname.' '.$to_lname?>" href="<?=base_url()?>/userprofile/<?=encode($to_id)?>">
                            <?=$to_username?>
                            </a> </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3">Incident Title</label>
                          <div class="col-sm-9"> <a class="form-control"  data-toggle="tooltip"  data-original-title="<?=$incidentTitle?>" href="<?=base_url()?>dashboard/incident_preview/<?=encode($incidentID)?>" target="_blank">
                            <?=trimData($incidentTitle, 50, true)?>
                            </a> </div>
                        </div>
                        <?php } else {?>
                        <div class="form-group">
                          <label class="control-label col-sm-3">Rating By</label>
                          <div class="col-sm-9"> <a class="form-control" data-toggle="tooltip"  data-original-title="<?=$admin[0]['fld_role'] == 0? 'Super':''?> Admin" href="<?=base_url()?>/superadmin/profile">
                            <?=$admin[0]['fld_fname'].' '.$admin[0]['fld_lname']?>
                            (You) </a> </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3">Rating To</label>
                          <div class="col-sm-9">
                            <select onChange="findIncidentList(this.value)" title="Select user to rate"  class="form-control selectpicker userLisingL" name="tid" required>
								<?php foreach($usersList as $usersData){?>
                                <option data-subtext="(<?=$usersData['fld_username']?>)" value="<?=encode($usersData['fld_id'])?>"><?=$usersData['fld_fname'].' '.$usersData['fld_mname'].' '.$usersData['fld_lname']?></option>
                                <?php } ?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3">Incident Title</label>
                          <div class="col-sm-9">
                            <select class="form-control selectpicker incidentListing" title="Select incident" name="iid" disabled required></select>
                          </div>
                        </div>
                        <?php } ?>
                        <div class="form-group">
                          <label class="control-label col-sm-3">Status</label>
                          <div class="col-sm-9">
                            <select class="form-control selectpicker" name="isSolved">
                              <option value="0" <?=$isSolved=='0'?'selected':''?>>Satisfied</option>
                              <option value="1" <?=$isSolved=='1'?'selected':''?>>Dissatisfied</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xs-12">
                    <div class="x_panel">
                      <div class="x_content">
                        <div class="form-group">
                          <label class="control-label pull-left">Rating</label>
                          <div class="rateyo pull-left" data-rateyo-rating="<?=$ratingVal > 0 ? $ratingVal : '0'?>"></div>
                          <input type="hidden" value="<?=$ratingVal > 0 ? $ratingVal : '0'?>" name="rating" class="ratingVal" />
                        </div>
                        <div class="form-group">
                          <label class="control-label">Feedback</label>
                          <br>
                          <textarea name="feedback" rows="4" class="form-control" required><?=$feedback?></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-xs-12 text-center">
                      <?php if($admin[0]['fld_role'] == '0'){?>
                      <button type="button" onclick="history.back();" class="btn btn-primary">Cancel</button>
                      <button type="submit" class="btn btn-success">
                      <?=$subBtn?>
                      </button>
                      <?php } else {?>
                      <button type="button" onclick="history.back();" class="btn btn-primary">Go Back!</button>
                      <?php } ?>
                    </div>
                  </div>
                  <?php if($admin[0]['fld_role'] == '0'){?>
                </form>
                <?php } else {?>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--End: page content -->
  
  <?php include('include/footer.php'); ?>
</div>
</div>
<?php include('include/script.php'); ?>
<script src="<?=base_url() ?>assets/js/jquery.rateyo.min.js"></script> 
<script src="<?=base_url() ?>assets/build/js/custom.js"></script> 
<script>
$(".rateyo").rateYo({
  numStars: 5,
  precision: 10,
  starWidth: "40px",
  spacing: "5px",
  multiColor: {
	startColor: "#1ABB9C",
	endColor  : "#1ABB9C"
  },
  onInit: function () {
	//console.log("On Init");
  },
  onSet: function () {
	//console.log("On Set");
  }
})
.on("rateyo.set", function (e, data) {
	$('.ratingVal').val(data.rating)
})
</script>
</body>
</html>
