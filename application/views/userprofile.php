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
            <h3>Edit Profile -
              <?=$siteUser[0]['fld_fname']?>
              <?=$siteUser[0]['fld_mname']?>
              <?=$siteUser[0]['fld_lname']?>
            </h3>
          </div>
        </div>
        <!--End: page title -->
        <div class="clearfix"></div>
        
        <!--Start: page data -->
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel"> 
              <!--Start: x Panel -->
              <div class="x_content">
                <form id="userProfile">
                  <input type="hidden" value="<?=encode($siteUser[0]['fld_id'])?>" name="uid" class="userID" />
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <div class="previewImgArea">
                          <label>
                          <input type="file" name="profile" accept="image/*" />
                          <div class="previewImag"><img src="<?=base_url();?>uploads/profile/thumbs/<?=$siteUser[0]['fld_picture']?>"/> </div>
                          <div class="uploadInstruction"><span>Update Profile Image<br>
                            <i class="fa fa-cloud-upload" aria-hidden="true"></i></span></div>
                          </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="previewImgArea">
                              <label>
                              <input type="file" name="resume" accept="application/msword,text/plain, application/pdf," />
                              <div class="previewImag"><img src="<?=base_url();?>assets/images/resume.png"/> </div>
                              <div class="uploadInstruction"><span>Update Resume / CV<br>
                                <i class="fa fa-cloud-upload" aria-hidden="true"></i></span></div>
                              </label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="resumeDownloadBox">
                              <?php if($siteUser[0]['fld_resume']){
								$fileExtn = pathinfo($siteUser[0]['fld_resume'], PATHINFO_EXTENSION);
								if($fileExtn == 'pdf' || $fileExtn == 'PDF'){
									$fileIcon = 'fa-file-pdf-o';
								}else if($fileExtn == 'txt' || $fileExtn == 'TXT'){
									$fileIcon = 'fa-file-text-o';
								}else if($fileExtn == 'docx' || $fileExtn == 'doc' || $fileExtn == 'DOCX' || $fileExtn == 'DOC'){
									$fileIcon = 'fa-file-word-o';
								}else{
									$fileIcon = 'fa-file';
								}
								echo '<br><a download href="'.base_url().'uploads/resume/'.$siteUser[0]['fld_resume'].'"><i class="fa '.$fileIcon.'" aria-hidden="true"></i><span>Download Resume</span></a>';
							}
							?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group smeboxser" style="display:<?=$siteUser[0]['fld_user_type'] == '2' ? 'block':'none'?>">
                        <label>Services</label>
                        <br>
                        <select name="servicetags[]"  class="form-control selectpicker" title="Select Services" data-live-search="true" multiple data-size="8">
                          <?php
						  	
							if($siteUser[0]['fld_user_type'] == '2'){
								$userServiceTag = get_user_service_tag_name($siteUser[0]['fld_id']);
							}
							$userTagList = array_column($userServiceTag, 'fld_serviceTag_id');
							foreach($serviceTag as $serviceTagData){
								$isService = in_array($serviceTagData['fld_id'], $userTagList) ? 'selected':'';
								echo '<option '.$isService.' value="'.$serviceTagData['fld_id'].'" >'.$serviceTagData['fld_serviceName'].'</option>';
							}
							?>
                        </select>
                      </div>
                      <div class="serviceLevelSelection targetLerlw" style="display:<?=$siteUser[0]['fld_user_type'] == '3' ? 'block':'none'?>"><br>
                        <label>Service Lavel</label>
                        <div class="radio">
                          <label>
                            <input type="radio" <?=$siteUser[0]['fld_service_level'] == '0' ? 'checked':''?> value="0" checked class="flat" name="serviceLevel" />
                            Incident Manager </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" <?=$siteUser[0]['fld_service_level'] == '1' ? 'checked':''?> value="1" class="flat" name="serviceLevel" />
                            Project Manager </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" <?=$siteUser[0]['fld_service_level'] == '2' ? 'checked':''?> value="2" class="flat" name="serviceLevel" />
                            IT/Director </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="row">
                        <div class="form-group col-lg-4">
                          <label>First Name</label>
                          <input type="text" name="fname" class="form-control" value="<?=$siteUser[0]['fld_fname']?>" required>
                        </div>
                        <div class="form-group col-lg-4">
                          <label>Middle Name</label>
                          <input type="text" name="mname" class="form-control" value="<?=$siteUser[0]['fld_mname']?>">
                        </div>
                        <div class="form-group col-lg-4">
                          <label>Last Name</label>
                          <input type="text" name="lname" class="form-control" value="<?=$siteUser[0]['fld_lname']?>">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-lg-6">
                          <label>Country</label>
                          <br>
                          <select name="country"  class="form-control selectpicker" >
                            <?php
                            	$countryList = country();
								foreach($countryList as $countryData){
									$isCountry = $countryData['fld_CountryCode'] == $siteUser[0]['fld_country'] ? 'selected':'';
									echo '<option '.$isCountry.' value="'.$countryData['fld_CountryCode'].'" >'.$countryData['fld_CountryName'].'</option>';
								}
							?>
                          </select>
                        </div>
                        <div class="form-group col-lg-6">
                          <label>Time Zone</label>
                          <select name='timezone' class="selectpicker form-control">
                            <option <?=$siteUser[0]['fld_time_zone'] == '-12:00,0' ? 'selected':''?> value='-12:00,0'>(-12:00) International Date Line West</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '-11:00,0' ? 'selected':''?> value='-11:00,0'>(-11:00) Midway Island, Samoa</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '-10:00,0' ? 'selected':''?> value='-10:00,0'>(-10:00) Hawaii</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '-09:00,1' ? 'selected':''?> value='-09:00,1'>(-09:00) Alaska</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '-08:00,1' ? 'selected':''?> value='-08:00,1'>(-08:00) Pacific Time (US & Canada)</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '-07:00,0' ? 'selected':''?> value='-07:00,0'>(-07:00) Arizona</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '-07:00,1' ? 'selected':''?> value='-07:00,1'>(-07:00) Mountain Time (US & Canada)</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '-06:00,0' ? 'selected':''?> value='-06:00,0'>(-06:00) Central America, Saskatchewan</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '-06:00,1' ? 'selected':''?> value='-06:00,1'>(-06:00) Central Time (US & Canada), Guadalajara, Mexico city</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '-05:00,0' ? 'selected':''?> value='-05:00,0'>(-05:00) Indiana, Bogota, Lima, Quito, Rio Branco</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '-05:00,1' ? 'selected':''?> value='-05:00,1'>(-05:00) Eastern time (US & Canada)</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '-04:00,1' ? 'selected':''?> value='-04:00,1'>(-04:00) Atlantic time (Canada), Manaus, Santiago</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '-04:00,0' ? 'selected':''?> value='-04:00,0'>(-04:00) Caracas, La Paz</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '-03:30,1' ? 'selected':''?> value='-03:30,1'>(-03:30) Newfoundland</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '-03:00,1' ? 'selected':''?> value='-03:00,1'>(-03:00) Greenland, Brasilia, Montevideo</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '-03:00,0' ? 'selected':''?> value='-03:00,0'>(-03:00) Buenos Aires, Georgetown</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '-02:00,1' ? 'selected':''?> value='-02:00,1'>(-02:00) Mid-Atlantic</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '-01:00,1' ? 'selected':''?> value='-01:00,1'>(-01:00) Azores</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '-01:00,0' ? 'selected':''?> value='-01:00,0'>(-01:00) Cape Verde Is.</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '00:00,0' ? 'selected':''?> value='00:00,0'>(00:00) Casablanca, Monrovia, Reykjavik</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '00:00,1' ? 'selected':''?> value='00:00,1'>(00:00) GMT: Dublin, Edinburgh, Lisbon, London</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+01:00,1' ? 'selected':''?> value='+01:00,1'>(+01:00) Amsterdam, Berlin, Rome, Vienna, Prague, Brussels</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+01:00,0' ? 'selected':''?> value='+01:00,0'>(+01:00) West Central Africa</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+02:00,1' ? 'selected':''?> value='+02:00,1'>(+02:00) Amman, Athens, Istanbul, Beirut, Cairo, Jerusalem</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+02:00,0' ? 'selected':''?> value='+02:00,0'>(+02:00) Harare, Pretoria</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+03:00,1' ? 'selected':''?> value='+03:00,1'>(+03:00) Baghdad, Moscow, St. Petersburg, Volgograd</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+03:00,0' ? 'selected':''?> value='+03:00,0'>(+03:00) Kuwait, Riyadh, Nairobi, Tbilisi</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+03:30,0' ? 'selected':''?> value='+03:30,0'>(+03:30) Tehran</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+04:00,0' ? 'selected':''?> value='+04:00,0'>(+04:00) Abu Dhadi, Muscat</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+04:00,1' ? 'selected':''?> value='+04:00,1'>(+04:00) Baku, Yerevan</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+04:30,0' ? 'selected':''?> value='+04:30,0'>(+04:30) Kabul</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+05:00,1' ? 'selected':''?> value='+05:00,1'>(+05:00) Ekaterinburg</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+05:00,0' ? 'selected':''?> value='+05:00,0'>(+05:00) Islamabad, Karachi, Tashkent</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+05:30,0' ? 'selected':''?> value='+05:30,0'>(+05:30) Chennai, Kolkata, Mumbai, New Delhi, Sri Jayawardenepura</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+05:45,0' ? 'selected':''?> value='+05:45,0'>(+05:45) Kathmandu</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+06:00,0' ? 'selected':''?> value='+06:00,0'>(+06:00) Astana, Dhaka</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+06:00,1' ? 'selected':''?> value='+06:00,1'>(+06:00) Almaty, Nonosibirsk</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+06:30,0' ? 'selected':''?> value='+06:30,0'>(+06:30) Yangon (Rangoon)</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+07:00,1' ? 'selected':''?> value='+07:00,1'>(+07:00) Krasnoyarsk</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+07:00,0' ? 'selected':''?> value='+07:00,0'>(+07:00) Bangkok, Hanoi, Jakarta</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+08:00,0' ? 'selected':''?> value='+08:00,0'>(+08:00) Beijing, Hong Kong, Singapore, Taipei</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+08:00,1' ? 'selected':''?> value='+08:00,1'>(+08:00) Irkutsk, Ulaan Bataar, Perth</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+09:00,1' ? 'selected':''?> value='+09:00,1'>(+09:00) Yakutsk</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+09:00,0' ? 'selected':''?> value='+09:00,0'>(+09:00) Seoul, Osaka, Sapporo, Tokyo</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+09:30,0' ? 'selected':''?> value='+09:30,0'>(+09:30) Darwin</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+09:30,1' ? 'selected':''?> value='+09:30,1'>(+09:30) Adelaide</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+10:00,0' ? 'selected':''?> value='+10:00,0'>(+10:00) Brisbane, Guam, Port Moresby</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+10:00,1' ? 'selected':''?> value='+10:00,1'>(+10:00) Canberra, Melbourne, Sydney, Hobart, Vladivostok</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+11:00,0' ? 'selected':''?> value='+11:00,0'>(+11:00) Magadan, Solomon Is., New Caledonia</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+12:00,1' ? 'selected':''?> value='+12:00,1'>(+12:00) Auckland, Wellington</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+12:00,0' ? 'selected':''?> value='+12:00,0'>(+12:00) Fiji, Kamchatka, Marshall Is.</option>
                            <option <?=$siteUser[0]['fld_time_zone'] == '+13:00,0' ? 'selected':''?> value='+13:00,0'>(+13:00) Nuku'alofa</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-lg-4">
                          <label>Facebook Link</label>
                          <div class="boxIconInput">
                            <input type="text" name="facebook" class="form-control" value="<?=$siteUser[0]['fld_facebook']?>">
                            <span class="fa fa-facebook iconRight" aria-hidden="true"></span></div>
                        </div>
                        <div class="form-group col-lg-4">
                          <label>Linkedin Link</label>
                          <div class="boxIconInput">
                            <input type="text" name="linkedin" class="form-control" value="<?=$siteUser[0]['fld_linkedin']?>">
                            <span class="fa fa-linkedin iconRight" aria-hidden="true"></span></div>
                        </div>
                        <div class="form-group col-lg-4">
                          <label>Google+ Link</label>
                          <div class="boxIconInput">
                            <input type="text" name="google" class="form-control" value="<?=$siteUser[0]['fld_google']?>">
                            <span class="fa fa-google-plus iconRight" aria-hidden="true"></span></div>
                        </div>
                        <!-- paypal and strip payment input box -->
                        <div class="form-group col-lg-6">
                          <label>Paypal Payment</label>
                          <div class="boxIconInput">
                            <input type="text" name="paypal" class="form-control" value="<?=$siteUser[0]['fld_paypal']?>">
                          </div>
                        </div>
                        <div class="form-group col-sm-6">
                          <label class="control-label">Stripe Payment</label>
                          <div class="boxIconInput">
                            <input type="text" name="stripe" class="form-control" value="<?=$siteUser[0]['fld_stripe']?>">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-lg-12">
                          <label>About</label>
                          <textarea class="form-control" name="about"><?=$siteUser[0]['fld_about']?>
</textarea>
                        </div>
                      </div>
                      <div class="row"><br>
                        <div class="form-group col-lg-12">
                          <hr />
                        </div>
                        <div class="form-group col-lg-4">
                          <label>Username</label>
                          <input type="text" onBlur="checkEmailUserExist(this,1)" onKeyDown="$('.errrorUsr').hide()" name="username" class="form-control" value="<?=$siteUser[0]['fld_username']?>" required>
                          <span class="boxLblRo errrorUsr">This username is already registered to someone else. Try some different Username</span> </div>
                        <div class="form-group col-lg-4">
                          <label>Email</label>
                          <input type="email" name="email" class="form-control"  onKeyDown="$('.errrorEmail').hide()" onBlur="checkEmailUserExist(this,2)" value="<?=$siteUser[0]['fld_email']?>" required>
                          <span class="boxLblRo errrorEmail">This email is already registered to someone else. Try some different email ID</span> </div>
                        <div class="form-group col-lg-4">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control" >
                          <span class="boxLblRo">(Leave it blank if you don't wish to update password)</span> </div>
                      </div>
                      <div class="row"> <br>
                        <div class="col-md-12">
                          <label>User Type</label>
                        </div>
                        <div class="col-md-6">
                          <div class="serviceLevelSelection">
                            <div class="radio">
                              <label>
                                <input type="radio" <?=$siteUser[0]['fld_user_type'] == '0' ? 'checked':''?> value="0" checked class="flat" name="userType" />
                                Customer </label>
                            </div>
                            <div class="radio">
                              <label>
                                <input type="radio" <?=$siteUser[0]['fld_user_type'] == '2' ? 'checked':''?> value="2" class="flat" name="userType" />
                                SME </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="serviceLevelSelection">
                            <div class="radio">
                              <label>
                                <input type="radio" <?=$siteUser[0]['fld_user_type'] == '3' ? 'checked':''?> value="3" class="flat" name="userType" />
                                Resource Manager</label>
                            </div>
                            <?php if($siteUser[0]['fld_user_type'] == '1' || $siteUser[0]['fld_user_type'] == '4'){?>
                            <div class="radio">
                              <label>
                                <input type="radio" checked value="<?=$siteUser[0]['fld_user_type']?>" class="flat" name="userType" />
                                Pending </label>
                            </div>
                            <?php } ?>
                          </div>
                        </div>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="form-group col-lg-12 text-center">
                          <button type="submit" class="btn btn-primary">Update User Profile</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
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
<script src="<?=base_url() ?>assets/vendors/jquery-knob/dist/jquery.knob.min.js"></script> 
<script src="<?=base_url() ?>assets/build/js/custom.js"></script>
</body>
</html>