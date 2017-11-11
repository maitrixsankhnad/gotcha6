
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
    <div id="sidebar-menu" class="main_menu_side hidden-print <?=$isRegistration ? 'disableMouse':''?> main_menu">
      <div class="menu_section">
        <ul class="nav side-menu">
          <li><a><i class="lnr lnr-home"></i> Home <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?=base_url()?>dashboard">Dashboard</a></li>
            </ul>
          </li>
          <li><a><i class="lnr lnr-file-add"></i> Incidents <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <?php if($user[0]['fld_user_type'] == 0){ ?>
                    <li><a href="<?=base_url()?>dashboard/new_incident">New Incidents</a></li>
                <?php } ?>
				<li><a href="<?=base_url()?>dashboard/all_incident">Incidents List</a></li>
                <?php if($user[0]['fld_user_type'] == 3){?>
                    <!--<li><a href="<?=base_url()?>dashboard/incident_list_to_rm">Incidents List</a></li>-->
                <?php }?>
                <?php if($user[0]['fld_user_type'] == 3){?>
                    <li><a href="<?=base_url()?>dashboard/update_incident">Incidents Update</a></li>
                <?php }?>
                   
                <?php //if($user[0]['fld_user_type'] == 2){?>
<!--                    <li><a href="<?=base_url()?>dashboard/assigned_incident">Assigned Incident</a></li>-->
                <?php //}?>                
              <!--li><a href="<?=base_url()?>dashboard/plans">Plans</a></li-->
            </ul>
          </li>
          <li><a><i class="lnr lnr-cart"></i> Payment History <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                       
                      <li><a href="<?=base_url()?>dashboard/payments">Payments History</a></li>
                       
                    </ul>
                </li> 
          <li><a><i class="lnr lnr-cog"></i> Settings <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href='<?=$isRegistration ? current_url() : base_url().'dashboard/profile'?>'>
                <?=$profileLebel?>
                </a></li>
<!--              <li><a href="">Manage User Interface</a></li>-->
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <!-- /sidebar menu --> 
    
    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
    	<a data-toggle="tooltip" data-placement="top" title="Dashboard" href="<?=base_url()?>dashboard"> <span class="glyphicon glyphicon-home" aria-hidden="true"></span> </a>
        <a data-toggle="tooltip" data-placement="top" title="Settings" href="<?=base_url()?>dashboard/profile"> <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> </a>
    	<a data-toggle="tooltip" data-placement="top" title="Contact Us" href="<?=base_url()?>contact"> <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?=base_url()?>process/logout"> <span class="glyphicon glyphicon-off" aria-hidden="true"></span> </a>
    </div>
    <!-- /menu footer buttons --> 
  </div>
</div>
