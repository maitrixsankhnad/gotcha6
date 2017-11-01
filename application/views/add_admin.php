<?php
include_once('commonFunction.php');
if(!AID){
	redirect(base_url());
	exit;
}
if($id){
	$imgLbl = 'Replace <br> Profile Image';
	$subBtn = $lbl = 'Update';
	$userAvtar = $allUsers[0]['fld_avtar'];
	$fname = $allUsers[0]['fld_fname'];
	$lname = $allUsers[0]['fld_lname'];
	$email = $allUsers[0]['fld_email'];
	$username = $allUsers[0]['fld_username'];
	$role = $allUsers[0]['fld_role'];
	$passwordLbl = "Leave it blank if you don't wish to update password";
}else{
	$imgLbl = 'Upload <br> Profile Image';
	$subBtn = 'Create Profile';
	$userAvtar = 'user.png';
	$fname = $lname = $email = $username = '';
	$role = '0';
	$lbl = 'New';
	$passwordLbl = 'New Password';
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
            <h3>
              <?=$admin[0]['fld_role'] == '0' ? $lbl :''?> Admin Profile</h3>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="row">
              	<?php if($admin[0]['fld_role'] == '0'){?>
                <form class="form-horizontal form-label-left input_mask addEditAdminProfile">
                <?php }else{ ?>
                <div class="form-horizontal form-label-left input_mask">
                <?php } ?>
                  <input type="hidden" class="aid" name="aid" value="<?=encode($id)?>" />
                  <div class="form-group col-sm-12 text-center">
                  	<?php if($admin[0]['fld_role'] == '0'){?>
                    	<div class="previewImgArea">
                      <label>
                      <input type="file" name="profile" accept="image/*" />
                      <div class="previewImag"><img style="max-width:300px" src="<?=base_url()?>uploads/profile/thumbs/<?=$userAvtar?>"/> </div>
                      <div class="uploadInstruction"><span>
                        <?=$imgLbl?>
                        <br>
                        <i class="fa fa-cloud-upload" aria-hidden="true"></i></span></div>
                      </label>
                    </div>
                    <?php }else{ ?>
                    <img style="max-width:300px" src="<?=base_url()?>uploads/profile/thumbs/<?=$userAvtar?>"/>
                    <?php } ?>
                    
                  </div>
                  <div class="col-md-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Profile Detail</h2>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content"> <br />
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="control-label col-sm-3">First Name <span class="required">*</span></label>
                            <div class="col-sm-9">
                              <input type="text" value="<?=$fname?>" name="fname" required class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-3">Last Name</label>
                            <div class="col-sm-9">
                              <input type="text" value="<?=$lname?>" name="lname" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-3">Username <span class="required">*</span></label>
                            <div class="col-sm-9">
                              <input type="text" value="<?=$username?>" name="username"  class="form-control" required>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="control-label col-sm-3">Email <span class="required">*</span></label>
                            <div class="col-sm-9">
                              <input type="email" value="<?=$email?>" name="email"  class="form-control" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-3">New Password <?=$id?'':'<span class="required">*</span>';?></label>
                            <div class="col-sm-9">
                              <input type="password" name="password" class="form-control nPassword" placeholder="<?=$passwordLbl?>" <?=$id?'':'required';?>>
                            </div>
                            <br>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-3">Admin Role</label>
                            <div class="col-sm-9">
                              <select name="role"  class="form-control selectpicker show-tick" title="Select Admin Role" >
                                <option <?=$role=='0' ? 'selected':''?> data-subtext="can Add/Edit/Delete" value="0">Super Admin</option>
                                <option <?=$role=='1' ? 'selected':''?> data-subtext="can view only" value="1">Admin</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="ln_solid"></div>
                        <?php if(!$id){?>
                        <div class="loginCsend"><label><input name="confirmMail" type="checkbox" />Send login credentials via email</label></div>
                        <?php }?>
                        <div class="form-group">
                          <div class="col-xs-12 text-center">
                            <?php if($admin[0]['fld_role'] == '0'){?>
                                <button type="button" onclick="history.back();" class="btn btn-primary">Cancel</button>
                                <button type="submit" class="btn btn-success">
                                <?=$subBtn?>
                                </button>
                            <?php }else{ ?>
                            	<button type="button" onclick="history.back();" class="btn btn-primary">Go Back!</button>
                            <?php } ?>                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 <?php if($admin[0]['fld_role'] == '0'){?>
                </form>
                <?php }else{ ?>
                </div>
                <?php } ?>
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
