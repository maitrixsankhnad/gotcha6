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
            <h3>Super Admin Profile</h3>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="row">
                <div class="form-group col-sm-12 text-center">
                  <label for="uploadImage" class="control-label uploadImagePreview"> <img width="150px" class="previewImgSrc" src="<?=$profilePic?>" /> <span style="padding-top:45%" class="uploadInstruction">Profile Picture</span> </label>
                  <input type="file" class="uploadImageInput" onChange="updateAdminImage(this)" id="uploadImage" accept=".gif,.jpg,.jpeg,.JPG,.JPEG,.png," name="profile" />
                  <label data-toggle="tooltip" data-original-title="You are authorized to <?=$admin[0]['fld_role'] == '0' ? 'Add, Edit and Delete' : 'View Only'?> " data-placement="bottom">
                    <?=$admin[0]['fld_role'] == '0' ? 'Super' : ''?>
                    Admin</label>
                </div>
                <div class="col-md-6 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Manage Profile</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content"> <br />
                      <form class="form-horizontal form-label-left input_mask superadminForm">
                        <div class="form-group">
                          <label class="control-label col-sm-3">First Name <span class="required">*</span></label>
                          <div class="col-sm-9">
                            <input type="text" value="<?=$admin[0]['fld_fname']?>" name="fname" required class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?=$admin[0]['fld_lname']?>" name="lname" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3">Email</label>
                          <div class="col-sm-9">
                            <input type="email" value="<?=$admin[0]['fld_email']?>"  disabled class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3">Username</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?=$admin[0]['fld_username']?>" disabled class="form-control">
                          </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-xs-12 text-center">
                            <button type="button" onclick="history.back();" class="btn btn-primary">Cancel</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Update Password</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content"> <br />
                      <form class="form-horizontal form-label-left input_mask superadminPassword">
                        <div class="form-group">
                          <label class="control-label pt0 col-sm-3">Current Password <span class="required">*</span></label>
                          <div class="col-sm-9">
                            <input type="password" name="oPass" class="form-control oPassword">
                          </div>
                          <br>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3">New Password <span class="required">*</span></label>
                          <div class="col-sm-9">
                            <input type="password" name="nPass" class="form-control nPassword">
                          </div>
                          <br>
                        </div>
                        <div class="form-group">
                          <label class="control-label pt0 col-sm-3">Confirm Password <span class="required">*</span></label>
                          <div class="col-sm-9">
                            <input type="password" name="cPass" class="form-control cPassword">
                          </div>
                        </div>
                        <br>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-xs-12 text-center">
                            <button type="button" onclick="history.back();" class="btn btn-primary">Cancel</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                            <br>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
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
