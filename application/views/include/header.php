<?php
	$notifLimt = '8';
	if(isset($isNotificationPanl)){		
		$notifLimt = '';
	}
	$activityList = getActivity($notifLimt,UID);
	$notificURL = base_url().'dashboard/profile';
	
	$allNotFCount = getNotifiCount(UID);
	if($allNotFCount[0]['notiCnt'] > 0){
		$allNotFCount = '<span class="badge bg-green">'.$allNotFCount[0]['notiCnt'].'</span>';
	}else{
		$allNotFCount = '';
	}
?>
<div id="preloader">
  <div class="spinner">
    <div class="bounce1"></div>
    <div class="bounce2"></div>
    <div class="bounce3"></div>
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
            <li><a href='<?=$isRegistration ? current_url() : base_url().'dashboard/profile'?>'>
              <?=$profileLebel?>
              </a></li>
            <li><a href="<?php echo site_url('process/logout') ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
          </ul>
        </li>
        <?php
		if(strpos($user[0]['fld_picture'], 'http') !== 0) {
			$profilePic = base_url().'uploads/profile/thumbs/'.$user[0]['fld_picture'];
		}else{
			$profilePic = $user[0]['fld_picture'];
		}
		?>
        <li onclick="updateNotReadAll('')"  role="presentation" class="dropdown"> <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false"> <i class="fa fa-envelope-o"></i>
          <?=$allNotFCount?>
          </a>
          <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
            <?php include('notification.php');?>
          </ul>
        </li>
      </ul>
      </li>
      </ul>
    </nav>
  </div>
</div>
