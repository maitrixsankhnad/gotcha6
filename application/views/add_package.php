<?php
include_once('commonFunction.php');
if(!AID){
	redirect(base_url());
	exit;
}
if($id){
	$subBtn = $lbl = 'Update';
	$title = $package[0]['fld_title'];
	$price = $package[0]['fld_price'];
	$label = $package[0]['fld_plan_label'];
	$duration = $package[0]['fld_duration'];
	$detail = $package[0]['fld_detail'];
	$extraPrice = $package[0]['fld_extra_price'];
	$type = $package[0]['fld_type'];
}else{
	$subBtn = $lbl = 'Save Package';
	$title = $price = $label = $duration = $detail = $extraPrice = $type = $status = '';
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
              <?=$admin[0]['fld_role'] == '0' ? $lbl :'Package'?>
              Information</h3>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="row">                  
                <?php if($admin[0]['fld_role'] == '0'){?>
                <form class="form-horizontal form-label-left input_mask addEditPackage">
                  <input type="hidden" value="<?=encode($id)?>" name="pid" class="pid" />
                  <div class="x_title">
                    <h2>Add Package</h2>
                    <div class="clearfix"></div>
                  </div>
                <?php } else {?>
                <div class="form-horizontal form-label-left input_mask">
                  <div class="x_title">
                    <h2>View Package</h2>
                    <div class="clearfix"></div>
                  </div>
                <?php } ?>
                  
                  
                  <div class="col-md-6 col-xs-12">
                    <div class="x_panel">
                      <div class="x_content"> <br />
                        <div class="form-group">
                          <label class="control-label col-sm-3">Package Title <span class="required">*</span></label>
                          <div class="col-sm-9">
                            <input type="text" value="<?=$title?>" name="title" required class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3">Price <span class="required">*</span></label>
                          <div class="col-sm-9">
                            <input type="number" value="<?=$price?>" name="price" required class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3">Highlight Plan</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?=$label?>" name="label" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3">Plan Type</label>
                          <div class="col-sm-9">
                            <select class="form-control selectpicker" name="duration">
                              <option value="0" <?=$duration=='0'?'selected':''?>>Houry</option>
                              <option value="1" <?=$duration=='1'?'selected':''?>>Daily</option>
                              <option value="2" <?=$duration=='2'?'selected':''?>>Monthly</option>
                              <option value="3" <?=$duration=='3'?'selected':''?>>Yearly</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3">Discount Price</label>
                          <div class="col-sm-5">
                            <input type="number" value="<?=$extraPrice?>" name="extraPrice" class="form-control">
                          </div>
                          <div class="col-sm-4">
                            <select title="Discount Sign" class="form-control selectpicker" name="type">
                              <option value="0" <?=$type=='0'?'selected':''?>>+</option>
                              <option value="1" <?=$type=='1'?'selected':''?>>-</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xs-12">
                    <div class="x_panel">
                      <div class="x_content"> <br />
                        <div class="form-group">
                          <label class="control-label">Plan Description</label>
                          <br>
                          <textarea name="detail" rows="7" class="form-control"><?=$detail?></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-xs-12 text-center">
                      <?php if($admin[0]['fld_role'] == '0'){?>
                      <button type="button" onclick="history.back();" class="btn btn-primary">Cancel</button>
                      <button type="submit" class="btn btn-success"><?=$subBtn?></button>
                      <?php } else {?>
                      <button type="button" onclick="history.back();" class="btn btn-primary">Go Back!</button>
                      <?php } ?>
                    </div>
                  </div>
                  <?php if($admin[0]['fld_role'] == '0'){?>
                </form>
                <?php } else {?>
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
