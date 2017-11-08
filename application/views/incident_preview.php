<?php
include_once('commonFunction.php');
$this->load->view('userchat');
switch ($inci[0]->fld_status) {
	case 0:
		$actionButton = '<li><a class="btn btn-primary btn-sm" href="'.base_url().'dashboard/new_incident"><i class="fa fa-plus" aria-hidden="true"></i> Create New Incident</a></li>';
		$status = '<span class="label label-success">Completed</span>';
		$notificationMsg = "This Incident has been completed.";
		$notificationClass = 'success';
		break;
	case 1:
		$actionButton = '<li><a class="btn btn-warning btn-sm" href="'.base_url().'dashboard/new_incident/'.encode($inci[0]->fld_id).'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Incident</a></li>';
		$status = '<span class="label label-warning">Pending</span>';
		$notificationMsg = "Your Incident is still pending. Please wait for the approval from Resource Manager.";
		$notificationClass = 'warning';
		break;
	case 2:
		if(($user[0]['fld_user_type'] != '2'))  {
                   $actionButton = '<li><a class="btn btn-success btn-sm" href="#messageDiv"><i class="fa fa-line-chart" aria-hidden="true"></i> Track Incident</a></li>'; 
                } else {
                    $arr = array();
                    $arr = assignedSME($inci[0]->fld_id);
                    $actionButton = '<li><a class="btn btn-success btn-sm" href="'.base_url().'dashboard/trackSME/'.encode($arr[0]['fld_incident_id']).'/'.encode($arr[0]['fld_rm_id']).'/'.encode(UID).'"><i class="fa fa-line-chart" aria-hidden="true"></i> Track Status</a></li>';  
                }
                $status = '<span class="label label-info">Approved</span>';
                $notificationMsg = 'This Incident has been approved.';
		$notificationClass = 'info';
		break;
	case 3:
		$actionButton = '<li><a class="btn btn-primary btn-sm" href="'.base_url().'dashboard/new_incident"><i class="fa fa-plus" aria-hidden="true"></i> Create New Incident</a></li>';
		$status = '<span class="label label-cancel">Cancelled</span>';
		$notificationMsg = "This Incident has been cancled by you.";
		$notificationClass = 'danger';
		break;
		
        case 4:
		$actionButton = '<li></li>';
	        $status = '<span class="label label-danger">Declined</span>';
                if(($user[0]['fld_user_type'] == '0'))  {
                  $notificationMsg = 'This Incident has been declined by assigned Resource Manager. Please assign a another <a class="color-white" href="'.base_url().'dashboard/new_incident/'.encode($inci[0]->fld_id).'#step-4"> New Resource Manager</a>.';  
                }else{
                    $notificationMsg = 'This Incident has been declined by you.' ;
                }
		
		$notificationClass = 'danger';
                break;
        
         case 5:
		if(($user[0]['fld_user_type'] != '2'))  {
                   $actionButton = '<li><a class="btn btn-success btn-sm" href="#messageDiv"><i class="fa fa-line-chart" aria-hidden="true"></i> Track Incident</a></li>'; 
                } else {
                    $arr = array();
                    $arr = assignedSME($inci[0]->fld_id);
                    //var_dump($arr);
                    $actionButton = '<li><a class="btn btn-success btn-sm" href="'.base_url().'dashboard/trackSME/'.encode($arr[0]['fld_incident_id']).'/'.encode($arr[0]['fld_rm_id']).'/'.encode(UID).'"><i class="fa fa-line-chart" aria-hidden="true"></i> Track Status</a></li>';  
                }
                $status = '<span class="label label-danger">In Progress</span>';
		$notificationMsg = "This Incident In Progress.";
		$notificationClass = 'warning';        
                
                
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
    
    <!--Start: page content -->
    <div class="right_col" role="main"> 
      <!--Start: page data -->
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel"> 
            
            <!--Start:  x title -->
            <div class="x_title">
              <h2>View Incident Details</h2>
              <ul class="navbar-right">
                <li class="boxCoverEnblDIsn">
                 <?php if(($user[0]['fld_user_type'] == '3') && ($inci[0]->fld_status != '0') && ($inci[0]->fld_status != '1') && ($inci[0]->fld_status != '3') && ($inci[0]->fld_status != '4')){?>
                  <input type="checkbox" onChange="changeIncidentTime(this,'<?= encode($inci[0]->fld_id)?>','<?= $inci[0]->fld_status?>')" data-toggle="toggle" data-on="Work in progress" <?=$inci[0]->fld_status != 5 ? '':'checked'?> data-off="Start Master">
                  <?php } ?>
                </li>
                <?php 
                if(($user[0]['fld_user_type'] == '0') || ($user[0]['fld_user_type'] == '3') && ($inci[0]->fld_status == '5') || ($inci[0]->fld_status == '2') || ($user[0]['fld_user_type'] == '2') && ($inci[0]->fld_status == '5')) {
                 echo $actionButton;
                } ?>
                <?php if(($user[0]['fld_user_type'] == '3') && ($inci[0]->fld_status != '0') && ($inci[0]->fld_status != '1') && ($inci[0]->fld_status != '3') && ($inci[0]->fld_status != '4')){?>
                    <li><button class="btn btn-sm btn-success btnAssign" data-iid="<?=encode($inci[0]->fld_id)?>" onClick="assignSME(this,'')" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Assign SME"><i class="fa fa-user-plus"></i></button></li>
                <?php } ?>
                   <?php if(($user[0]['fld_user_type'] == '3') && ($inci[0]->fld_status == '1')){?>
                    <li>
                        <button class="btn btn-sm btn-success acpBtn" onClick="acceptDeclineIncident(this,'<?=encode($inci[0]->fld_id)?>','<?=encode(2)?>','incidentAcptDecl','1')" type="button" data-placement="top" data-toggle="tooltip" data-iid="<?=encode($inci[0]->fld_id)?>" data-original-title="Accept Incident"><i class="fa fa-check"></i></button>
                        <button class="btn btn-sm btn-danger" type="button" data-placement="top" onClick="acceptDeclineIncident(this,'<?=encode($inci[0]->fld_id)?>','<?=encode(4)?>','incidentAcptDecl','')" data-toggle="tooltip" data-original-title="Decline Incident"><i class="fa fa-times"></i></button>
                    </li>
                <?php } ?>
                <li>
                   <?php if(($user[0]['fld_user_type'] == '0') && ($inci[0]->fld_status == '4')){?> 
                    <a class="btn btn-danger btn-sm" href="<?=base_url()?>dashboard/new_incident/<?= encode($inci[0]->fld_id) ?>#step-4"><i class="fa fa-user" aria-hidden="true"></i> Assign New Resource Manager</a>
                 <?php } ?>
                </li>
                
                
              </ul>
              <div class="clearfix"></div>
            </div>
            <!--End:  x title --> 
            
            <!--Start: x Content -->
            <div class="x_content"> 
              <!--Start: Incidents -->
              <div class="row">
                <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                  <label>Incident Title</label>
                  <p class="value-text"><?php echo $inci[0]->fld_inci_title;?></p>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
                  <label>Email</label>
                  <p class="value-text"><?php echo $inci[0]->fld_email;?></p>
                </div>
                <div class="form-group col-xs-6 col-sm-6 col-md-2">
                  <label>Status</label>
                  <p>
                    <?=$status?>
                  </p>
                </div>
                <div class="form-group col-xs-6 col-sm-6 col-md-2">
                  <label>Push Notifications</label>
                  <p>
                    <?php  $notification	=	$inci[0]->fld_notifications; ?>
                    <span class="label label-<?=($notification=='0'?'success':'danger')?> btn-xs">
                    <?=($notification=='0'?'Enabled':'Disabled')?>
                    </span></p>
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-xs-12 col-md-8">
                  <label>Brief Summary</label>
                  <p class="value-text"><?php echo $inci[0]->fld_summary;?></p>
                </div>
                <div class="form-group col-xs-12  col-sm-12 col-md-4">
                  <label>Service Tags</label>
                  <p class="value-text">
                    <?php $arr = array();
                        $arr = get_incident_rel_service_tag_name($inci[0]->fld_id);												
                        foreach($arr as $serviceTag){ 
	            ?>
                    <span class="btn btn-info btn-xs"><?php echo $serviceTag['fld_serviceName'];?></span>
                    <?php } ?>
                  </p>
                </div>
                <?php if(($user[0]['fld_user_type'] != '0') && ($user[0]['fld_user_type'] != '2')){?>
                <div class="form-group col-xs-12  col-sm-12 col-md-4">
                  <label>Assigned SME  </label>
                  <p class="value-text">
                    <?php 
                        $arr = array();
                        $arr = assignedSME($inci[0]->fld_id);
                        foreach($arr as $serviceTag){
                        $smeDetail = userInfo($serviceTag['fld_sme_id']);
                       
		     ?>
                    	<a href="<?=base_url()?>dashboard/trackSME/<?=encode($inci[0]->fld_id)?>/<?= encode($serviceTag['fld_rm_id'])?>/<?= encode($serviceTag['fld_sme_id'])?>" class="btn btn-info btn-xs"><?=$smeDetail[0]['fld_fname'].' '.$smeDetail[0]['fld_mname'].' '.$smeDetail[0]['fld_lname'];?></a>
                    <?php } ?>
                  </p>
                  <?php  if($user[0]['fld_user_type'] == '3') {?>
                  <a href="<?=base_url()?>dashboard/trackSMEList/<?=encode($inci[0]->fld_id)?>"> <span  class="btn btn-success pull-left btn-xs"> View All Assigned SME</span><a>
                  <?php } ?>
                </div>
                <?php } ?>
              </div>
              <!--End: Incidents --> 
              
              <!--Start: hr -->
              <hr/>
              <!--End: hr --> 
              
              <!--Start: Service Level Selection  -->
              <div class="row">
                <div class="form-group col-xs-12 col-sm-6 col-md-3">
                  <label>Selected Service Level</label>
                  <p class="value-text">
                    <?php 
                        $serviceLevel	=	$inci[0]->fld_service_level;
                        if($serviceLevel==0) { echo 'Incident Manager'; } else if($serviceLevel==1) { echo 'Project Manager'; } else if($serviceLevel==2) {  echo 'IT/ Director'; } 
                        ?>
                  </p>
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-3">
                  <label>Plan Name</label>
                  <p class="value-text">
                    <?php 
					  	if($inci[0]->fld_plan_type == '0'){
							$workType = 'Hourly';
						}else if($inci[0]->fld_plan_type == '1'){
							$workType = 'Daily';
						}else if($inci[0]->fld_plan_type == '2'){
							$workType = 'Monthly';
						}else if($inci[0]->fld_plan_type == '3'){
							$workType = 'Yearly';
						}
						echo $inci[0]->fld_plan_name;
					  ?>
                  </p>
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-3">
                  <label>Pricing</label>
                  <p class="value-text">$
                    <?=$inci[0]->fld_plan_amount ?>
                    /
                    <?=$workType?>
                  </p>
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-3">
                  <label>Resource Manager</label>
                  <p class="value-text">
                    <?=$rm_id[0]['fld_username'];?>
                    <span  onClick="getUserDetails('<?=encode($rm_id[0]['fld_id'])?>')" class="btn btn-success pull-right btn-xs"> View Profile</span></p>
                </div>
              </div>
              <!--End: Service Level Selection --> 
            </div>
            <!--End: x Content --> 
            
          </div>
          <?php if(($user[0]['fld_user_type']==0 || $user[0]['fld_user_type']==3) && ($inci[0]->fld_status != '1' && $inci[0]->fld_status != '3' && $inci[0]->fld_status != '0' && $inci[0]->fld_status != '4')  ) 
          
           { ?>
          <div class="x_panel" id="messageDiv" >
            <div class="x_title">
              <h2> Message</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="form-group col-xs-12 col-md-12">
                <ul class="messages">
                  <?php 
                    if (!empty($inicMessge)){
                       foreach($inicMessge as $incMsg) :
                        $userInfo	=	userInfo($incMsg['fld_uid']);
                        $imagePath	=	base_url().'uploads/profile/thumbs/'.$userInfo[0]['fld_picture'].'';
                    ?>
                  <li> <img src="<?=$imagePath?>" class="avatar" alt="<?php echo $userInfo[0]['fld_username'];?>">
                    <div class="message_date">
                      <p class="date text-info"><?php echo date('h:i A',strtotime($incMsg['fld_createdDt']));?></p>
                      <p class="month"><?php echo date('d',strtotime($incMsg['fld_createdDt']));?> <?php echo date('F',strtotime($incMsg['fld_createdDt']));?></p>
                    </div>
                    <div class="message_wrapper">
                      <h4 class="heading"><?php echo $userInfo[0]['fld_username'];?></h4>
                      <blockquote class="message"><?php echo $incMsg['fld_message'];?></blockquote>
                      <br>
                      <?php if($incMsg['fld_attached']) { ?>
                      <p class="url"> <span class="fs1 text-info" aria-hidden="true" data-icon=""></span> <a download href="<?php echo base_url().'uploads/document/'.$incMsg['fld_attached']; ?>"><i class="fa fa-paperclip"></i> User Acceptance <?php echo $incMsg['fld_attached'];?> </a> </p>
                      <?php } ?>
                    </div>
                  </li>
                  <?php endforeach; } ?>
                </ul>
              </div>
              <br>
              <form action="" id="inctMessge" enctype="multipart/form-data" >
                <input type="hidden" value="0" name="smechatid" class="smechatid" > 
                <input type="hidden" value="0" name="status" class="statusVal" >
                <input type="hidden" value="<?=encode($inci[0]->fld_id)?>" name="id" class="inctVal" >
                <textarea  name="message" class="" cols="100" rows="5" style="width:80%;" required></textarea>
                <div class="col-sm-4 uploadingBoxCustm">
                  <label class="control-label">Attachment</label>
                  <label class="uploadLblcClick" for="resumeUp">Click here to upload <i class="fa fa-upload" aria-hidden="true"></i></label>
                  <input id="resumeUp" accept=".pdf,.txt,.docx,.doc" name="fld_attached" size="20" value="" type="file">
                </div>
                <div class="form-group">
                  <div class="col-sm-4 col-sm-offset-2"> <br>
                    <br>
                    <a class="btn btn-primary" href="<?=base_url()?>dashboard">Cancel</a>
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <?php } if (($inci[0]->fld_status == '0') && ($inci[0]->fld_status == '2')) { ?>
          <div class="alert alert-<?=$notificationClass?> alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button>
            <?=$notificationMsg?>
          </div>
          <?php } else {?>
             <div class="alert alert-<?=$notificationClass?> alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button>
            <?=$notificationMsg?>
          </div>
            <?php }?>
        </div>
      </div>
      <!--End: page data --> 
      
      <!-- Start:  Assign SME Modals -->
      <div class="modal fade bs-example-modal-lg" id="smgAsign" tabindex="-1" role="dialog" aria-hidden="true"> </div>
      <!-- End:  Assign SME Modals --> 
    </div>
    <!--End: page content -->
    <?php include('include/footer.php'); ?>
  </div>
</div>
<?php include('include/script.php'); ?>
<script src="<?=base_url() ?>assets/js/jquery.rateyo.min.js"></script> 
<script src="<?=base_url() ?>assets/build/js/custom.js"></script>
</body>