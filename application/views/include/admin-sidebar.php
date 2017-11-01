
<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;"> <a href="<?=base_url()?>" class="site_title"><i class="fa fa-laptop"></i> <span>
      <?=$defaultSetting[0]['fld_company_name']?>
      </span></a> </div>
    <div class="clearfix"></div>
    
    <!-- Start: menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <?php
        if(strpos($admin[0]['fld_avtar'], 'http') !== 0) {
		  $profilePic = base_url().'uploads/profile/thumbs/'.$admin[0]['fld_avtar'];
		} else {
		  $profilePic = $admin[0]['fld_avtar'];
		}
		?>
        <div class="img-circle profile_img" style="background-image:url(<?=$profilePic;?>)"></div>
      </div>
      <div class="profile_info"> <span>Welcome,</span>
        <h2>
          <?=$admin[0]['fld_fname'];?>
          <?=$admin[0]['fld_lname'];?>
        </h2>
      </div>
      <div class="clearfix"></div>
    </div>
    <!-- End: menu profile quick info --> 
    <br />
    
    <!--Start: sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <ul class="nav side-menu">
          <li><a><i class="lnr lnr-home"></i> Home <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?=base_url()?>superadmin">Dashboard</a></li>
            </ul>
          </li>
          <li><a><i class="lnr lnr-users"></i> Users <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?=base_url()?>superadmin/users">All Users</a></li>
              <li><a href="<?=base_url()?>superadmin/resource_managers">Resource Manager</a></li>
              <li><a href="<?=base_url()?>superadmin/subject_matter_experts">Subject Matter Expert</a></li>
              <li><a href="<?=base_url()?>superadmin/customers">Customers</a></li>
              <!-- <li><a href="<?=base_url()?>superadmin/">Paid Customers</a></li> -->
            </ul>
          </li>
          <li><a><i class="lnr lnr-file-add"></i> Incident <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?=base_url()?>superadmin/incidents">All Incident</a></li>
            </ul>
          </li>
          <li><a><i class="lnr lnr-license"></i> Self Assessment <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?=base_url()?>superadmin/all_self_assessment">All Self Assessment</a></li>
            </ul>
          </li>
          <li><a><i class="lnr lnr-tag"></i> Packages <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?=base_url()?>superadmin/packages_list">Package List</a></li>
              <?php if($admin[0]['fld_role'] == '0'){?>
              <li><a href="<?=base_url()?>superadmin/packages_list/add">Add Package</a></li>
              <?php } ?>
            </ul>
          </li>
          <li><a href="#"><i class="lnr lnr-select"></i> Make Payment <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?=base_url()?>superadmin/rmPaymentsList">RM Payments</a></li>
              <li><a href="<?=base_url()?>superadmin/smePaymentsList">SME Payments</a></li>
            </ul>
          </li>
          <li><a><i class="lnr lnr-cart"></i> Payment History <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?=base_url()?>superadmin/payments">Payments Received</a></li>
              <li><a href="<?=base_url()?>superadmin/rmPaymentHistory">RM Received Payments</a></li>
              <li><a href="<?=base_url()?>superadmin/smePaymentHistory">SME Received Payments</a></li>
            </ul>
          </li>
          <li><a href="<?=base_url()?>review"><i class="lnr lnr-spell-check"></i> User Review</a></li>
          <li><a href="<?=base_url()?>superadmin/contactus"><i class="lnr lnr-bubble"></i> Contact Us</a></li>
          <li><a><i class="lnr lnr-cog"></i> Settings <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href='<?=base_url().'superadmin/profile'?>'>Manage Profile</a></li>
              <li><a href='<?=base_url().'superadmin/globals'?>'>Global Settings</a></li>
              <li><a href='<?=base_url().'superadmin/admin_users'?>'>Manage Admin Users</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <!-- End: sidebar menu --> 
    
    <!-- Start: menu footer buttons -->
    <div class="sidebar-footer hidden-small">
    	<a data-toggle="tooltip" data-placement="top" title="Dashboard" href="<?=base_url()?>superadmin"> <span class="glyphicon glyphicon-home" aria-hidden="true"></span> </a>
        <a data-toggle="tooltip" data-placement="top" title="Settings" href="<?=base_url()?>superadmin/profile"> <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> </a>
    	<a data-toggle="tooltip" data-placement="top" title="Contact Us" href="<?=base_url()?>contact"> <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?=base_url()?>process/logout"> <span class="glyphicon glyphicon-off" aria-hidden="true"></span> </a>
    </div>
    <!--End: menu footer buttons --> 
  </div>
</div>
