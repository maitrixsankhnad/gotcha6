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
            <h3>All Contact Messages</h3>
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
                <h2>View All Contact Messages</h2>
                <div class="clearfix"></div>
              </div>
              <!--End: x title --> 
              
              <!--Start: x Panel -->
              <div class="x_content">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Message</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="boxInputFull">
                    <?php foreach ($contact as $contactData){
						
					?>
                    <tr>
                      <?php if($contactData['fld_uid']){ ?>
                      <td><a href="<?=base_url()?>userprofile/<?=encode($contactData['fld_uid'])?>" data-toggle="tooltip" data-original-title="Registered User"  target="_blank"><?=$contactData['fld_name']?></a></td>
                      <?php }else{ ?>
                      <td><span data-toggle="tooltip" data-original-title="Anonymous User"><?=$contactData['fld_name']?></span></td>
                      <?php } ?>
                      <td><a href="mailto:<?=$contactData['fld_email']?>"><?=$contactData['fld_email']?></a></td>
                      <td><a href="tel:<?=$contactData['fld_phone']?>"><?=$contactData['fld_phone']?></a></td>
                      <td><?=trimData($contactData['fld_message'], 50, true)?></td>
                      <td><div class="text_css">
                          <?=strtotime($contactData['fld_created_date'])?>
                        </div>
                        <?=date('dS M Y',strtotime($contactData['fld_created_date']))?></td>
                      <td><div class="btn-group">
                          <button class="btn btn-sm btn-primary" onClick="gotoPage('<?=base_url()?>superadmin/contactus/preview/<?=encode($contactData['fld_id'])?>')" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Preview"><i class="fa fa-eye"></i></button>
                          <?php if($admin[0]['fld_role'] == '0'){?>
                          <button class="btn btn-sm btn-default" onClick="deleteCommon(this,'<?=encode($contactData['fld_id'])?>','contact')" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></button>
                          <?php } ?>
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
<script>
installRating('rateyo');
</script>
</body>
</html>
