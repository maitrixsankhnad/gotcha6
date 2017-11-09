<?php 
include_once('commonFunction.php');
$this->load->view('userchat');
$uid = $this->session->userdata('UID');
if(!$uid){
	redirect(base_url());
	exit;
}
$userType = '';
$user_type = $user[0]['fld_user_type'];   // get the user type
if($user[0]['fld_user_type'] == 0){
	$userType = 'Customer';
}else if($user[0]['fld_user_type'] == 2){
	$userType = 'Subject Matter Expert';
}else if($user[0]['fld_user_type'] == 3){
	$userType = 'Resource Manager';
}else{
	$userType = '';
}
$isNotificationPanl = 'true';

//print_r($tagsId);
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
    <?php include('include/sidebar.php'); ?>
    <?php include('include/header.php'); ?>
    <div class="right_col" role="main">
      <div class="">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>User Profile <small>Activity report</small></h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                  <div class="profile_img">
                    <div class="previewImgArea">
                      <label>
                      <input id="uploadImage" onChange="updateAdminImage(this,'user')" type="file" name="profile" accept="image/*" />
                      <div class="previewImag"><img class="img-responsive avatar-view" src="<?=$profilePic?>"/> </div>
                      <div class="uploadInstruction"><span>Update Profile Image<br>
                        <i class="fa fa-cloud-upload" aria-hidden="true"></i></span></div>
                      </label>
                    </div>
                  </div>
                  <h3>
                    <?=$user[0]['fld_fname'].' '.$user[0]['fld_mname'].' '.$user[0]['fld_lname']?>
                  </h3>
                  <ul class="list-unstyled user_data">
                    <?php if($user[0]['fld_CountryName']){?>
                    <li><i class="fa fa-map-marker user-profile-icon"></i>
                      <?=$user[0]['fld_CountryName']?>
                    </li>
                    <?php } ?>
                    <li> <i class="fa fa-briefcase user-profile-icon"></i>
                      <?=$userType?>
                    </li>
                    <li class="m-top-xs"> <i class="fa fa fa-envelope-o user-profile-icon"></i> <a href="mailTo:<?=$user[0]['fld_email']?>">
                      <?=$user[0]['fld_email']?>
                      </a> </li>
                  </ul>
                  <a  href="#tab_content3" role="tab" data-toggle="tab" aria-expanded="false" onClick="switchEditProfileTab();" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a> <br />
                  
                  <!-- start skills --> 
                  
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <ul class="nav nav-tabs bar_tabs tabTopFlow" role="tablist">
                      <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Recent Activity</a> </li>
                      <!--                      <li role="presentation"><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Projects Worked on</a> </li>-->
                      <li class="editProfile" role="presentation"><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a> </li>
                      <?php if($user[0]['fld_user_type'] ==2){?>
                      <li class="editProfile" role="presentation"><a href="#tab_content4" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Manage Certificate</a> </li>
                      <?php } ?>
                    </ul>
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab"> 
                        <!-- start recent activity -->
                        <ul class="messages">
                          <?php 
						  	if(count($activityList) > 0){
						  		echo $nActivityLog;
						  ?>
                          <?php }else{ ?>
                        	<li> <span class="message">No Record Found</span> </li>
                          <?php } ?>
                        </ul>
                        <!-- end recent activity --> 
                        
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab"> 
                        
                        <!-- start user projects -->
                        <table class="data table table-striped no-margin">
                          <thead>
                            <tr>
                              <th>Title</th>
                              <th>Service Tag</th>
                              <th>Description</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
							$status = '';
							foreach ($inci as $inciListAll){
								switch ($inciListAll->fld_status) {
									case 0:
										$status = "Complete";
										$cls	=	'success';
										break;
									case 1:
										$status = "Pending";
										$cls	=	'danger';
										break;
									case 2:
										$status = "Approve";
										$cls	=	'success';
										break;
									default:
										$status = "Pending";
										$cls	=	'danger';
								}
							?>
                            <tr>
                              <td><a href="<?=base_url()?>dashboard/incident_preview/<?=$inciListAll->fld_id; ?>" target="_blank">
                                <?=$inciListAll->fld_inci_title;?>
                                </a></td>
                              <td><?php $arr = array();
                        $arr = get_incident_rel_service_tag_name($inciListAll->fld_id);
						$r = 0;
						$servbiteagList = '';
                        foreach($arr as $abc){
							
							if($r>2) continue;
								$servbiteagList .= $abc['fld_serviceName'].', ';
							$r++;
						}
							echo substr($servbiteagList,0,-2);	
							echo count($arr) > 2 ? '..':'';					
						 ?></td>
                              <td><?=substr($inciListAll->fld_summary,0,25);?></td>
                              <td><span class="btn btn-<?=$cls?> btn-xs">
                                <?=$status?>
                                </span></td>
                            </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                        <!-- end user projects --> 
                        
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        <div class="row">
                          <form style="margin:0" id="updtCustomer">
                            <input type="hidden" name="fld_user_type" value="<?=$user_type ?>"/>
                            <div class="container-fluid">
                              <section class="container">
                                <div class="container-page">
                                  <div class="col-md-12">
                                    <div class="clearfix"></div>
                                    <div class="form-group col-lg-4">
                                      <label>First Name</label>
                                      <input type="text" name="fld_fname" class="form-control" value="<?=$user[0]['fld_fname']; ?>">
                                    </div>
                                    <div class="form-group col-lg-4">
                                      <label>Middle Name</label>
                                      <input type="text" name="fld_mname" class="form-control" value="<?=$user[0]['fld_mname']; ?>">
                                    </div>
                                    <div class="form-group col-lg-4">
                                      <label>Last Name</label>
                                      <input type="text" name="fld_lname" class="form-control" value="<?=$user[0]['fld_lname']; ?>">
                                    </div>
                                    <div class="form-group col-lg-6">
                                      <label>Country</label>
                                      <select name="fld_country"  class="form-control" id="country" >
                                        <?php foreach($country as $count): ?>
                                        <option value="<?php echo $count->fld_CountryCode;?>" <?php echo ( $count->fld_CountryCode == $user[0]['fld_country'] ) ? 'selected="selected"' : ''; ?>><?php echo $count->fld_CountryName; ?></option>
                                        <?php endforeach; ?>
                                      </select>
                                    </div>
                                    <div class="form-group col-lg-6">
                                      <label>Time Zone</label>
                                      <select name='fld_time_zone' id='timezone'  class="form-control selectpicker btn dropdown-toggle btn-default">
                                        <option value='-12:00,0' <?php echo ( $user[0]['fld_time_zone'] == '-12:00,0') ? 'selected="selected"' : ''; ?>>(-12:00) International Date Line West</option>
                                        <option value='-11:00,0' <?php echo ( $user[0]['fld_time_zone'] == '-11:00,0') ? 'selected="selected"' : ''; ?>>(-11:00) Midway Island, Samoa</option>
                                        <option value='-10:00,0' <?php echo ( $user[0]['fld_time_zone'] == '-10:00,0') ? 'selected="selected"' : ''; ?>>(-10:00) Hawaii</option>
                                        <option value='-09:00,1' <?php echo ( $user[0]['fld_time_zone'] == '-09:00,1') ? 'selected="selected"' : ''; ?>>(-09:00) Alaska</option>
                                        <option value='-08:00,1' <?php echo ( $user[0]['fld_time_zone'] == '-08:00,1') ? 'selected="selected"' : ''; ?>>(-08:00) Pacific Time (US & Canada)</option>
                                        <option value='-07:00,0' <?php echo ( $user[0]['fld_time_zone'] == '-07:00,0') ? 'selected="selected"' : ''; ?>>(-07:00) Arizona</option>
                                        <option value='-07:00,1' <?php echo ( $user[0]['fld_time_zone'] == '-07:00,1') ? 'selected="selected"' : ''; ?>>(-07:00) Mountain Time (US & Canada)</option>
                                        <option value='-06:00,0' <?php echo ( $user[0]['fld_time_zone'] == '-06:00,0') ? 'selected="selected"' : ''; ?>>(-06:00) Central America, Saskatchewan</option>
                                        <option value='-06:00,1' <?php echo ( $user[0]['fld_time_zone'] == '-06:00,1') ? 'selected="selected"' : ''; ?>>(-06:00) Central Time (US & Canada), Guadalajara, Mexico city</option>
                                        <option value='-05:00,0' <?php echo ( $user[0]['fld_time_zone'] == '-05:00,0') ? 'selected="selected"' : ''; ?>>(-05:00) Indiana, Bogota, Lima, Quito, Rio Branco</option>
                                        <option value='-05:00,1' <?php echo ( $user[0]['fld_time_zone'] == '-05:00,1') ? 'selected="selected"' : ''; ?>>(-05:00) Eastern time (US & Canada)</option>
                                        <option value='-04:00,1' <?php echo ( $user[0]['fld_time_zone'] == '-04:00,1') ? 'selected="selected"' : ''; ?>>(-04:00) Atlantic time (Canada), Manaus, Santiago</option>
                                        <option value='-04:00,0' <?php echo ( $user[0]['fld_time_zone'] == '-04:00,0') ? 'selected="selected"' : ''; ?>>(-04:00) Caracas, La Paz</option>
                                        <option value='-03:30,1' <?php echo ( $user[0]['fld_time_zone'] == '-03:30,1') ? 'selected="selected"' : ''; ?>>(-03:30) Newfoundland</option>
                                        <option value='-03:00,1' <?php echo ( $user[0]['fld_time_zone'] == '-03:00,1') ? 'selected="selected"' : ''; ?>>(-03:00) Greenland, Brasilia, Montevideo</option>
                                        <option value='-03:00,0' <?php echo ( $user[0]['fld_time_zone'] == '-03:00,0') ? 'selected="selected"' : ''; ?>>(-03:00) Buenos Aires, Georgetown</option>
                                        <option value='-02:00,1' <?php echo ( $user[0]['fld_time_zone'] == '-02:00,1') ? 'selected="selected"' : ''; ?>>(-02:00) Mid-Atlantic</option>
                                        <option value='-01:00,1' <?php echo ( $user[0]['fld_time_zone'] == '-01:00,1') ? 'selected="selected"' : ''; ?>>(-01:00) Azores</option>
                                        <option value='-01:00,0' <?php echo ( $user[0]['fld_time_zone'] == '-01:00,0') ? 'selected="selected"' : ''; ?>>(-01:00) Cape Verde Is.</option>
                                        <option value='00:00,0'  <?php echo ( $user[0]['fld_time_zone'] == '00:00,0') ? 'selected="selected"' : ''; ?>>(00:00) Casablanca, Monrovia, Reykjavik</option>
                                        <option value='00:00,1'  <?php echo ( $user[0]['fld_time_zone'] == '00:00,1') ? 'selected="selected"' : ''; ?>>(00:00) GMT: Dublin, Edinburgh, Lisbon, London</option>
                                        <option value='+01:00,1' <?php echo ( $user[0]['fld_time_zone'] == '+01:00,1') ? 'selected="selected"' : ''; ?>>(+01:00) Amsterdam, Berlin, Rome, Vienna, Prague, Brussels</option>
                                        <option value='+01:00,0' <?php echo ( $user[0]['fld_time_zone'] == '+01:00,0') ? 'selected="selected"' : ''; ?>>(+01:00) West Central Africa</option>
                                        <option value='+02:00,1' <?php echo ( $user[0]['fld_time_zone'] == '+02:00,1') ? 'selected="selected"' : ''; ?>>(+02:00) Amman, Athens, Istanbul, Beirut, Cairo, Jerusalem</option>
                                        <option value='+02:00,0' <?php echo ( $user[0]['fld_time_zone'] == '+02:00,0') ? 'selected="selected"' : ''; ?>>(+02:00) Harare, Pretoria</option>
                                        <option value='+03:00,1' <?php echo ( $user[0]['fld_time_zone'] == '+03:00,1') ? 'selected="selected"' : ''; ?>>(+03:00) Baghdad, Moscow, St. Petersburg, Volgograd</option>
                                        <option value='+03:00,0' <?php echo ( $user[0]['fld_time_zone'] == '+03:00,0') ? 'selected="selected"' : ''; ?>>(+03:00) Kuwait, Riyadh, Nairobi, Tbilisi</option>
                                        <option value='+03:30,0' <?php echo ( $user[0]['fld_time_zone'] == '+03:30,0') ? 'selected="selected"' : ''; ?>>(+03:30) Tehran</option>
                                        <option value='+04:00,0' <?php echo ( $user[0]['fld_time_zone'] == '+04:00,0') ? 'selected="selected"' : ''; ?>>(+04:00) Abu Dhadi, Muscat</option>
                                        <option value='+04:00,1' <?php echo ( $user[0]['fld_time_zone'] == '+04:00,1') ? 'selected="selected"' : ''; ?>>(+04:00) Baku, Yerevan</option>
                                        <option value='+04:30,0' <?php echo ( $user[0]['fld_time_zone'] == '+04:30,0') ? 'selected="selected"' : ''; ?>>(+04:30) Kabul</option>
                                        <option value='+05:00,1' <?php echo ( $user[0]['fld_time_zone'] == '+05:00,1') ? 'selected="selected"' : ''; ?>>(+05:00) Ekaterinburg</option>
                                        <option value='+05:00,0' <?php echo ( $user[0]['fld_time_zone'] == '+05:00,0') ? 'selected="selected"' : ''; ?>>(+05:00) Islamabad, Karachi, Tashkent</option>
                                        <option value='+05:30,0' <?php echo ( $user[0]['fld_time_zone'] == '+05:30,0') ? 'selected="selected"' : ''; ?>>(+05:30) Chennai, Kolkata, Mumbai, New Delhi, Sri Jayawardenepura</option>
                                        <option value='+05:45,0' <?php echo ( $user[0]['fld_time_zone'] == '+05:45,0') ? 'selected="selected"' : ''; ?>>(+05:45) Kathmandu</option>
                                        <option value='+06:00,0' <?php echo ( $user[0]['fld_time_zone'] == '+06:00,0') ? 'selected="selected"' : ''; ?>>(+06:00) Astana, Dhaka</option>
                                        <option value='+06:00,1' <?php echo ( $user[0]['fld_time_zone'] == '+06:00,1') ? 'selected="selected"' : ''; ?>>(+06:00) Almaty, Nonosibirsk</option>
                                        <option value='+06:30,0' <?php echo ( $user[0]['fld_time_zone'] == '+06:30,0') ? 'selected="selected"' : ''; ?>>(+06:30) Yangon (Rangoon)</option>
                                        <option value='+07:00,1' <?php echo ( $user[0]['fld_time_zone'] == '+07:00,1') ? 'selected="selected"' : ''; ?>>(+07:00) Krasnoyarsk</option>
                                        <option value='+07:00,0' <?php echo ( $user[0]['fld_time_zone'] == '+07:00,0') ? 'selected="selected"' : ''; ?>>(+07:00) Bangkok, Hanoi, Jakarta</option>
                                        <option value='+08:00,0' <?php echo ( $user[0]['fld_time_zone'] == '+08:00,0') ? 'selected="selected"' : ''; ?>>(+08:00) Beijing, Hong Kong, Singapore, Taipei</option>
                                        <option value='+08:00,1' <?php echo ( $user[0]['fld_time_zone'] == '+08:00,1') ? 'selected="selected"' : ''; ?>>(+08:00) Irkutsk, Ulaan Bataar, Perth</option>
                                        <option value='+09:00,1' <?php echo ( $user[0]['fld_time_zone'] == '+09:00,1') ? 'selected="selected"' : ''; ?>>(+09:00) Yakutsk</option>
                                        <option value='+09:00,0' <?php echo ( $user[0]['fld_time_zone'] == '+09:00,0') ? 'selected="selected"' : ''; ?>>(+09:00) Seoul, Osaka, Sapporo, Tokyo</option>
                                        <option value='+09:30,0' <?php echo ( $user[0]['fld_time_zone'] == '+09:30,0') ? 'selected="selected"' : ''; ?>>(+09:30) Darwin</option>
                                        <option value='+09:30,1' <?php echo ( $user[0]['fld_time_zone'] == '+09:30,1') ? 'selected="selected"' : ''; ?>>(+09:30) Adelaide</option>
                                        <option value='+10:00,0' <?php echo ( $user[0]['fld_time_zone'] == '+10:00,0') ? 'selected="selected"' : ''; ?>>(+10:00) Brisbane, Guam, Port Moresby</option>
                                        <option value='+10:00,1' <?php echo ( $user[0]['fld_time_zone'] == '+10:00,1') ? 'selected="selected"' : ''; ?>>(+10:00) Canberra, Melbourne, Sydney, Hobart, Vladivostok</option>
                                        <option value='+11:00,0' <?php echo ( $user[0]['fld_time_zone'] == '+11:00,0') ? 'selected="selected"' : ''; ?>>(+11:00) Magadan, Solomon Is., New Caledonia</option>
                                        <option value='+12:00,1' <?php echo ( $user[0]['fld_time_zone'] == '+12:00,1') ? 'selected="selected"' : ''; ?>>(+12:00) Auckland, Wellington</option>
                                        <option value='+12:00,0' <?php echo ( $user[0]['fld_time_zone'] == '+12:00,0') ? 'selected="selected"' : ''; ?>>(+12:00) Fiji, Kamchatka, Marshall Is.</option>
                                        <option value='+13:00,0' <?php echo ( $user[0]['fld_time_zone'] == '+13:00,0') ? 'selected="selected"' : ''; ?>>(+13:00) Nuku'alofa</option>
                                      </select>
                                    </div>
                                    <div class="clearfix"></div>
                                    <?php if ($user_type != 0){?>
                                    <div class="form-group col-lg-4">
                                      <label>Facebook Link</label>
                                      <div class="boxIconInput">
                                        <input type="text" name="fld_facebook" class="form-control" value="<?=$user[0]['fld_facebook']; ?>">
                                        <span class="fa fa-facebook iconRight" aria-hidden="true"></span></div>
                                    </div>
                                    <div class="form-group col-lg-4">
                                      <label>Linkedin Link</label>
                                      <div class="boxIconInput">
                                        <input type="text" name="fld_microsoft" class="form-control" value="<?=$user[0]['fld_microsoft']; ?>">
                                        <span class="fa fa-linkedin iconRight" aria-hidden="true"></span></div>
                                    </div>
                                    <div class="form-group col-lg-4">
                                      <label>Google+ Link</label>
                                      <div class="boxIconInput">
                                        <input type="text" name="fld_google" class="form-control" value="<?=$user[0]['fld_google']; ?>">
                                        <span class="fa fa-google-plus iconRight" aria-hidden="true"></span></div>
                                    </div>
                                    <!-- paypal and strip payment input box -->
                                    
                                    <div class="form-group col-lg-6">
                                      <label>Paypal Payment</label>
                                      <div class="boxIconInput">
                                        <input type="text" name="fld_paypal" class="form-control" value="<?=$user[0]['fld_paypal']; ?>">
                                      </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                      <label class="control-label">Stripe Payment</label>
                                      <div class="boxIconInput">
                                        <input type="text" name="fld_stripe" class="form-control" value="<?=$user[0]['fld_stripe']; ?>">
                                      </div>
                                    </div>
                                    
                                    <!-- End  -->
                                    
                                    <div class="form-group col-sm-6 uploadingBoxCustm">
                                      <label class="control-label">Update Profile Picture</label>
                                      <label class="uploadLblcClick" for="profilePIc">Click here to upload <i class="fa fa-upload" aria-hidden="true"></i></label>
                                      <input id="profilePIc" accept=".gif,.jpg,.jpeg,.JPG,.JPEG,.png," name="fld_picture" size="20" type="file">
                                    </div>
                                    <div class="col-sm-6 uploadingBoxCustm">
                                      <label class="control-label">Update Resume / CV</label>
                                      <label class="uploadLblcClick" for="resumeUp">Click here to upload <i class="fa fa-upload" aria-hidden="true"></i></label>
                                      <input id="resumeUp" type="file" accept=".pdf,.txt,.docx,.doc" name="fld_resume" size="20" value="<?=$user[0]['fld_resume']; ?>">
                                      <?php if($user[0]['fld_resume']){ ?>
                                      <a href="<?=base_url()?>uploads/resume/<?=$user[0]['fld_resume']; ?>" target="_blank" class="dwn">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                                      <?php } ?>
                                    </div>
                                    <?php } ?>
                                  </div>
                                  <div class="clearfix"></div>
                                  <br>
                                  <?php if ($user_type != 0){?>
                                  <?php if ($user_type==2){?>
                                  <div class="form-group inlineBlockFull col-md-12">
                                    <div class="col-md-2">
                                      <label class="form-label">Availability</label>
                                      <br>
                                      <a onClick="appendNewHour()" href="javascript:void(0);"><i class="fa fa-plus" aria-hidden="true"></i> Add More Time Slot</a> </div>
                                    <div class="col-md-10 ">
                                      <div class="row boxReadernr">
                                          <?php $timeslot = scheduleSlot($user[0]['fld_id']);
                                             if(!empty($timeslot)){                           
                                            foreach($timeslot as $timeslotData){
                                                 $startHour = date('h', strtotime($timeslotData['fld_start_time'])); 
                                                 $startMinute = date('i', strtotime($timeslotData['fld_start_time'])); 
                                                
                                                 $endHour = date('h', strtotime($timeslotData['fld_end_time'])); 
                                               
                                                 $endMinute = date('i', strtotime($timeslotData['fld_end_time']));  
                                        
                                         // print_r($timeslot);
                                          
                                             ?>  <?php  }} ?>  
                                        <div class="form-group col-md-6">
                                          <label>Start Time</label>
                                          <div class="row">
                                            <div class="col-xs-6">
                                              <select title="Hours" name="starthours[]"  id ="hrstart" class="hrsP" data-size="5" data-width="100%" data-live-search="true">
                                              </select>
                                            </div>
                                            <div class="col-xs-6">
                                              <select title="Minuts"   name="startminutes[]" class="mintsP" data-size="5" data-width="100%" data-live-search="true">
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                          <label>End Time</label>
                                          <div class="row">
                                            <div class="col-xs-6">
                                              <select title="Hours"  name="endhours[]" class="hrsP" data-size="5" data-width="100%" data-live-search="true">
                                              </select>
                                            </div>
                                            <div class="col-xs-6">
                                              <select title="Minuts"  name="endminutes[]" class="mintsP" data-size="5" data-width="100%" data-live-search="true">
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                          
                                      
                                        <div style="margin-bottom:10px;" class="clearfix"></div>
                                      </div>
                                      <div class="row setBoxNewHor"> </div>
                                      
                                    </div>
                                  </div>
                                   <?php } ?>
                                  <div class="clearfix"></div>
                                  <?php if ($user_type==2){?>
                                  <div class="row">
                                    <div class="form-group inlineBlockFull col-md-12">
                                      <label class="form-label col-md-2 col-xs-3">Service Tags</label>
                                      <div class="col-md-10 col-xs-9">
                                       
                                        <select name="servicetags[]"  class="form-control selectpicker" title="Select Services" data-live-search="true" multiple data-size="8">
                                            <?php

                                                if($user[0]['fld_user_type'] == '2'){
                                                        $userServiceTag = get_user_service_tag_name($user[0]['fld_id']);
                                                }
                                                $userTagList = array_column($userServiceTag, 'fld_serviceTag_id');
                                                foreach($serviceTag as $serviceTagData){
                                                        $isService = in_array($serviceTagData['fld_id'], $userTagList) ? 'selected':'';
                                                        echo '<option '.$isService.' value="'.$serviceTagData['fld_id'].'" >'.$serviceTagData['fld_serviceName'].'</option>';
                                                }
                                        ?>
                                          </select>
                                      </div>
                                    </div>
                                  </div>
                                  <?php } ?>
                                  <div class="clearfix"></div>
                                  <div class="row">
                                    <div class="form-group col-md-12">
                                      <label class="form-label col-md-2 col-xs-3" for="comment">Market yourself: Tell Us About You</label>
                                      <div class="col-md-10 col-xs-9">
                                        <textarea class="form-control" rows="5" name="fld_about" id="comment"> <?=$user[0]['fld_about']; ?>
</textarea>
                                      </div>
                                    </div>
                                  </div>
                                  <?php } ?>
                                  <br>
                                  <center>
                                    <button type="submit" class="btn btn-primary">Update Profile</button>
                                  </center>
                                </div>
                              </section>
                            </div>
                          </form>
                        </div>
                      </div>
                      <?php if($user[0]['fld_user_type'] == 2){?>
                      <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab3"> 
                        <!-- start user projects -->
                        <form style="margin:0" id="manageCretificate">
                          <table class="table selfAssesementTbl table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th>Service Tags</th>
                                <th>Rating</th>
                                <th>Certification Number</th>
                                <th>Expiray Date</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <input type="hidden" value=" <?php echo $uid ;?>" id="uId"/>
                            <tbody class="boxInputFull">
                              <?php
                                $i = 0;
                                  foreach($userTag as $uTag) {
                                      $i += 1;
				$id = 'section'.$i;
                                ?>
                              <tr id="section<?=$i;?>">
                                  <td class="disableMouse"><select class="selectpicker" disabled data-size="8" name="servicetags" data-width="100%" data-live-search="true" data-actions-box="true">
                                    <?php 
                                       
                                        foreach ($serviceTag as $tag){
                                            
                                            $isSerlectedTag = $uTag['fld_serviceTag_id']== $tag['fld_id'] ? 'selected':'';
                                            echo '<option '.$isSerlectedTag.' data-subtext="'.$tag['fld_manufacturer'].'" value="'.$tag['fld_id'].'">'.$tag['fld_serviceName'].'</option>';
                                        }
                                        
                                        ?>
                                  </select></td>
                                <td class="disableMouse"><div class="selfDiscBox">
                                    <div class="stars stars-example-fontawesome-o<?=$i?>">
                                      <select class="strRatrnr selfRatingOption<?=$i?>" name="rating" data-current-rating="<?=$uTag['fld_rating']?>" autocomplete="off">
                                        <option value=""></option>
                                        <option <?=$uTag['fld_rating'] == 1 ? 'selected' : '' ?> value="1">1</option>
                                        <option <?=$uTag['fld_rating'] == 2 ? 'selected' : '' ?> value="2">2</option>
                                        <option <?=$uTag['fld_rating'] == 3 ? 'selected' : '' ?> value="3">3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                        <input type="hidden" class="bkpRatVal" value="<?=$uTag['fld_rating']?>" />
                                    </div>
                                  </div></td>
                                <td class="disableMouse"><input class="form-control" placeholder="Certification Number" value="<?=$uTag['fld_certification_no']?>" name="certification_no" type="text"></td>
                                <td class="disableMouse"><div class="col-md-12 form-group">
                                    <input type="text" class="form-control certificationDate has-feedback-left" value="<?=date("d/m/Y",strtotime($uTag['fld_certification_date']))?>" name="certification_date" />
                                    <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span> </div></td>
                                <td>
                                    <button class="btn btn-sm btn-danger" onClick="deleteCommon(this,'<?=encode($uTag['fld_id'])?>','userServTag')"  type="button"><i class="fa fa-trash-o"></i> Delete</button>
                                    
                                  <button type="button"  onClick="editTRsection('<?="section".$i?>')"class="btn btn-primary btn-xs changetxt"><i class="fa fa-floppy-o" aria-hidden="true"></i> Edit</button>
                                  
                                  <!--                                    <button type="submit" style="display:none;" class="btn btn-primary btn-xs"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>--></td>
                              </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                        </form>
                        <!-- end user projects --> 
                        
                      </div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include('include/footer.php'); ?>
  </div>
</div>
<?php include('include/script.php'); ?>
<!-- jQuery --> 
<!-- morris.js --> 
<script src="<?=base_url() ?>assets/vendors/raphael/raphael.min.js"></script> 
<script src="<?=base_url() ?>assets/vendors/morris.js/morris.min.js"></script> 
<!-- bootstrap-progressbar --> 
<script src="<?=base_url() ?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> 

<!-- Custom Theme Scripts --> 
<script src="<?=base_url() ?>assets/build/js/custom.js"></script> 
<script src="<?=base_url() ?>assets/js/jquery.barrating.min.js"></script> 
<script>
timeSlot=0; 
	boxHourMint=$('.boxReadernr').html(); 
       // var temp = "10";
       // alert(temp);
	$(function (){
		getHoursMinuts();
               
                
		$('.inlineBlockFull select.mintsP, .inlineBlockFull select.hrsP').selectpicker();
//                $("#hrstart > [value=" + temp + "]").attr("selected", "selected");
	});
</script> 
<script>
    $(function (){
        function ratingEnable(target) {
            var currentRating = $('.selfRatingOption'+target).data('current-rating');

            $('.stars-example-fontawesome-o'+target+' .clear-rating').on('click', function(event) {
                event.preventDefault();
                $('.selfRatingOption'+target)
                    .barrating('clear');
            });

            $('.selfRatingOption'+target).barrating({
                theme: 'fontawesome-stars-o',
                showSelectedRating: false,
                initialRating: currentRating,
                onSelect: function(value, text) {
                    if (!value) {
                        $('.selfRatingOption'+target).barrating('clear');
                    } else {
                        $('.stars-example-fontawesome-o'+target+' .current-rating').addClass('hidden');
                        $('.stars-example-fontawesome-o'+target+' .your-rating').removeClass('hidden').find('span').html(value);
                    }
                },
                onClear: function(value, text) {

                    $('.stars-example-fontawesome-o'+target).find('.current-rating').removeClass('hidden').end().find('.your-rating').addClass('hidden');
                }
            });
        }


        for(var i = 1; i<= $('.boxInputFull tr').length; i++){
            ratingEnable(i);
        }


    });
</script>
</body>
</html>