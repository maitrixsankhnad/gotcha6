<?php
include_once('commonFunction.php'); ?>
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
              <li><a href="<?=base_url()?>dashboard/complete_registration/sme"> <i class="fa fa-unlock"></i> Complete Profile</a></li>
              <li><a href="<?=base_url()?>dashboard/self_assessment"> <i class="fa fa-unlock"></i> Self Assesement</a></li>
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
      <form style="margin:0" id="selfAssesment">
        <div class="container-fluid">
          <section class="container">
            <div class="container-page">
              <center>
                <h3 class="dark-grey"><br>
                  Self Assesment </h3>
              </center>
              <div class="col-md-8 col-md-offset-2 text-justify">
                <p>The Highest rating achieve in the Gotch-6 application is a 5. You can onlyself assess to a
                  maximum of a 4. To achieve a 4 you will have to have industries highest level of certification for
                  your specific service tags. Otherwise the maximum you can self assess is a 3.0 for the next highest level of certification.
                  Example: if you are a Cisco Certified internetworking Expert in Voice you can choose 4.0. But you must alsoinput your certification number
                  and expiration date. Secound example: if you are a certified Cisco Networking Association you would choose a 2.0. CCNP would be 3.0.</p>
                <p>To achieve higher ratings you must complete assignment Gotcha-6 clients and closes issues within service level and receive excelent feedback
                  from Resource Manager handling the incidents.</p>
              </div>
              <div class="clearfix"></div>
              <br>
              <div class="row">
                <div class="col-md-4">
                  <div class="topAssesLbl"></div>
                </div>
                <div class="col-md-4">
                  <div class="topAssesLbl"></div>
                </div>
                <div class="col-md-2 col-md-offset-2">
                  <div class="topAssesLbl text-right"></div>
                </div>
              </div>
              <div class="clearfix"></div>
              <!--<div class="addMoreServiceTag">
                              <button class="btn btn-primary" type="button" onClick="addNewBoxingTag()"><i class="fa fa-plus" aria-hidden="true"></i> Add More Service Tag</button>
                            </div>-->
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
                <tbody class="boxInputFull">
                  <?php
                                $i = 0;
                                foreach($userTag as $uTag) {
                                    $i += 1;
                                    ?>
                  <tr>
                    <td><input type="hidden" name="servicetags[]" value="<?=$uTag['fld_serviceTag_id']?>" />
                      <?=get_service_tag_name($uTag['fld_serviceTag_id'])?></td>
                    <td><div class="selfDiscBox">
                        <div class="stars stars-example-fontawesome-o<?=$i?>">
                          <select class="selfRatingOption<?=$i?>" name="rating[]" data-current-rating="<?=$uTag['fld_rating']?>" autocomplete="off">
                            <option value=""></option>
                            <option <?=$uTag['fld_rating'] == 1 ? 'selected' : '' ?> value="1">1</option>
                            <option <?=$uTag['fld_rating'] == 2 ? 'selected' : '' ?> value="2">2</option>
                            <option <?=$uTag['fld_rating'] == 3 ? 'selected' : '' ?> value="3">3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </div></td>
                    <td><input class="form-control" placeholder="Certification Number" value="<?=$uTag['fld_certification_no']?>" name="certification_no[]" type="text"></td>
                    <td><div class="col-md-12 form-group">
                        <input type="text" class="form-control certificationDate has-feedback-left" value="<?=(int)$uTag['fld_certification_date'] ? date("d/m/Y",strtotime($uTag['fld_certification_date'])) :date("d/m/Y");?>" name="certification_date[]" />
                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span> </div></td>
                    <td><a href="javascript:;" onClick="removeTRsection(this)" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a></td>
                  </tr>
                  <?php
					}
					?>
                </tbody>
              </table>
              <br>
              <center>
                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
              </center>
              <br>
              <br>
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
<script src="<?=base_url() ?>assets/js/jquery.barrating.min.js"></script> 
<script src="<?=base_url() ?>assets/build/js/custom.js"></script> 
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