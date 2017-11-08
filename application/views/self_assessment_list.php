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
            <h3>All SME Self Assessment List</h3>
          </div>
        </div>
        <!--Start: page title -->
        <div class="clearfix"></div>
        
        <!--Start: page data -->
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel"> 
              
              <!--Start: x title -->
              <div class="x_title">
                <h2>All SME</h2>
                <div class="clearfix"></div>
              </div>
              <!--End: x title --> 
              
              <!--Start: x Panel -->
              <div class="x_content">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Username</th>
                      <th>ServiceTags</th>
                      <th>Rating</th>
                      <th>Certification Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="boxInputFull">
                    <?php foreach($users as $userData){
						$avrageRate = getAvgSMERating($userData['fld_id'])?:'0';	
					?>
                    <tr>
                      <td><a target="_blank" href="<?=base_url()?>userprofile/<?=encode($userData['fld_id']);?>" >
                        <?=$userData['fld_fname'].' '.$userData['fld_mname'].' '.$userData['fld_lname']?>
                        </a></td>
                      <td>
						  <?php 
                            $serviceList = getSMEServiceTag($userData['fld_id']);
                            $serviceTagName = '';
                            $r = 0;
                            foreach($serviceList as $serviceData){
                                if($r>=2) continue;
                                $serviceName = getServiceTag($serviceData['fld_serviceTag_id']);
                                $serviceTagName .= $serviceName[0]['fld_serviceName'].', ';
                                $r++;
                            }
                            echo rtrim($serviceTagName,', ');
                            echo count($serviceList) > 2 ? '..':'';
                          ?>
                      </td>
                      <td><div class="rateyo disableMouse" data-rateyo-rating="<?=$avrageRate?>"></div>
                        <div class="text_css">
                          <?=$avrageRate?>
                        </div>
                      </td>
                      <td>
						  <?php
                            $serviceStatus = getSMEServiceTag($userData['fld_id'],'','1');
                            if(count($serviceList) > 0){
                                if(count($serviceStatus) > 0){
                                    echo '<span class="label label-danger">Pending Verification</span>';
                                }else{
                                    echo '<span class="label label-success">Verified</span>';
                                }
                            }else{
                                echo '<span class="label label-default">No service tag selected</span>';	
                            }
                          ?>
                      </td>
                      <td><div class="btn-group">
                          <?php
                          	if(count($serviceList) > 0){
								if(count($serviceStatus) > 0){
									echo '<a class="btn btn-sm btn-danger"  href="'.base_url().'userprofile/certifications/'.encode($userData['fld_id']).'"><i class="fa fa-code-fork"></i> Verify Certifications</a>';
								}else{
									echo '<a class="btn btn-sm btn-success"  href="'.base_url().'userprofile/certifications/'.encode($userData['fld_id']).'"><i class="fa fa-check-square-o"></i> Review Certifications</a>';
								}
							}else{
								echo '<a class="btn btn-sm btn-default" href="'.base_url().'userprofile/'.encode($userData['fld_id']).'"><i class="fa fa-plus"></i> Add Certificate</a>';	
							}
						  ?>
                        </div></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
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
installRating('rateyo');
</script>
</body>
</html>
