<?php
include_once('commonFunction.php');
if(!AID){
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
    <?php include('include/admin-sidebar.php'); ?>
    <?php include('include/admin-header.php'); ?>
    
    <!--Start: page content -->
    <div class="right_col" role="main">
      <div class=""> 
        
        <!--Start: page title -->
        <div class="page-title">
          <div class="title_left">
            <h3>SME: <a target="_blank" href="<?=base_url()?>userprofile/<?=encode($userData[0]['fld_id']);?>">
              <?=$userData[0]['fld_fname']?>
              <?=$userData[0]['fld_mname']?>
              <?=$userData[0]['fld_lname']?>
              </a></h3>
          </div>
        </div>
        <!--Start: page title -->
        <div class="clearfix"></div>
        <!--Start: page data -->
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <form id="updateUserServiceTag">
              	<input type="hidden" value="<?=encode($userData[0]['fld_id'])?>" name="uid" />
                <div class="x_title">
                  <h2>Certificate Assessment List</h2>
                  <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save Certification</button>
                  <a href="<?=base_url()?>userprofile/<?=encode($userData[0]['fld_id']);?>" class="btn btn-primary pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Add More Service Tag</a>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>ServiceTags</th>
                        <th>Rating</th>
                        <th>certificateNumber</th>
                        <th>ExpiryDate</th>
                        <th>status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="boxInputFull">
                      <?php
					foreach($userServiceTag as $userServiceData){
					?>
                      <tr>
                        <td><input type="hidden" name="servicetags[]" value="<?=$userServiceData['fld_serviceTag_id']?>" />
                          <small>
                          <?=get_service_tag_name($userServiceData['fld_serviceTag_id'])?>
                          </small></td>
                        <td><div class="assesement" data-rateyo-rating="<?=$userServiceData['fld_rating']?>"></div>
                          <div class="text_css">
                            <?=$userServiceData['fld_rating']?>
                          </div><input type="hidden" class="ratingData" name="rating[]" value="<?=$userServiceData['fld_rating']?>"/></td>
                        <td><input class="form-control" type="text" name="certification_no[]" value="<?=$userServiceData['fld_certification_no']?>" /></td>
                        <td><div class="col-md-12 form-group">
                            <input type="text" class="form-control certificationDate has-feedback-left" value="<?=(int)$userServiceData['fld_certification_date'] ? date("d/m/Y",strtotime($userServiceData['fld_certification_date'])) :''?>" name="certification_date[]" />
                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span> </div></td>
                        <td><input class="statusBox" onChange="changeStatus(this,'<?=encode($userServiceData['fld_id'])?>','userServTag')" <?=$userServiceData['fld_status'] == '0' ? 'checked':''?> type="checkbox" data-toggle="toggle" data-on="Approved" data-off="Pending">
                          <div class="text_css">
                            <?=$userServiceData['fld_status']?>
                          </div></td>
                        <td><div class="btn-group">
                            <button class="btn btn-sm btn-danger" onClick="deleteCommon(this,'<?=encode($userServiceData['fld_id'])?>','userServTag')"  type="button"><i class="fa fa-trash-o"></i> Delete</button>
                          </div></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </form>
              <!--End: x Panel --> 
            </div>
          </div>
        </div>
        <!--End: page data --> 
      </div>
    </div>
    <!--End: page content -->
    <?php include('include/footer.php'); ?>
  </div>
</div>
<?php include('include/script.php'); ?>
<script src="<?=base_url() ?>assets/vendors/jquery-knob/dist/jquery.knob.min.js"></script> 
<script src="<?=base_url() ?>assets/js/jquery.rateyo.min.js"></script> 
<script src="<?=base_url() ?>assets/build/js/custom.js"></script> 
<script>
$(".assesement").rateYo({
  numStars: 5,
  precision: 10,
  starWidth: "20px",
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
	$(this).closest('td').find('.ratingData').val(data.rating);
})
</script>
</body>
</html>
