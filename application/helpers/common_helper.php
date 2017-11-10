<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by Sankhnad Mishra.
 * User: info@sankhnad.com
 * Date: 6/13/2017
 * Time: 10:55 AM
 */


if ( ! function_exists('test_method'))
{
    function test_method($var = '')
    {
        return $var;
    }
}

if(! function_exists('get_user_service_tag_name')){
    function get_user_service_tag_name($var=''){
        $CI = get_instance();
        $userData['serviceName'] = $CI->user_model->getServiceName($var);
        return $userData['serviceName'];
    }
}

if(! function_exists('get_incident_rel_service_tag_name')){
    function get_incident_rel_service_tag_name($var=''){
        $CI = get_instance();
        $userData['serviceName'] = $CI->user_model->getInciRelServiceName($var);
        return $userData['serviceName'];

    }
}
if(! function_exists('truncate')){
    function truncate($string,$length=100,$append="&hellip;") {
	  $string = trim($string);
	
	  if(strlen($string) > $length) {
		$string = wordwrap($string, $length);
		$string = explode("\n", $string, 2);
		$string = $string[0] . $append;
	  }	
	  return $string;
	}
}


if(! function_exists('get_user_name')){
    function get_user_name($var=''){
        $CI = get_instance();
        $userData['userName'] = $CI->user_model->getUser($var);
        if(sizeof($userData['userName'])){
            $userData['name'] = $userData['userName'][0]['fld_fname'].' '.$userData['userName'][0]['fld_mname'].' '.$userData['userName'][0]['fld_lname'];
            return $userData['name'];
        }else{
            return '';
        }


    }
}

if(! function_exists('getAssignedRMID')){
    function getAssignedRMID($iid){
        $CI = get_instance();
        return $CI->common_model->getPartial($select='*','tbl_incident_rm',array('fld_isDeleted'=>'0','fld_incident_id'=>$iid));
    }
}

if(! function_exists('get_resource_manager_detail')){
    function get_resource_manager_detail($var=''){
        $CI = get_instance();
        $userData['user'] = $CI->user_model->geUserTypeList('3',$var);
        return $userData['user'];
    }
}

if(! function_exists('get_recent_activity_of_user')){
    function get_recent_activity_of_user($var=''){
        $CI = get_instance();
        $userData['userActivity'] = $CI->user_model->getUserRecentActivity($var);
        return $userData['userActivity'];
    }
}

if(! function_exists('change_dateFormat')){
    function change_dateFormat($var='',$case){
        $old_date_timestamp = strtotime($var);
        switch ($case){
            case 0:
                $new_date = date('Y-m-d', $old_date_timestamp);
                break;
            case 1:
                $month=date("F",$old_date_timestamp);
                $day=date("d",$old_date_timestamp);
                $new_date = $month.','. $day;
                break;
            case 2:
                $status = "Approve";
                break;
            default:
                $status = "Pending";
        }
        return $new_date;
    }
}
if(! function_exists('timeAgo')){
	function timeAgo($timestamp){
		$datetime1=new DateTime("now");
		$datetime2=date_create($timestamp);
		$diff=date_diff($datetime1, $datetime2);
		$timemsg='';
		if($diff->y > 0){
			$timemsg = $diff->y .' year'. ($diff->y > 1?"'s":'');
	
		}
		else if($diff->m > 0){
		 $timemsg = $diff->m . ' month'. ($diff->m > 1?"'s":'');
		}
		else if($diff->d > 0){
		 $timemsg = $diff->d .' day'. ($diff->d > 1?"'s":'');
		}
		else if($diff->h > 0){
		 $timemsg = $diff->h .' hour'.($diff->h > 1 ? "'s":'');
		}
		else if($diff->i > 0){
		 $timemsg = $diff->i .' minute'. ($diff->i > 1?"'s":'');
		}
		else if($diff->s > 0){
		 $timemsg = $diff->s .' second'. ($diff->s > 1?"'s":'');
		}	
		$timemsg = $timemsg.' ago';
		return $timemsg;
	}
}

if(! function_exists('get_service_tag_name')){
    function get_service_tag_name($var=''){
        $CI = get_instance();
        $userData['serviceName'] = $CI->user_model->getAllServicestags($var);
        return $userData['serviceName'][0]['fld_serviceName'];

    }
}

if(! function_exists('get_assigned_incident_data')){
    function get_assigned_incident_data($var=''){
       // echo $var;die;
        $CI = get_instance();
        $userData['inci'] = $CI->user_model->getincident($var);
        return $userData['inci'];
    }
}


if(! function_exists('send_mail')){
    function send_mail($message='',$to_array=array(),$html_template='',$subject=''){
		$CI = get_instance();
		$CI->load->library('email');
		$mydata = array('message' => $message);
		$message = $CI->load->view($html_template, $mydata, true); 
		$config=array(
			'charset'=>'utf-8',
			'wordwrap'=> TRUE,
			'mailtype' => 'html'
		);
		$CI->email->initialize($config);
		$CI->email->from('info@maitrix4demo.in');
		$CI->email->to($to_array); 
		$CI->email->subject($subject);
		$CI->email->message($message);    
		return $CI->email->send();
    }	
}

// Get RM Average Rating
if(! function_exists('getAvgRating')){
    function getAvgRating($id=''){
        $CI = get_instance();
        return $CI->common_model->getAvrage('tbl_rating', 'fld_rating', array('fld_isDeleted' => '0', 'fld_rating_ID' => $id));
    }
}

// Get SME Average Rating
if(! function_exists('getAvgSMERating')){
    function getAvgSMERating($id=''){
        $CI = get_instance();
        $cusRating = $CI->common_model->getAvrage('tbl_rating', 'fld_rating', array('fld_isDeleted' => '0', 'fld_rating_ID' => $id));
		$smeRating = $CI->user_model->getSMERating($id);
		if($cusRating[0]['avrage'] > 0){
			return $totalRating = ($cusRating[0]['avrage'] + $smeRating[0]['avrageRating'])/2;
		}else{
			return $totalRating = $smeRating[0]['avrageRating'];
		}
    }
}

if(! function_exists('encode')){
	function encode($str)
	{
	  for($i=0; $i<11;$i++)
	  {
		$str=strrev(base64_encode($str)); //apply base64 first and then reverse the string
	  }
	  return $str;
	}
}

if(! function_exists('decode')){
	function decode($str)
	{
	  for($i=0; $i<11;$i++)
	  {
		$str=base64_decode(strrev($str)); //apply base64 first and then reverse the string}
	  }
	  return $str;
	}
}

if(! function_exists('trimData')){
	function trimData($str, $limit=100, $strip = false) {
		$str = ($strip == true)?strip_tags($str):$str;
		if (strlen ($str) > $limit) {
			$str = substr ($str, 0, $limit - 3);
			return (substr ($str, 0, strrpos ($str, ' ')).'...');
		}
		return trim($str);
	}
}
if(! function_exists('userInfo')){
	function userInfo($userID='')
	{
        $CI = get_instance();
		$uid = $userID ? : decode($CI->session->userdata('UID'));
		$result = $CI->common_model->getAll(array("fld_isDeleted" => '0', "fld_id" => $uid),'','tbl_user');
		return $result;
	}
}
if(! function_exists('adminInfo')){
	function adminInfo($userID='')
	{
        $CI = get_instance();
		$aid = $userID ? : decode($CI->session->userdata('AID'));
		$result = $CI->common_model->getAll(array("fld_isDeleted" => '0', "fld_id" => $aid),'','tbl_admin');
		return $result;
	}
}
if(! function_exists('getDefault')){
	function getDefault($did='')
	{
        $CI = get_instance();
		$did = $did ? : '1';
		return $CI->common_model->getAll(array("fld_id" => $did),'','tbl_default');
	}
}
if(! function_exists('scheduleSlot')){
	function scheduleSlot($uid)
	{
        $CI = get_instance();
		$CI = & get_instance();
		$result = $CI->common_model->getAll(array("fld_uid" => $uid),'','tbl_schedule_slot');
		return $result;
	}
}
if(! function_exists('userID')){
	function userID()
	{
        $CI = get_instance();
		$uid = $CI->session->userdata('UID');
		$uidCookie = get_cookie('UID');
		$uid = $uidCookie ? : $uid;	
		return $result = decode($uid) ? : false;
	}
}
if(! function_exists('adminID')){
	function adminID()
	{
        $CI = get_instance();
		$aid = $CI->session->userdata('AID');
		$aidCookie = get_cookie('AID');
		$aid = $aidCookie ? : $aid;	
		return $result = decode($aid) ? : false;
	}
}
if(! function_exists('assignedSME')){
	function assignedSME($iid='', $rid='', $uid='')
	{
        $CI = get_instance();
		$CI = & get_instance();
		$asDATA = array("fld_incident_id" => $iid,'fld_isDeleted'=>'0');
		if($uid !=''){
			$asDATA['fld_sme_id'] = $uid;
		}
		if($rid !=''){
			$asDATA['fld_rm_id'] = $rid;
		}
		$result = $CI->common_model->getAll($asDATA,'','tbl_incident_sme');
		return $result;
	}
}

if(! function_exists('incident')){
	function incident($iid='',$uid='')
	{
        $CI = & get_instance();
		$asDATA = array("fld_id" => $iid, 'fld_isDeleted'=>'0');
		if($uid !=''){
			$asDATA['fld_uid'] = $uid;
		}
		$result = $CI->common_model->getAll($asDATA,'','tbl_incident');
		return $result;
	}
}
if(! function_exists('country')){
	function country($id='')
	{
        $CI = & get_instance();
		$asDATA = array();
		if($id !=''){
			$asDATA['fld_id'] = $id;
		}
		return $CI->common_model->getAll($asDATA,'','tbl_country');
	}
}
if (!function_exists('trackSME')) {
    function trackSME($sid = '', $rid = '', $iid = '',$limit='') {
        $CI = & get_instance();
        $asDATA = array();
        if ($sid != '') {
            $asDATA['fld_sme_id'] = $sid;
        }
        if ($rid != '') {
            $asDATA['fld_rm_id'] = $rid;
        }
        if ($iid != '') {
            $asDATA['fld_iid'] = $iid;
        }
        if ($limit != '') {
            return $CI->common_model->getAll($asDATA,array("fld_start_time", "desc"),'tbl_track','first','1');
        }else{
            return $CI->common_model->getAll($asDATA, '', 'tbl_track');
        }
    }
}

if (!function_exists('trackSMETotalTime')) {
    function trackSMETotalTime($sid = '', $rid = '', $iid = '') {
        
        $CI = & get_instance();
        $result = $CI->common_model->getIncidenttotalTime($sid, $rid, $iid);
        return $result;
    }
}
if(! function_exists('getSMEServiceTag')){
	function getSMEServiceTag($uid='',$sid='',$status='')
	{
        $CI = & get_instance();
		$asDATA = array();
		if($uid !=''){
			$asDATA['fld_uid'] = $uid;
		}
		if($sid !=''){
			$asDATA['fld_serviceTag_id'] = $sid;
		}
		if($status !=''){
			$asDATA['fld_status'] = $status;
		}
		return $CI->common_model->getAll($asDATA,'','tbl_user_service_tag');
	}
}
if(! function_exists('getServiceTag')){
	function getServiceTag($id)
	{
        $CI = & get_instance();
		$asDATA = array('fld_isDeleted'=>'0');
		if($id !=''){
			$asDATA['fld_id'] = $id;
		}
		return $CI->common_model->getAll($asDATA,'','tbl_service_tag');
	}
}



if(! function_exists('assignedSMEData')){
	function assignedSMEData($iid='', $rid='', $uid='')
	{
        $CI = get_instance();
		$CI = & get_instance();
		$asDATA = array("fld_incident_id" => $iid,'fld_isDeleted'=>'0', 'fld_status'=>'0');
		if($uid !=''){
			$asDATA['fld_sme_id'] = $uid;
		}
		if($rid !=''){
			$asDATA['fld_rm_id'] = $rid;
		}
		$result = $CI->common_model->getAll($asDATA,'','tbl_incident_sme');
		return $result;
	}
}

if(! function_exists('getALLRMIncident')){
	function getALLRMIncident($iid='')
	{
        $CI = & get_instance();
		$asDATA = array("fld_id" => $iid, 'fld_isDeleted'=>'0');
		
		$result = $CI->common_model->getAll($asDATA,'','tbl_incident');
		return $result;
	}
}

if(! function_exists('getPaymentRMIncident')){
	function getPaymentRMIncident($iid='', $uid)
	{
        $CI = & get_instance();
		$asDATA = array("fld_incident_id" => $iid, 'fld_uid'=>$uid , 'fld_user_type'=>'0');
		
		$result = $CI->common_model->getAll($asDATA,array ("fld_id", "desc"),'tbl_admin_payments');
		return $result;
	}
}

if(! function_exists('getPaymentSMEIncident')){
	function getPaymentSMEIncident($iid='', $uid)
	{
        $CI = & get_instance();
		$asDATA = array("fld_incident_id" => $iid, 'fld_uid'=>$uid , 'fld_user_type'=>'1');
		
		$result = $CI->common_model->getAll($asDATA,array ("fld_id", "desc"),'tbl_admin_payments');
		return $result;
	}
}

if(! function_exists('getSelectedInciSME')){
    function getSelectedInciSME($iid=''){
        $CI = get_instance();
        $asDATA = array("fld_incident_id" => $iid, 'fld_status'=>'0' );
		
        $result = $CI->common_model->getAll($asDATA, array ("fld_id", "desc"),'tbl_incident_sme');
        return $result;
    }
}

if(! function_exists('getCountryName')){
	function getCountryName($cCodeName='')
	{
        $CI = & get_instance();
	return $CI->common_model->getCountryName($cCodeName);
	}
}
if(! function_exists('getNotifiCount')){
	function getNotifiCount($UID, $isAdmin='')
	{
        $CI = & get_instance();
		return $CI->user_model->fatchNotfiCount($UID, $isAdmin);
	}
}

if(! function_exists('getBalanceDueAmt')){
	function getBalanceDueAmt($iid, $time='', $amount='')
	{
        $CI = & get_instance();
		$incData = $CI->common_model->getPartial('*','tbl_incident',array('fld_id'=>$iid ,'fld_isDeleted'=>'0'));
		$datetime1 = strtotime($incData[0]['fld_incident_start_time']);
		$datetime2 = strtotime($incData[0]['fld_incident_end_time']);
		$interval  = abs($datetime2 - $datetime1);
		$minutes   = round($interval / 60);
		$Hrls = round($minutes / 60);
		$timeSpan = $Hrls > 0 ? $Hrls : 1;
		$planType = $incData[0]['fld_plan_type'];
		
		switch ($planType) {
			case '0':		
				$totalDays = $timeSpan;
				$totlMoney = $timeSpan * str_replace( ',', '', $incData[0]['fld_plan_amount']);
				break;
			case '1':
				$timeSpan = $timeSpan/24;
				$afterDec = explode('.',$timeSpan);
				$totalDays = $afterDec[0];
				$afterDec[1] = substr($afterDec[1], 0, 2);
				if(count($afterDec) > 1){
					if($afterDec[1] > 24){
						$totalDays += 1;
					}
				}
				$totlMoney = $totalDays * str_replace( ',', '', $incData[0]['fld_plan_amount']);
				break;
			case '2':
				$timeSpan = $timeSpan/24;
				$timeSpan = $timeSpan/30;
				$afterDec = explode('.',$timeSpan);
				$totalDays = $afterDec[0];
				$afterDec[1] = substr($afterDec[1], 0, 2);
				if(count($afterDec) > 1){
					if($afterDec[1] > 1 && $afterDec[1] <= 30){
						$totalDays += 1;
						
					}
					if($afterDec[1] > 31 && $afterDec[1] <= 60){
						$totalDays += 2;
						
					}
					if($afterDec[1] > 60){
						$totalDays += 3;
					}
				}
				$totlMoney = $totalDays * str_replace( ',', '', $incData[0]['fld_plan_amount']);
				break;
			case '3':
				$timeSpan = $timeSpan/24;
				$timeSpan = $timeSpan/30;
				$timeSpan = $timeSpan/12;
				$afterDec = explode('.',$timeSpan);
				$totalDays = $afterDec[0];
				$afterDec[1] = substr($afterDec[1], 0, 2);
				if(count($afterDec) > 1){
					if($afterDec[1] > 1 && $afterDec[1] <= 12){
						$totalDays += 1;
						
					}
					if($afterDec[1] > 13 && $afterDec[1] <= 24){
						$totalDays += 2;
						
					}
					if($afterDec[1] > 25){
						$totalDays += 3;
					}
				}
				$totlMoney = $totalDays * str_replace( ',', '', $incData[0]['fld_plan_amount']);
				break;
			default:
				exit;
		}
		
		if($time !='' && $amount !=''){
			return $totalDays.'~'.$totlMoney;
		}
		if($time !=''){
			return $totalDays;
		}
		if($amount !=''){
			return $totlMoney;
		}		
	}
}
 
 

?>