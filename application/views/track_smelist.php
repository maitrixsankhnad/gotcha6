<?php
include_once('commonFunction.php');
$this->load->view('userchat');
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
            <h3>All Assigned SME</h3>
          </div>
          <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 pull-right top_search">
              <ul class="nav navbar-right panel_toolbox">
                <!--                <li style="padding: 5px; font-size: 16px; font-weight: 700;">Timer: &nbsp;</li>
                <li>
                  <input type="checkbox"  data-size="normal" data-toggle="toggle" data-on="Start" data-off="Stop">
                </li>-->
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
                <?php 
                   //var_dump($smeList); echo '<pre>';
                   ?>
                
                <!--                <h2>
                    Raj Sharma
                  <button class="btn btn-xs btn-info" type="button" data-placement="top" data-toggle="tooltip" data-original-title="View Profile"> <i class="fa fa-eye"></i></button>
                </h2>--> 
                <!--                <ul class="nav navbar-right">
                  <li>
                    <h2 style="margin: 10px 5px;">Timer:&nbsp;</h2>
                  </li>
                  <li>
                    <h2 style="font-weight: 700;"><span class="ttime">8</span>Hours <span class="ttime">30</span> Min </h2>
                  </li>
                </ul>-->
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
                      <th>Total Time</th>
                      <th class="text-center">Status</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody class="boxInputFull">
                    <?php foreach ($smeDetails as $smeDetailsList) {
                       // var_dump($smeDetailsList);
                        $smeDetail = userInfo($smeDetailsList['fld_sme_id']);
                        $trackData = trackSME($smeDetail[0]['fld_id'], $smeDetailsList['fld_rm_id'], $iid,'1');
                        $totaltime = trackSMETotalTime($smeDetail[0]['fld_id'], $smeDetailsList['fld_rm_id'], $iid);
                            if(count($trackData)>0){
								$trackID = $trackData['fld_id'];
								$trackEndTime = $trackData['fld_end_time'];
								if(strtotime($trackEndTime) > 0){
									$isChecked = '';
								}else{
									$isChecked = 'checked';
								}
                            }else{
                                $trackID = $isChecked = '';
                            }
                     ?>
                    <tr>
                      <td><?=$smeDetail[0]['fld_fname'].' '.$smeDetail[0]['fld_mname'].' '.$smeDetail[0]['fld_lname']?></td>
                      <td><?=$totaltime[0]->TotalTime ? :'Not Started Yet'?></td>
                      
                      
                      <td class="toggleFlNone">
                      <?php if($smeDetailsList['fld_status']=='0'){?>
                      <input id="floadN" type="checkbox" onChange="ChangeIncidentTimeStatus(this,'<?=encode($trackID)?>','<?=encode($smeDetailsList['fld_sme_id'])?>')"  data-size="small"  data-toggle="toggle" data-on="In Progress" <?=$isChecked?> data-off="Not Started" >
                      <?php }else if($smeDetailsList['fld_status']=='1'){ ?>
                      	<span class="label label-info">SME not accepted yet</span>
                      <?php }else{ ?>
                      	<span class="label label-danger">Declined by SME</span>
                      <?php }?>
                      </td>
                      
                      
                      <td class="text-center">
                      <?php if($smeDetailsList['fld_status']=='0'){?>
                      <a href="<?=base_url()?>dashboard/trackSME/<?=encode($iid)?>/<?= encode($smeDetailsList['fld_rm_id'])?>/<?= encode($smeDetailsList['fld_sme_id'])?>">
                        <button class="btn btn-sm btn-primary" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Preview"><i class="fa fa-eye"></i></button>
                        </a>
                      <?php }else{ ?> 
                      	No Available Action
                      <?php } ?> 
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
                <!--End: Table -->
                <input type="hidden" value="<?= encode($iid)?>" id="iid" />
              </div>
              <!--End: panel Content --> 
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
.toggleFlNone *,.toggleFlNone{
	text-align:center;
	float:none !important;
}
</style>
