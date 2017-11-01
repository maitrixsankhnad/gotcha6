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
        <div class="page-title">
          <div class="title_left">
            <h3>Contact Preview</h3>
          </div>
          <div class="title_right">
            <?php if($contact[0]['fld_uid']){?>
            <a class="pull-right btn btn-primary" href="<?=base_url()?>superadmin/packages_list/add"><i class="fa fa-eye" aria-hidden="true"></i> View Profile</a>
            <?php }else{ ?>
            <span class="label pull-right label-danger">Anonymous User</span>
            <?php }?>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="row">
                <div class="form-horizontal form-label-left input_mask">
                  <div class="col-xs-12">
                    <div class="x_panel">
                      <div class="x_content"> <br />
                        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <tr>
                            <td class="text-right"><strong>Name</strong></td>
                            <td><?=$contact[0]['fld_name']?></td>
                            <td class="text-right"><strong>Email</strong></td>
                            <td><a href="mailto:<?=$contact[0]['fld_email']?>">
                              <?=$contact[0]['fld_email']?>
                              </a></td>
                            <td class="text-right"><strong>Phone</strong></td>
                            <td><a href="tel:<?=$contact[0]['fld_phone']?>">
                              <?=$contact[0]['fld_phone']?>
                              </a></td>
                            <td class="text-right"><strong>Date</strong></td>
                            <td><?=date('dS M Y',strtotime($contact[0]['fld_created_date']))?></td>
                          </tr>
                        </table>
                        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <tr>
                            <td class="text-center"><strong>Message</strong></td>
                          </tr>
                          <tr>
                            <td class="text-center"><?=$contact[0]['fld_message']?></td>
                          </tr>
                        </table>
                        <div class="form-group">
                          <div class="col-xs-12 text-center">
                            <button type="button" onclick="history.back();" class="btn btn-primary">Cancel</button>
                            <a href="mailto:<?=$contact[0]['fld_email']?>" class="btn btn-success">Reply</a> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End: page content -->
    
    <?php include('include/footer.php'); ?>
  </div>
</div>
<?php include('include/script.php'); ?>
<script src="<?=base_url() ?>assets/vendors/jquery-knob/dist/jquery.knob.min.js"></script> 
<script src="<?=base_url() ?>assets/build/js/custom.js"></script>
</body>
</html>
