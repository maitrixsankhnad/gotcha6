<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by Sankhnad Mishra.
 * User: info@sankhnad.com
 * Date: 11/09/2017
 * Time: 04:19 PM
 */
if(! function_exists('setNotification')){
    function setActivity($dataType, $data){
        $CI = & get_instance();
		$userID = $targetID = $suportID = $message = NULL;
		$isAdmin = '0';
		switch ($dataType) {
            case 'createContact':
				$userID   = $data['uid'] ? :NULL;
				$suportID = $data['sid'];
				$message  = 'Enquiry from contact us';
                break;
			case 'dropMessage':
				$userID   = UID;
				$targetID = $data['tid'];
				$suportID = $data['sid'];
				$message  = 'New Message for Incident - '.$data['incTitle'];
				$isAdmin  = '1';
                break;
           
		        case 'incidentCreate':
				$userID   = UID;
				$targetID = $data['tid'];
				$suportID = $data['sid'];
				$message  = $data['isUpdate'] ? 'Updated Previous Incident -'.$data['incTitle']:'New Incident Created -'.$data['incTitle'];
				
                break;
            
                        case 'incidentAccptDecline':
				$userID   = UID;
				$targetID = $data['tid'];
				$suportID = $data['sid'];
				$message  = $data['isDecliened'] ? 'Incident Declined -'.$data['incTitle']:'Incident Accepted -'.$data['incTitle'];
				
                break;
            
                case 'incidentStartComplete':
				$userID   = UID;
				$targetID = $data['tid'];
				$suportID = $data['sid'];
				$message  = $data['isStart'] ? 'Incident Start -'.$data['incTitle']:'Incident Completed -'.$data['incTitle'];
				
                break;
            default:
                exit;
        }
		$data = array(
				'fld_uid' => $userID,
				'fld_target_id' => $targetID,
				'fld_supporting_id' => $suportID,
				'fld_isAdmin' => $isAdmin,
				'fld_data_type' => $dataType,
				'fld_message' => $message,
			);
        return $CI->common_model->saveData("tbl_recent_activity", $data);
    }
}

if(! function_exists('getNotification')){
    function getActivity($limit='',$targetID=''){
		$CI = & get_instance();
		if($targetID != ''){
			$type = 'fld_status_user';
			$where = array('fld_target_id'=>$targetID);
		}else{
			$where = array('fld_isAdmin'=>0);
			$type = 'fld_status_admin';
		}
		return $CI->common_model->getNotInData('*','tbl_recent_activity',$where,$type,array(2),array("fld_created_date", "DESC"),$limit);
	}
}
?>