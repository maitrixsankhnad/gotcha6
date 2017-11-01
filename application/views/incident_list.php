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
<?php include('include/style.php'); ?>
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
            <h3>Incidents</h3>
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
                <h2>All Incidents List</h2>
                <?php if($user[0]['fld_user_type'] == 0){ ?>
                <a class="pull-right btn btn-primary" href="<?=base_url()?>dashboard/new_incident"><i class="fa fa-plus" aria-hidden="true"></i> Create New Incident</a>
                <?php } ?>
                <div class="clearfix"></div>
              </div>
              <!--End: panel Title --> 
              <!--Start: panel Content -->
              <div class="x_content"> 
                <!--Start: Tabs -->
                <table class="table dataTable table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>ServiceTags</th>
                      <th>Description</th>
                      <th>Status</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody class="boxInputFull">
                    <?php                       
						foreach ($inci as $inciListAll){
                                                    
							switch ($inciListAll['fld_status']) {
								case 0:
									$status = '<span class="label label-success statusIn">Completed</span>';
									break;
								case 1:
									$status = '<span class="label label-default statusIn">Pending</span>';
									break;
								case 2:
									$status = '<span class="label label-info statusIn">Approved</span>';
									break;
								case 3:
									$status = '<span class="label label-cancel">Cancelled</span>';
									break;
								case 4:
									$status = '<span class="label label-danger statusIn">Declined</span>';
                                                                        break;
								case 5:
									$status = '<span class="label label-info statusIn">In Progress</span>';
////								default:
//									$status = '';
							}
							if($user[0]['fld_user_type'] != 0){
                                                            
														if($user[0]['fld_user_type'] != 0){
							if(($inciListAll['fld_status'] == '4') || ($inciListAll['fld_status'] =='0') || ($inciListAll['fld_status'] =='3')) {
									 $btn2nd = '';
															}else{
																$btn2nd = '<button class="btn btn-sm btn-success btnAssign" data-iid="'.encode($inciListAll['fld_id']).'" onClick="assignSME(this,\'\')" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Assign SME"><i class="fa fa-user-plus"></i></button>';
															}
							    }
                                                                
							}
							
						?>
                    <tr>
                      <td><a href="<?=base_url()?>dashboard/incident_preview/<?=encode($inciListAll['fld_id']); ?>" target="_blank">
                        <?=truncate($inciListAll['fld_inci_title'],50)?>
                        </a></td>
                      <td><?php $arr = array();
                            $arr = get_incident_rel_service_tag_name($inciListAll['fld_id']);
                            $r = 0;
                            $servbiteagList = '';
                            foreach($arr as $abc){
                                if($r>2) continue;
                                $servbiteagList .= $abc['fld_serviceName'].', ';
                                $r++;
                            }
                                $servbiteagList =  substr($servbiteagList,0,-2);	
                                echo truncate($servbiteagList,30);
                                echo count($arr) > 2 ? '..':'';					
			?></td>
                      <td><?=truncate($inciListAll['fld_summary'],40);?></td>
                      <td class="boxStarw"><?=$status?></td>
                      <td class="text-center" width="40%"><div class="btn-group">
                          <button class="btn btn-sm btn-primary" type="button" onClick="window.open('<?=base_url()?>dashboard/incident_preview/<?=encode($inciListAll['fld_id']); ?>', '_blank');"  data-placement="top" data-toggle="tooltip" data-original-title="Preview"><i class="fa fa-eye"></i></button>
                          <?php if($user[0]['fld_user_type'] != 0){?>
                          <?php if ($inciListAll['fld_status']=='1') {?>
                          <button class="btn btn-sm btn-success acpBtn" onClick="acceptDeclineIncident(this,'<?=encode($inciListAll['fld_id'])?>','<?=encode(2)?>','incidentAcptDecl','1')" type="button" data-placement="top" data-toggle="tooltip" data-iid="<?=encode($inciListAll['fld_id'])?>" data-original-title="Accept Incident"><i class="fa fa-check"></i></button>
                          <?php }else{
				 echo $btn2nd;
				} ?>
                          
                          <?php if(($inciListAll['fld_status']!='4') && ($inciListAll['fld_status'] !='0') && ($inciListAll['fld_status'] !='3')){?>
                          <button class="btn btn-sm btn-danger" type="button" data-placement="top" onClick="acceptDeclineIncident(this,'<?=encode($inciListAll['fld_id'])?>','<?=encode(4)?>','incidentAcptDecl','')" data-toggle="tooltip" data-original-title="Decline Incident"><i class="fa fa-times"></i></button>
                          <?php }?>
                         
                          <?php }else{ ?>
                          <?php if($inciListAll['fld_status']!='0') {?>
                          <button class="btn btn-sm btn-success" type="button" onClick="window.open('<?=base_url()?>dashboard/incident_preview/<?=encode($inciListAll['fld_id']); ?>/#messageDiv', '_blank');" data-placement="top" <?=$inciListAll['fld_status'] == '0' || $inciListAll['fld_status'] == '2' || $inciListAll['fld_status'] == '5' ? '':'disabled'?> data-toggle="tooltip" data-original-title="<?=$inciListAll['fld_status'] != '2' ? 'Waiting for':'Track'?> Update"><i class="fa fa-line-chart"></i></button>
                          <?php }?>
                          <?php if(( $inciListAll['fld_status']!='0') && ($inciListAll['fld_status']!='5')){?>
                          <button class="btn btn-sm btn-danger" type="button" data-placement="top" data-toggle="tooltip" data-original-title=<?php if($inciListAll['fld_status'] != '3'){?>"Cancel Incident" onClick="deleteCommon(this,'<?=encode($inciListAll['fld_id'])?>','cancelIncident')" <?php }else{?>"Already Cancelled" disabled <?php }?>data-original-title="Cancel Incident"><i class="fa fa-ban"></i></button>
                          <?php }?>
                          <?php } ?>
                        </div>
                        <input type="hidden" class="isIncident" value="1" /></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
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
    <!--End: page content -->
    <?php include('include/footer.php'); ?>
  </div>
</div>
<?php include('include/script.php'); ?>
<script src="<?=base_url() ?>assets/js/jquery.rateyo.min.js"></script> 
<script src="<?=base_url() ?>assets/build/js/custom.js"></script>
</body>
</html>
