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
            <h3>All Incidents List</h3>
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
                <h2>View All Incidents</h2>
                <div class="clearfix"></div>
              </div>
              <!--End: x title --> 
              
              <!--Start: x Panel -->
              <div class="x_content">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>ServiceTags</th>
                      <th>ResourceManager</th>
                      <th>Created At</th>
                      <th>Status</th>
                      <th>Action</th>
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
					}

                                $rmInci = getAssignedRMID($inciListAll['fld_id']);
                                $userData = userInfo($rmInci[0]['fld_rm_id']);   
                                
                       ?>
                    <tr>
                      <td><a href="<?=base_url()?>superadmin/incident_preview/<?=encode($inciListAll['fld_id']); ?>" target="_blank">
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
					  		?>
                      </td>
                      <td><a data-toggle="tooltip">
                              <?=$userData[0]['fld_fname']?>
                              <?=$userData[0]['fld_mname']?>
                              <?=$userData[0]['fld_lname']?>
                          </a></td>
                      <td><?=date('dS M Y | H:i A',strtotime($inciListAll['fld_createdDt']))?></td>
                      <td><?=$status?></td>
                      <td><div class="btn-group">
                          <a class="btn btn-sm btn-primary" href="<?=base_url()?>superadmin/incident_preview/<?=encode($inciListAll['fld_id']); ?>"><i class="fa fa-thumb-tack"></i> Track</a>
                          <!--<button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Cancel Incident"><i class="fa fa-ban"></i></button>-->
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
<script src="<?=base_url() ?>assets/build/js/custom.js"></script>
</body>
</html>
