<?php
include_once('commonFunction.php');
$this->load->view('userchat');
$uid = $this->session->userdata('UID');
if(!$uid){
	redirect(base_url());
	exit;
}

$title = $summary = $email = $pushNotification = $planID_S = $serviceTags = $rmSlectedActive = '';
$expert = '0';
$rmSlectedDctive = array();
if($id){
	$title = $incident[0]['fld_inci_title'];
	$summary = $incident[0]['fld_summary'];
	$email = $incident[0]['fld_email'];
	$pushNotification = $incident[0]['fld_notifications'] == '0' ? 'checked':'';
	$expert = $incident[0]['fld_service_level'];
	$planID_S = $incident[0]['fld_plan_id'];
	foreach ($rmSlectedID as $rmSlectedDetails){
		if($rmSlectedDetails['fld_isDeleted']=='0'){
			$rmSlectedActive = $rmSlectedDetails['fld_rm_id'];
		}else{
			array_push($rmSlectedDctive,$rmSlectedDetails['fld_rm_id']);
		}
	}
}
foreach ($serviceTag as $tag){
	if($id){
		$isServiceTag = in_array($tag['fld_id'], array_column($serviceID, 'fld_service_id')) ? 'selected' : '';
	}else{
		$isServiceTag = '';
	}
	$serviceTags .= '<option '.$isServiceTag.' data-subtext="' . $tag['fld_manufacturer'] . '" value="' . $tag['fld_id'] . '">' . $tag['fld_serviceName'] . '</option>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Gotcha-6</title>
<?php include('include/style.php'); ?>
<!-- Include Custom CSS -->
<link href="<?=base_url()?>assets/css/fade.css" rel="stylesheet">
<!-- Include SmartWizard CSS -->
<link href="<?=base_url()?>assets/build/css/smart_wizard.css" rel="stylesheet" type="text/css" />
</head>
<body class="nav-md">
<div id="preloader" style="display:block;">
  <div class="spinner">
    <div class="bounce1"></div>
    <div class="bounce2"></div>
    <div class="bounce3"></div>
  </div>
</div>
<div class="container body">
  <div class="main_container">
    <?php include('include/sidebar.php'); ?>
    <?php include('include/header.php'); ?>
    <!--Start: page content -->
    <div class="right_col" role="main">
      <div class=""> 
        <!--Start: page title -->
        <div class="page-title">
          <div class="title_left">
            <h3>Create New Incident</h3>
          </div>
        </div>
        <!--End: page title -->
        <div class="clearfix"></div>
        <!--Start: page data -->
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12"> 
            <!--Start: panel -->
            <div class="x_panel"> 
              <!--Start: panel Title -->
              <div class="x_title">
                <h2>New Incident <small>Please complete the following details</small></h2>
                <div class="clearfix"></div>
              </div>
              <!--End: panel Title --> 
              <!--Start: panel Content -->
              <div class="x_content"> 
                <!--Start: Tabs -->
                <form class="form-horizontal form-label-left" id="create_incident" novalidate>
                	<input type="hidden" value="<?=encode($id)?>" class="incidentID" name="incidentID" />
                    <input type="hidden" value="<?=implode(",",$rmSlectedDctive)?>" name="rejectRM" />
                  <!--Start: smartwizard-->
                  <div id="smartwizard" class="new-incident"> 
                    <!--Start: smartwizard Step-->
                    <ul>
                      <li><a href="#step-1">Incident Form<br />
                        <small>Step1</small></a></li>
                      <li><a href="#step-2">Service Level Selectoin<br />
                        <small>Step2</small></a></li>
                      <li><a href="#step-3">Pricing/Plans<br />
                        <small>Step3</small></a></li>
                      <li><a href="#step-4">List Of RM<br />
                        <small>step4</small></a></li>
                    </ul>
                    <!--End: smartwizard Step-->
                    <div class="row"> 
                      <!--Start: Step1 -->
                      <div id="step-1">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2" >
                          <h2 class="StepTitle"><br/>
                          </h2>
                          <div id="form-step-0" role="form" data-toggle="validator"> <span class="section">Incident Form</span>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Incident Title</label>
                              <div class="col-sm-9">
                                <input type="text" placeholder="ex. Security Flaws for Employees" value="<?=$title?>" name="title" class="form-control" required>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-3" for="last-name">Add Service Tags <span class="required">*</span> </label>
                              <div class="col-sm-9">
                                <select class="selectpicker" name="servicetags[]" data-width="100%" data-live-search="true" data-actions-box="true" multiple data-selected-text-format="count > 3" required>
                                  <?=$serviceTags?>
                                </select>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Brief Summary</label>
                              <div class="col-sm-9">
                                <textarea class="form-control" rows="5" id="comment" placeholder="Enter a Brief Summary" name="summary" required><?=$summary?>
</textarea>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Email</label>
                              <div class="col-sm-9">
                                <input type="email" placeholder="Email" name="email" value="<?=$email?>" class="form-control" required>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-3">Optional</label>
                              <div class="col-sm-9">
                                <div class="checkbox">
                                  <label>
                                    <input <?=$pushNotification?> type="checkbox" name="notifications" value="0">
                                    Push Notifications on updates </label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--End: Step1 --> 
                      <!--Start: Step2 -->
                      <div id="step-2">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2" >
                          <h2 class="StepTitle"><br/>
                          </h2>
                          <div id="form-step-1" role="form" data-toggle="validator"> <span class="section">Service Level Selection</span>
                            <div class="form-group"> 
                              <!--<label class="control-label col-sm-3">Select Service Level *:</label>-->
                              <div class="col-sm-9 serviceLevelSelection">
                                <div class="radio activeRado">
                                  <label>
                                    <input type="radio" <?=$expert == '0' ? 'selected':''?> value="0" checked class="flat rmTypeList" name="expert" />
                                    Incident Manager </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" <?=$expert == '1' ? 'selected':''?> value="1" class="flat rmTypeList" name="expert" />
                                    Project Manager </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" <?=$expert == '2' ? 'selected':''?> value="2" class="flat rmTypeList" name="expert" />
                                    IT/Director </label>
                                </div>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--End: Step2 --> 
                      <!--Start: Step3 -->
                      <div id="step-3">
                        <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1" >
                          <h2 class="StepTitle"><br/>
                          </h2>
                          <div id="form-step-2" role="form" data-toggle="validator" class="row boxPricePanl"> <span class="section">Pricing/Plans</span> 
                            <!-- price element -->
                            <?php 
							$p=0; 
							foreach($package as $packageDetail){ 
							if($packageDetail['fld_status'] == 0){
								if($packageDetail['fld_duration'] == 0){
									$dureation = 'Per Hour'	;
								}else if($packageDetail['fld_duration'] == 1){
									$dureation = 'Daily'	;
								}else if($packageDetail['fld_duration'] == 2){
									$dureation = 'Monthly'	;
								}else if($packageDetail['fld_duration'] == 3){
									$dureation = 'Yearly'	;
								}
							?>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                              <div class="pricing ui-ribbon-container">
                                <div class="title">
                                  <h2>
                                    <?=$packageDetail['fld_title']?>
                                    <?=$packageDetail['fld_plan_label'] ? '<small class="label label-primary">'.$packageDetail['fld_plan_label'].'</small>':''?>
                                  </h2>
                                  <h1>$
                                    <?=$packageDetail['fld_price']?>
                                    <?php if($packageDetail['fld_extra_price']){?>
                                    <small style="color:#fff;">
                                    <?=$packageDetail['fld_type'] =='0' ? '+':'-'?>
                                    $
                                    <?=$packageDetail['fld_extra_price']?>
                                    </small>
                                    <?php }?>
                                  </h1>
                                  <span>
                                  <?=$dureation?>
                                  </span> </div>
                                <div class="x_content">
                                  <div class="">
                                    <div class="pricing_features">
                                      <?=$packageDetail['fld_detail']?>
                                    </div>
                                  </div>
                                  <div class="pricing_footer"> <a onClick="selectPlanTab(this,<?=$packageDetail['fld_id']?>)" href="javascript:;" class="btn btn-<?=$planID_S == $packageDetail['fld_id'] ?'success':'primary'?>">Select<?=$planID_S == ''?'':'ed'?>
                                    </a> </div>
                                </div>
                              </div>
                            </div>
                            <?php } }?>
                            <!-- price element -->
                            <div class="form-group">
                              <input type="text" value="<?=$planID_S?>"  class="planValue text_css" name="plan" required />
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--End: Step3 --> 
                      <!--Start: Step4 -->
                      <div id="step-4">
                        <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1" >
                          <h2 class="StepTitle"><br/>
                          </h2>
                          <div id="form-step-3" role="form" data-toggle="validator"> <span class="section">Final Step</span>
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>Select any Resource Manager</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a href="javascript:;" onClick="resetRMList()" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Reset</a></li>
                                  <li><a href="javascript:;" onClick="selectDefaultRM('')" class="btn btn-primary btn-xs changetxt" ><i class="fa fa-floppy-o" aria-hidden="true"></i> Skip</a></li>
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content">
                                <table id="rmListing" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                  <thead>
                                    <tr>
                                      <th>Select User</th>
                                      <th>User</th>
                                      <th>Rating</th>
                                      <th>Status</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody class="boxInputFull rm-list">
                                    <?php
										foreach ($rmList as $rmListAll){ 
										$avrageRating = getAvgRating($rmListAll['fld_id']);
									?>
                                    <tr class="<?=in_array($rmListAll['fld_id'], $rmSlectedDctive) ? 'disableTable' : ''?>">
                                      <td class="text-center"><div class="radio">
                                          <label>
                                            <input type="radio" <?=$rmListAll['fld_id'] == $rmSlectedActive && !in_array($rmListAll['fld_id'], $rmSlectedDctive) ? 'checked':''?> class="flat"  name="rm_id"  value="<?=$rmListAll['fld_id'];?>" >
                                          </label>
                                        </div></td>
                                      <td><img width="50" src="<?=base_url()?>uploads/profile/thumbs/<?=$rmListAll['fld_picture'];?>" />
                                        <?=$rmListAll['fld_username'];?></td>
                                      <td><div class="rateyo disableMouse" data-rateyo-rating="<?=$avrageRating[0]['avrage']?:'0';?>"></div>
                                        <div class="text_css">
                                          <?=$avrageRating[0]['avrage']?:'0';?>
                                        </div></td>
                                      <td><span class="btn btn-<?=$rmListAll['fld_activity'] == '0'? 'success' : 'default';?> btn-xs <?=in_array($rmListAll['fld_id'], $rmSlectedDctive) ? 'disableTable' : ''?>">
                                        <?=$rmListAll['fld_activity'] == '0'? 'Online' : 'Offline';?>
                                        </span></td>
                                      <td><div class="col-md-2">
                                          <button type="button" class="btn btn-primary <?=in_array($rmListAll['fld_id'], $rmSlectedDctive) ? 'disableTable' : ''?>" onClick="getUserDetails('<?=encode($rmListAll['fld_id']);?>');"> View Profile </button>
                                        </div></td>
                                    </tr>
                                    <?php } ?>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--End: Step4 --> 
                    </div>
                  </div>
                  <!--Start: smartwizard-->
                </form>
                <!--End: Tabs --> 
              </div>
              <!--End: panel Content --> 
            </div>
            <!--End: panel --> 
          </div>
        </div>
        <!--End: page data --> 
      </div>
    </div>
    <!-- End --> 
    <!--End: page content -->
    <?php include('include/footer.php'); ?>
  </div>
</div>
<?php include('include/script.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script> 
<script type="text/javascript" src="<?=base_url() ?>assets/build/js/jquery.smartWizard.min.js"></script> 
<script src="<?=base_url() ?>assets/js/jquery.rateyo.min.js"></script> 
<script src="<?=base_url() ?>assets/build/js/custom.js"></script> 
<script type="text/javascript">
$(document).ready(function(){
	var btnFinish = $('<button></button>').text('Finish')
		.addClass('btn btn-info')
		.on('click', function(){
			if( !$(this).hasClass('disabled')){
				var elmForm = $("#create_incident");
				if(elmForm){
					elmForm.validator('validate');
					var elmErr = elmForm.find('.has-error');
					if(elmErr && elmErr.length > 0){
						swal( 'Oops...','You missed out some fields in the form. Please go back and fill all the required fields','error');
						return false;
					}else{
						if($("#rmListing input:checked").val()){
							selectDefaultRM('1')
						}else{
							selectDefaultRM('')					
						}
						return false;
					}
				}
			}
		});
	var btnCancel = $('<button></button>').text('Cancel')
		.addClass('btn btn-danger')
		.on('click', function(){
			$('#smartwizard').smartWizard("reset");
			$('#create_incident').find("input, textarea").val("");
		});



	// Smart Wizard
	$('#smartwizard').smartWizard({
		selected: 0,
		theme: 'dots',
		transitionEffect:'fade',
		toolbarSettings: {toolbarPosition: 'bottom',
			toolbarExtraButtons: [btnFinish, btnCancel]
		},
		anchorSettings: {
			markDoneStep: true, // add done css
			markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
			removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
			enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
		}
	});

	$("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
		var elmForm = $("#form-step-" + stepNumber);
		// stepDirection === 'forward' :- this condition allows to do the form validation
		// only on forward navigation, that makes easy navigation on backwards still do the validation when going next
		if(stepDirection === 'forward' && elmForm){
			elmForm.validator('validate');
			var elmErr = elmForm.children('.has-error');
			if(elmErr && elmErr.length > 0){
				// Form validation failed
				return false;
			}
		}
		return true;
	});

	$("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
		// Enable finish button only on last step
		if(stepNumber == 3){
			$('.btn-finish').removeClass('disabled');
		}else{
			$('.btn-finish').addClass('disabled');
		}
	});
	$('#preloader').fadeOut();
	installRating('rateyo');
});
</script>
</body>
</html>
