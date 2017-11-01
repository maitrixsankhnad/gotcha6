<?php include_once('commonFunction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Gotcha-6</title>
<?php include('include/style.php'); ?>
</head>
<body class="nav-md">
<div id="preloader">
  <div class="spinner">
    <div class="bounce1"></div>
    <div class="bounce2"></div>
    <div class="bounce3"></div>
  </div>
</div>
<div class="container body">
  <div class="main_container">
    <div class="col-md-3 left_col">
      <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;"> <a href="<?=base_url()?>" class="site_title"><i class="fa fa-laptop"></i> <span>Gotcha-6</span></a> </div>
        <div class="clearfix"></div>
        
        <!-- menu profile quick info -->
        <div class="profile clearfix">
          <div class="profile_pic">
            <?php
                        if(strpos($user[0]['fld_picture'], 'http') !== 0) {
                            $profilePic = base_url().'uploads/profile/thumbs/'.$user[0]['fld_picture'];
                        } else {
                            $profilePic = $user[0]['fld_picture'];
                        }
                        ?>
            <div class="img-circle profile_img" style="background-image:url(<?=$profilePic;?>)"></div>
          </div>
          <div class="profile_info"> <span>Welcome,</span>
            <h2>
              <?=$user[0]['fld_fname'];?>
            </h2>
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- /menu profile quick info --> 
        
        <br />
        
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
            <ul class="nav side-menu">
              <li><a href="<?=base_url()?>dashboard/complete_registration/<?=$user_type==2 ? 'sme' : 'rm'; ?>"> <i class="fa fa-unlock"></i> Complete Profile</a></li>
              <?php
                            if($user_type == 2){
                                if($user[0]['fld_username']){?>
              <li><a href="<?=base_url()?>dashboard/self_assessment"> <i class="fa fa-unlock"></i> Self Assesement</a></li>
              <?php }else{ ?>
              <li><a onClick="alertToCompleteForm()" href="javascript:;"> <i class="fa fa-lock"></i> Self Assesement</a></li>
              <?php }
                            }
                            ?>
            </ul>
          </div>
        </div>
        <!-- /sidebar menu --> 
        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small"> <a data-toggle="tooltip" data-placement="top" title="Settings"> <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> </a> <a data-toggle="tooltip" data-placement="top" title="FullScreen"> <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span> </a> <a data-toggle="tooltip" data-placement="top" title="Lock"> <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span> </a> <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?=base_url()?>process/logout"> <span class="glyphicon glyphicon-off" aria-hidden="true"></span> </a> </div>
        <!-- /menu footer buttons --> 
      </div>
    </div>
    <div class="top_nav">
      <div class="nav_menu">
        <nav>
          <div class="nav toggle"> <a id="menu_toggle"><i class="fa fa-bars"></i></a> </div>
          <ul class="nav navbar-nav navbar-right">
            <li class=""> <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <div class="headerThumb" style="background-image:url(<?=$profilePic;?>)"></div>
              <span class=" fa fa-angle-down"></span> </a>
              <ul class="dropdown-menu dropdown-usermenu pull-right">
                <li><a href="<?php echo site_url('process/logout') ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
          </li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="right_col" role="main">
      <form style="margin:0" id="expertRegistration" novalidate>
        <input type="hidden" name="fld_user_type" value="<?=$user_type?>"/>
        <div class="container-fluid">
          <section class="container">
            <div class="container-page">
              <center>
                <h3 class="dark-grey"><br>
                  <?=$user_type==2 ? 'SME Registration' : 'Resource Manager Registration';?>
                </h3>
                <br>
                <br>
              </center>
              <div class="col-md-6">
                <div class="form-group col-sm-12 text-center">
                  <label for="uploadImage" class="control-label uploadImagePreview"> 
                  	<img width="150px" class="previewImgSrc" src="<?=$profilePic?>" />
                    <span class="uploadInstruction">Profile Picture</span> 
                    <span class="uploadOverLay"></span> 
                  </label>
                  <input type="file" class="uploadImageInput" id="uploadImage" accept=".gif,.jpg,.jpeg,.JPG,.JPEG,.png," name="fld_picture" size="20" value="<?=$user[0]['fld_picture']; ?>">
                </div>
                <div class="form-group col-lg-6">
                  <label>First Name</label>
                  <input type="text" name="fld_fname" class="form-control" value="<?=$user[0]['fld_fname']; ?>" required>
                </div>
                <div class="form-group col-lg-6">
                  <label>Last Name</label>
                  <input type="text" name="fld_lname" class="form-control" value="<?=$user[0]['fld_lname']; ?>" required>
                </div>
                <div class="form-group col-lg-6">
                  <label>Facebook Link</label>
                  <div class="boxIconInput">
                    <input type="text" name="fld_facebook" class="form-control" value="<?=$user[0]['fld_facebook']; ?>">
                    <span class="fa fa-facebook iconRight" aria-hidden="true"></span></div>
                </div>
                <div class="form-group col-lg-6">
                  <label>Linkedin Link</label>
                  <div class="boxIconInput">
                    <input type="text" name="fld_linkedin" class="form-control" value="<?=$user[0]['fld_linkedin']; ?>">
                    <span class="fa fa-linkedin iconRight" aria-hidden="true"></span></div>
                </div>
                <div class="form-group col-lg-6">
                  <label>Google+ Link</label>
                  <div class="boxIconInput">
                    <input type="text" name="fld_google" class="form-control" value="<?=$user[0]['fld_google']; ?>">
                    <span class="fa fa-google-plus iconRight" aria-hidden="true"></span></div>
                </div>
                <div class="col-sm-6">
                  <label class="control-label">Upload Resume / CV</label>
                  <input type="file" accept=".pdf,.txt,.docx,.doc" name="fld_resume" size="20" value="<?=$user[0]['fld_resume']; ?>">
                </div>
                <div class="clearfix"></div>
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
              </div>
              <div class="col-md-6">
                <h3 class="dark-grey">Terms and Conditions</h3>
                <p> By clicking on "Register" you agree to The Company's' Terms and Conditions </p>
                <p> While rare, prices are subject to change based on exchange rate fluctuations - should such a fluctuation happen, we may request an additional payment. You have the option to request a full refund or to pay the new price. (Paragraph 13.5.8) </p>
                <p> Should there be an error in the description or pricing of a product, we will provide you with a full refund (Paragraph 13.5.6) </p>
                <p> Acceptance of an order by us is dependent on our suppliers ability to provide the product. (Paragraph 13.5.6) </p>
              </div>
              <div class="clearfix"></div>
              <br>
              <?php if ($user_type==3){?>
              <div class="col-md-12">
                <div class="form-group col-lg-6">
                  <label>Select Service Level</label>
                  <br>
                  <label>
                    <input value="0" data-error="Please select the option" <?=$user[0]['fld_service_level']==0 ? 'checked':''?> name="expert" type="radio">
                    Incident Manager </label>
                  <br>
                  <label>
                    <input value="1" data-error="Please select the option" <?=$user[0]['fld_service_level']==1 ? 'checked':''?> name="expert" type="radio">
                    Project Manager </label>
                  <br>
                  <label>
                    <input value="2" data-error="Please select the option" <?=$user[0]['fld_service_level']==2 ? 'checked':''?> name="expert" type="radio">
                    IT/Director </label>
                </div>
              </div>
              <div class="clearfix"></div>
              <br>
              <?php } ?>
              <div class="form-group col-md-2 inlineBlockFull">
                <div class="col-md-2">
                  <label class="form-label">Availability</label>
                  <br>
                  <a onClick="appendNewHour()" href="javascript:;"><i class="fa fa-plus" aria-hidden="true"></i> Add More Time Slot</a> </div>
                <div class="col-md-10 ">
                  <div class="row boxReadernr">
                    <div class="form-group col-md-3">
                      <label>Start Time</label>
                      <div class="row">
                        <div class="col-xs-6">
                          <select title="Hours" name="starthours[]" class="hrsP" data-size="5" data-width="100%" data-live-search="true">
                          </select>
                        </div>
                        <div class="col-xs-6">
                          <select title="Minuts" name="startminutes[]" class="mintsP" data-size="5" data-width="100%" data-live-search="true">
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-lg-3">
                      <label>End Time</label>
                      <div class="row">
                        <div class="col-xs-6">
                          <select title="Hours" name="endhours[]" class="hrsP" data-size="5" data-width="100%" data-live-search="true">
                          </select>
                        </div>
                        <div class="col-xs-6">
                          <select title="Minuts" name="endminutes[]" class="mintsP" data-size="5" data-width="100%" data-live-search="true">
                          </select>
                        </div>
                      </div>
                    </div>
                    <div style="margin-bottom:10px;" class="clearfix"></div>
                  </div>
                  <div class="row setBoxNewHor"> </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <?php if ($user_type==2){?>
              <div class="form-group inlineBlockFull col-md-12">
                <label class="form-label col-md-2 col-sm-2 col-xs-3">Service Tags</label>
                <div class="col-md-8 col-sm-8 col-xs-9">
                  <select class="selectpicker" name="servicetags[]" data-width="100%" data-live-search="true" data-actions-box="true" multiple data-selected-text-format="count > 3" required>
                    <?php
                                                foreach ($serviceTag as $tag){
                                                    echo '<option data-subtext="' . $tag['fld_manufacturer'] . '" value="' . $tag['fld_id'] . '">' . $tag['fld_serviceName'] . '</option>';
                                                }
                                                ?>
                  </select>
                </div>
              </div>
              <?php } ?>
              <div class="clearfix"></div>
              <div class="form-group col-md-12">
                <label class="form-label col-md-2 col-sm-2 col-xs-3" for="comment">Market yourself: Tell Us About You</label>
                <div class="col-md-8 col-sm-8 col-xs-9">
                  <textarea class="form-control" rows="5" name="fld_about" id="comment" required> <?=$user[0]['fld_about']; ?>
</textarea>
                </div>
              </div>
              <br>
              <center>
                <button type="submit" class="btn btn-primary">Save</button>
              </center>
            </div>
          </section>
        </div>
      </form>
    </div>
    <?php include('include/footer.php'); ?>
  </div>
</div>
<?php include('include/script.php'); ?>
<script src="<?=base_url() ?>assets/vendors/jquery-knob/dist/jquery.knob.min.js"></script> 
<script src="<?=base_url() ?>assets/js/validate.min.js"></script> 
<script src="<?=base_url() ?>assets/build/js/custom.js"></script> 
<script>
    timeSlot=0;
    boxHourMint=$('.boxReadernr').html();
    //alert(boxHourMint);
    $(function (){
        getHoursMinuts();

        $('.inlineBlockFull select.mintsP, .inlineBlockFull select.hrsP').selectpicker();
    });
</script>
</body>
</html>