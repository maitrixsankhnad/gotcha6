<?php
include_once('commonFunction.php');
$this->load->view('userchat');
$uid = $this->session->userdata('UID');
if(!$uid){
	redirect(base_url());
	exit;
}
if(count($trackSme)>0){
	$trackID = $trackSme[0]['fld_id'];
	$trackSMEID = $trackSme[0]['fld_sme_id'];
	$trackEndTime = $trackSme[0]['fld_end_time'];
	$trackIID = $trackSme[0]['fld_iid'];
	$trackRMID = $trackSme[0]['fld_rm_id'];
	if(strtotime($trackEndTime) > 0){
		$isChecked = '';
	}else{
		$isChecked = 'checked';
	}
        
}else{
	$trackID = $trackEndTime = $trackRMID = $isChecked = '';
	$trackIID = '';
	$trackSMEID = $smeid; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Gotcha-6</title>
<?php  include('include/style.php'); ?>
</head>
<body class="nav-md">
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
            <h3>SME View</h3>
          </div>
          <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 pull-right top_search">
              <ul class="nav navbar-right panel_toolbox">
                <?php $incidentData = incident($iid);
                
                if (($incidentData[0]['fld_status'] == '0'))
                { 
                   echo  "<span class='btn btn-success btn-xs'>Project Complete</span>";
                }else {
                ?>  
                <?php if(($user[0]['fld_user_type'] == '3')) { ?>
                <li style="padding: 5px; font-size: 16px; font-weight: 700;">Timer: &nbsp;</li>
                <input type="checkbox" onChange="ChangeIncidentTimeStatus(this,'<?= encode($trackID)?>','<?= encode($trackSMEID)?>')"  data-size="small"  data-toggle="toggle" data-on="In Progress" <?=$isChecked?> data-off="Not Started" >
                <input type="hidden" value="<?= encode($iid)?>" id="iid" />
                <?php } } ?>
              </ul>
            </div>
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
                <ul class="nav navbar-right">
                  <li>
                    <h2 style="margin: 10px 5px;">Total Work Time:&nbsp;</h2>
                  </li>
                  <li>
                    <?php 
                     $totaltime = trackSMETotalTime($trackSMEID, $trackRMID, $trackIID);
                      ?>
                    <h2 style="font-weight: 700;"><span class="ttime">
                      <?= $totaltime[0]->TotalTime; ?>
                      </span> </h2>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <!--End: panel Title --> 
              <!--Start: panel Content -->
              <div class="x_content"> 
                <!--Start: Table -->
                <table class="table dataTable table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>User Name</th>
                      <th>Start Time</th>
                      <th>End Time</th>
                      <!--                      <th>Status</th>-->
                      <th class="text-center">Total Time</th>
                    </tr>
                  </thead>
                  <tbody class="boxInputFull">
                    <?php  
                        if(!empty($trackSme)){
                           foreach ($trackSme as $trackSmeListing) 
						   {
                            $userInfo  = userInfo($trackSmeListing['fld_sme_id']);
                            $fld_idbtnid = encode($trackSmeListing['fld_id']);
                            $fld_sme_idbtnid = encode($trackSmeListing['fld_sme_id']);
                            $currentDate  = strtotime($trackSmeListing['fld_end_time'])> 0 ? '':'checked';
                            $startDate =  $trackSmeListing['fld_start_time'];
                            $endDate =  $trackSmeListing['fld_end_time'];
                            $TotalTime = new DateTime($endDate);
                            $startDate = new DateTime($startDate);
                            
                            if(($user[0]['fld_user_type'] == '2')){
                                $status = "In Progress.."; 
                            }else{
                               $status = '<input type="checkbox" onChange="ChangeIncidentTimeStatus(this,\''.$fld_idbtnid.'\',\''.$fld_sme_idbtnid.'\')"  data-size="small"  data-toggle="toggle" data-on="In Progress" '.$currentDate.' data-off="Not Started" >'; 
                            }
                ?>
                    <tr>
                      <td><?php echo $userInfo[0]['fld_fname'].' '.$userInfo[0]['fld_mname'].' '.$userInfo[0]['fld_lname'];?></td>
                      <td><?=$trackSmeListing['fld_start_time'] ?></td>
                      <td><?= $trackSmeListing['fld_end_time']> 0 ? $trackSmeListing['fld_end_time'] : ''.$status.'' ?></td>
                      <td><?= $trackSmeListing['fld_end_time']> 0 ? $TotalTime->diff($startDate)->format("%h:%i:%s") : 'In Progress..' ?></td>
                    </tr>
                    <?php } 
						} 
					 ?>
                  </tbody>
                </table>
                <!--End: Table --> 
              </div>
              <!--End: panel Content --> 
            </div>
            <div class="clearfix"></div>
            <div class="x_panel" id="messageDiv" >
              <div class="x_title">
                <h2> Message</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="form-group col-xs-12 col-md-12 ScrollStyle">
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
                    <?php endforeach;
                  
                  		}
		         ?>
                  </ul>
                </div>
                <br>
                <form action="" id="inctMessge" enctype="multipart/form-data" >
                  <input type="hidden" value="<?= encode($smeid)?>" name="smechatid" class="smechatid" >
                  <input type="hidden" value="1" name="status" class="statusVal" >
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
            
            <!--End: panel --> 
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
<script src="<?=base_url() ?>assets/js/jquery.rateyo.min.js"></script> 
<script src="<?=base_url() ?>assets/build/js/custom.js"></script> 
<script>
	$(function() {
		$('#toggle-two').bootstrapToggle({
			on: 'Enabled',
			off: 'Disabled'
		});
	})
</script>
</body>
</html>
<style>
.nav-md .container.body .right_col {
	height: 100%;
}
/*footer {
	position: absolute;
	width: 100%;
	margin-left: 0;
	bottom: 0;
}*/
label.btn.btn-default.active.toggle-off {
	background-color: #d9534f;
	color: #fff;
}
label.btn.btn-primary.toggle-on {
	color: #fff;
	background-color: #5cb85c;
	border-color: #5cb85c;
}
.btn-primary, .btn-primary:hover {
	border-color: #5cb85c;
}
.x_title span.ttime {
	color: #26b99a;
	font-size: 26px;
}
.ScrollStyle {
	max-height: 450px;
	overflow-y: scroll;
}
</style>
