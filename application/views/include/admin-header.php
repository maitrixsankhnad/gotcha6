<?php 
	$notificURL = base_url().'superadmin/notifications';
	$notifLimt = '8';
	if(isset($isNotificationPanl)){		
		$notifLimt = '';
	}
	$activityList = getActivity($notifLimt);
	$allNotFCount = getNotifiCount('',true);
	if($allNotFCount[0]['notiCnt'] > 0){
		$allNotFCount = '<span class="badge bg-green">'.$allNotFCount[0]['notiCnt'].'</span>';
	}else{
		$allNotFCount = '';
	}
?>
<div class="top_nav">
      <div class="nav_menu">
        <nav>
          <div class="nav toggle"> <a id="menu_toggle"><i class="fa fa-bars"></i></a> </div>
          <ul class="nav navbar-nav navbar-right">
            <li class=""> <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <div class="headerThumb" style="background-image:url(<?=$profilePic;?>)"></div> <span class=" fa fa-angle-down"></span> </a>
              <ul class="dropdown-menu dropdown-usermenu pull-right">
                <li><a href='<?=$isRegistration ? current_url() : base_url().'superadmin/profile'?>'><?=$profileLebel?></a></li>
                <li><a href="<?php echo site_url('process/logout') ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
              </ul>
            </li>
            <li role="presentation" onclick="updateNotReadAll('true')" class="dropdown"> <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false"> <i class="fa fa-envelope-o"></i> <?=$allNotFCount?> </a>
              <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                <?php include('notification.php');?>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>