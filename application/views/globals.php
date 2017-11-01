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
              <?php if($admin[0]['fld_role'] == '0'){?>
                <div class="form-group col-sm-12 text-center">
                      <label for="uploadImage" class="control-label uploadImagePreview"> <img width="150px" class="previewImgSrc" src="<?=base_url()?>assets/images/<?=$globals[0]['fld_logo']?>" /> <span style="padding-top:15%" class="uploadInstruction">Replace <br>
                        company Logo</span> </label>
                      <input type="file" class="uploadImageInput" onChange="updateAdminImage(this,'logo')" id="uploadImage" accept=".gif,.jpg,.jpeg,.JPG,.JPEG,.png," name="logo" />
                 </div>
                 <form class="globalSettings">
                  <div class="input-group col-sm-4 col-sm-offset-4">
                    <input class="form-control" name="company" value="<?=$globals[0]['fld_company_name']?>" type="text">
                    <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary">Update Company Name!</button>
                    </span> </div>
                </form>
                  <?php }else{ ?>
                  <div class="form-group col-sm-12 text-center">
                  	  <img width="150px" class="previewImgSrc" src="<?=base_url()?>assets/images/<?=$globals[0]['fld_logo']?>" />                  
                	<div class="comInforl"><?=$globals[0]['fld_company_name']?></div>
                </div>                
                <?php } ?>
                <div class="col-md-6 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Company Address</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content"> <br />
                      <form class="form-horizontal form-label-left input_mask globalSettings">
                        <input type="hidden" value="true" name="address">
                        <div class="form-group">
                          <label class="control-label col-sm-3">Address 1 </label>
                          <div class="col-sm-9">
                            <input type="text" value="<?=$globals[0]['fld_address1']?>" name="address1" required class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3">Address 2</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?=$globals[0]['fld_address2']?>" name="address2" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3">City</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?=$globals[0]['fld_city']?>"  name="city" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3">Country</label>
                          <div class="col-sm-9">
                            <select name="country"  class="form-control selectpicker" title="Select Services" data-live-search="true" data-size="8">
                              <?php
                            	$countryList = country();
								foreach($countryList as $countryData){
									$isCountry = $countryData['fld_CountryCode'] == $globals[0]['fld_country'] ? 'selected':'';
									echo '<option '.$isCountry.' value="'.$countryData['fld_CountryCode'].'" >'.$countryData['fld_CountryName'].'</option>';
								}
							?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3">Zip Code</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?=$globals[0]['fld_zip']?>"  name="zip"class="form-control">
                          </div>
                        </div>
                        <?php if($admin[0]['fld_role'] == '0'){?>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-xs-12 text-center">
                            <button type="button" onclick="history.back();" class="btn btn-primary">Cancel</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                          </div>
                        </div>
                        <?php } ?>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Contact Settings</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content"> <br />
                      <form class="form-horizontal form-label-left input_mask globalSettings">
                        <div class="form-group">
                          <label class="control-label col-sm-3">Email</label>
                          <div class="col-sm-9">
                            <input type="text" maxlength="300"  value="<?=$globals[0]['fld_email']?>"  name="email" required class="form-control">
                          </div>
                          <br>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3">Phone</label>
                          <div class="col-sm-9">
                            <input type="text" maxlength="300" value="<?=$globals[0]['fld_phone']?>"  name="phone" class="form-control">
                          </div>
                          <br>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3">Website</label>
                          <div class="col-sm-9">
                            <input type="text" value="<?=base_url()?>" disabled class="form-control">
                          </div>
                          <br>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3">Company Short Description</label>
                          <div class="col-sm-9">
                            <textarea name="description" class="form-control" rows="1" ><?=$globals[0]['fld_company_description']?>
</textarea>
                          </div>
                          <br>
                        </div>
                        <br>
                        <?php if($admin[0]['fld_role'] == '0'){?>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-xs-12 text-center">
                            <button type="button" onclick="history.back();" class="btn btn-primary">Cancel</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                            <br>
                          </div>
                        </div>
                        <?php } ?>
                      </form>
                    </div>
                  </div>
                </div>
                
                <?php if($admin[0]['fld_role'] == '1'){?>
                <div class="clearfix"></div>
                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-xs-12 text-center">
                    <button type="button" onclick="history.back();" class="btn btn-primary">Go Back!</button>
                    <br>
                  </div>
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
