<?php
$notificaionCount = 0;
$nActivityLog = '';
foreach($activityList as $activityData){	
	$nID = $activityData->fld_id;
	$nImg = $activityData->fld_img;
	$nUserID = $activityData->fld_uid;
	$nTargetID = $activityData->fld_target_id;
	$nSuptID = $activityData->fld_supporting_id;
	$nisAdmin = $activityData->fld_isAdmin;
	$nDataTyp = $activityData->fld_data_type;
	$nMsg = $activityData->fld_message;	
	$nStatsUsr = $activityData->fld_status_user;
	$nStatsAdm = $activityData->fld_status_admin;
	$nCrtDt = $activityData->fld_created_date;
	
	if(strtotime($nCrtDt) < strtotime('-2 days')) {
		$nDate = timeAgo($nCrtDt);
	}else{
		$nDate = date('dS, M Y',strtotime($nCrtDt));
	}
	$aid = $this->session->userdata('AID');
	switch ($activityData->fld_data_type) {
		case 'createContact':
			$nURL = base_url().'superadmin/contactus/preview/'.encode($nSuptID);
			$nImage = base_url().'uploads/notification/contact.png';
			$nHeading  = 'New Contact Request';
			$nMessage  = $activityData->fld_message;
			break;
		case 'dropMessage':
			$nURL = base_url().'dashboard/incident_preview/'.encode($nSuptID);
			$nImage = base_url().'uploads/notification/default.png';
			$nHeading  = 'New chat Message ';
			$nMessage  = $activityData->fld_message;
			break;
                case 'incidentCreate':
                    if($aid){
                        $innerUrl = "superadmin";
                    }else{
                         $innerUrl = "dashboard";
                    }
			$nURL = base_url().''.$innerUrl.'/incident_preview/'.encode($nSuptID);
			$nImage = base_url().'uploads/notification/default.png';
			$nHeading  = 'New Incident Message';
			$nMessage  = $activityData->fld_message;
			break; 
                case 'incidentAccptDecline':
                    if($aid){
                        $innerUrl = "superadmin";
                    }else{
                         $innerUrl = "dashboard";
                    }
			$nURL = base_url().''.$innerUrl.'/incident_preview/'.encode($nSuptID);
			$nImage = base_url().'uploads/notification/default.png';
			$nHeading  = 'Incident Status';
			$nMessage  = $activityData->fld_message;
			break;  
                        
		default:
			exit;
	}
	echo '<li> <a href="'.$nURL.'"> <span class="image"><img src="'.$nImage.'" alt="Image" /></span> <span>'.$nHeading.'</span> <span class="time">'.$nDate.'</span> <span class="message">'.trimData($nMessage, 50, TRUE).'</span> </a> </li>';
	
	if($notificaionCount <= 8 || isset($isNotificationPanl)){		
		$notificaionCount++;
	}else{
		break;
	}
	$nActivityLog .= '<li> <img src="'.$nImage.'" class="avatar" alt="Image">
					  <div class="message_date">
						<h3 class="date text-error">'.date('dS',strtotime($nCrtDt)).'</h3>
						<p class="month">'.date('M',strtotime($nCrtDt)).' / '.date('Y',strtotime($nCrtDt)).'</p>
					  </div>
					  <div class="message_wrapper">
						<h4 class="heading"><a href="'.$nURL.'" >'.$nHeading.'</a></h4>
						<blockquote class="message">'.$nMessage.'</blockquote>
					  </div>
                                          <button class="btn btn-sm btn-default" style="float: right;margin-top: 20px;" type="button" data-placement="top" onclick="deleteCommon(this,\''.encode($nID).'\',\'activitymsgRemove\')" data-toggle="tooltip" data-original-title="Delete" aria-describedby="tooltip394113"><i class="fa fa-trash-o"></i></button>
					  <div class="clearfix"></div>
					</li>';
	
}
if(count($activityList) > 0){
?>
<li>
  <div class="text-center"> <a href="<?=$notificURL?>"> <strong>See All Alerts</strong> <i class="fa fa-angle-right"></i> </a> </div>
</li>
<?php }else{ ?>
<li> <span class="message">No Record Found</span> </li>
<?php } ?>


