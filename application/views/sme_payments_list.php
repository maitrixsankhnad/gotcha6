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
            <h3>SME Payment List </h3>
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
                <h2>Incidents Subject Matter Expert List</h2>
                <div class="clearfix"></div>
              </div>
              <!--End: x title --> 
              
              <!--Start: x Panel -->
              <div class="x_content">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Title</th>
<!--                      <th>Email</th>-->
                      <th>Created At</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="boxInputFull">
                    <?php
                    foreach ($inci as $inciListAll){ 
                       // $inciSME = assignedSME($inciListAll['fld_id']);
                       // $inciSMEData = userInfo($inciSME[0]['fld_sme_id']);
                        
                    ?>
                    <tr>
                      <td><a href="<?=base_url()?>dashboard/incident_preview/<?=encode($inciListAll['fld_id']); ?>" target="_blank">
                        <?=truncate($inciListAll['fld_inci_title'],50)?></a></td>
                      

                      <td><?=date('dS M Y | H:i A',strtotime($inciListAll['fld_createdDt']))?></td>
                      <td><?=$status = '<span class="label label-success statusIn">Completed</span>';?></td>
                      <td><div class="btn-group">
                              
                          <button type="button" class="btn btn-primary"  data-iid="<?=encode($inciListAll['fld_id'])?>" onClick="getIncidentSMEList(this)">View SME List</button>
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
<script src="<?=base_url() ?>assets/js/jquery.rateyo.min.js"></script> 
<script src="<?=base_url() ?>assets/build/js/custom.js"></script>
</body>
</html>
