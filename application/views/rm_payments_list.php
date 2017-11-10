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
            <h3>Resource Manager Payment List </h3>
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
                <h2>Incidents Resource Manager List</h2>
                <div class="clearfix"></div>
              </div>
              <!--End: x title --> 
              
              <!--Start: x Panel -->
              <div class="x_content">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Name </th>
                      <th>Paypal Id </th>
                      <th>Created At</th>
                      <th>Status</th>
                      <?php if($admin[0]['fld_role'] == '0'){?>
                      <th>Action</th>
                      <?php } ?>
                    </tr>
                  </thead>
                  <tbody class="boxInputFull">
                    <?php
                foreach ($inci as $inciListAll){ 
                    $rmincidentData    = getAssignedRMID($inciListAll['fld_id']);
                    $rmData = userInfo($rmincidentData[0]['fld_rm_id']);
                    
                    if(($rmincidentData[0]['fld_isPaid'] == '0')){
                            $paybutton = "<span class='btn btn-sm btn-primary'>Paid</span>"; 
                    }else{
                            $paybutton = '<a class="btn btn-sm btn-primary" href="'.base_url().'superadmin/rmPaymentInvoice?iid='.encode($inciListAll['fld_id']).'&rid='.encode($rmincidentData[0]['fld_rm_id']).'"><i class="fa fa-eye"></i> Payment</a>'; 
                        }
                    ?>
                    <tr>
                      <td><a href="<?=base_url()?>superadmin/incident_preview/<?=encode($inciListAll['fld_id']); ?>" target="_blank">
                        <?=truncate($inciListAll['fld_inci_title'],50)?>
                        </a></td>
                     
                      <td><?=$rmData[0]['fld_fname'].' '.$rmData[0]['fld_mname'].' '.$rmData[0]['fld_lname'];?></td>
                      <td><?=$rmData[0]['fld_paypal'];?></td>
                      <td><?=date('dS M Y | H:i A',strtotime($inciListAll['fld_createdDt']))?></td>
                      <td><?=$status = '<span class="label label-success statusIn">Completed</span>';?></td>
                      <?php if($admin[0]['fld_role'] == '0'){?>
                      <td><div class="btn-group">
                          <?=$paybutton; ?>
                        </div></td>
                      <?php } ?>
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
