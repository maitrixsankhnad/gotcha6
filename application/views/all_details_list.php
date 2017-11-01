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
 <?php 
    if(!empty($rmDetails)){
           $rmData = userInfo($rmDetails[0]['fld_rm_id']);
           $rmName = $rmData[0]['fld_fname'].' '.$rmData[0]['fld_mname'].' '.$rmData[0]['fld_lname'];
    }else{
          $rmName ="";
    }   
 ?>   
    <!--Start: page content -->
    <div class="right_col" role="main">
      <div class=""> 
        
        <!--Start: page title -->
        <div class="page-title">
          <div class="title_left">
            <h3>
                 Resource Manager Incident Details  
            </h3>
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
                <h2>
                 <?php echo $rmName; ?> All Incident Details  
                </h2>
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
                      <th>Amount Paid </th>
                      <th>Payment</th>
                      <th>SME View</th>
                    </tr>
                  </thead>
                  <tbody class="boxInputFull">
                    <?php
                    foreach ($rmDetails as $rmDetailsAll){ 
                         $rmInci = getALLRMIncident($rmDetailsAll['fld_incident_id']);
                         
                                switch ($rmInci[0]['fld_status']) {
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
                        if(($rmDetailsAll['fld_isPaid'] == '0')){
                            $paybutton = "<span class='btn btn-sm btn-primary'>Paid</span>"; 
                        }else{
                            $paybutton = '<a class="btn btn-sm btn-primary" href="'.base_url().'paypal/rmPayment?iid='.encode($rmInci[0]['fld_id']).'"><i class="fa fa-eye"></i> Payment</a>'; 
                        }
                        
                      $RMPaymentData =getPaymentRMIncident($rmDetailsAll['fld_incident_id'],$rmDetailsAll['fld_rm_id']);
                     
                      if(!empty($RMPaymentData[0]['fld_total'])){
                                $amount = $RMPaymentData[0]['fld_total'] . '<small> '.$RMPaymentData[0]['fld_currency'].'</small>';
                       }else{
                             $amount = "<span class='btn btn-sm btn-primary'>Not Paid</span>";
                       }   
                    ?>
                    <tr>
                      <td><a href="<?=base_url()?>dashboard/incident_preview/<?=encode($rmInci[0]['fld_id']); ?>" target="_blank">
                        <?=truncate($rmInci[0]['fld_inci_title'],50)?></a></td>
                      
                      <td><?=date('dS M Y | H:i A',strtotime($rmInci[0]['fld_createdDt']))?></td>
                      <td><?=$status?></td>
                       <td> <?php echo $amount; ?></td>
                      <td><?=$paybutton; ?></td>
                       
                      <td><div class="btn-group">
                              
                          <button type="button" class="btn btn-primary"  data-iid="<?=encode($rmDetailsAll['fld_incident_id'])?>" onClick="getIncidentSMEList(this)">View SME List</button>
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
