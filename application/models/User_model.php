<?php

class User_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    //insert into user table
    function registerUser($data) {
        $this->db->insert('tbl_user', $data);
        return $this->db->insert_id();
    }

    function checkRegister($email) {
        $sql = "select * from tbl_user where fld_email= '" . $email . "'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function loginUser($email, $password) {
        $sql = "select * from tbl_user where fld_email = '" . $email . "' and fld_password = '" . md5($password) . "' and fld_status = 0";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function getUser($uid) {
        $sql = "SELECT a.*,b.fld_id as country_id, b.fld_CountryCode, b.fld_CountryName FROM `tbl_user` AS a LEFT JOIN tbl_country as b ON a.fld_country = b.fld_CountryCode WHERE a.fld_id = '" . $uid . "' AND a.fld_status = 0";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function geUserTypeList($type = '', $uid = '', $serviceType = '') {
        $sql = "SELECT a.*,b.fld_id as country_id, b.fld_CountryCode, b.fld_CountryName FROM `tbl_user` AS a LEFT JOIN tbl_country as b ON a.fld_country = b.fld_CountryCode WHERE a.fld_status = '0' AND a.fld_approved = '0' ";
        if ($uid != '') {
            $sql .= " AND a.fld_id = " . $uid;
        }
        if ($type != '') {
            $sql .= " AND a.fld_user_type = " . $type;
        }
        if ($serviceType != '') {
            $sql .= " AND a.fld_service_level = " . $serviceType;
        }

        //print_r($sql);
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function registraionActivteStatus($id, $token) {
        $sql = "select * from tbl_user where fld_id= '" . $id . "' and  fld_token =  '" . $token . "' and fld_status = 1";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function updateUserStatus($id) {
        $sql = "Update tbl_user SET fld_status = 0 where fld_id='" . $id . "' ";
        $query = $this->db->query($sql);
        return $query;
    }

    function updateUserType($id, $type) {
        $sql = "Update tbl_user SET fld_user_type = '" . $type . "' where fld_id='" . $id . "' AND fld_status ='0' ";
        $query = $this->db->query($sql);
        return $query;
    }

    function update_Sme_User($id, $data) {
        $this->db->where('fld_id', $id);
        $this->db->update('tbl_user', $data);
    }

    /* get the service name By service id */

    function getAllServicestags($serviceId = '') {
        $sql = "select * from tbl_service_tag where fld_isDeleted= 0 ";
        if ($serviceId != '') {
            $sql .= " AND fld_id = " . $serviceId;
        }
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function insert_user_servicetags($uid, $userServicetags) {
        foreach ($userServicetags as $userServiceStor) {
            $sql = "insert into tbl_user_service_tag (fld_uid,fld_serviceTag_id) values('" . $uid . "','" . $userServiceStor . "')";
            $query = $this->db->query($sql);
        }
    }

    function checkUsertagsId($uid) {
        $sql = "select * from tbl_user_service_tag where fld_uid= '" . $uid . "' ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function delete_user_servicetags($uid) {
        $sql = "delete  from tbl_user_service_tag where fld_uid= '" . $uid . "'";
        $query = $this->db->query($sql);
        return $query;
    }

    function deleteCustmUserServic($uid, $services) {
        $sql = "delete  from tbl_user_service_tag where fld_uid = " . $uid . " AND fld_serviceTag_id in(" . $services . ")";
        $query = $this->db->query($sql);
        return $query;
    }

    function getcountry() {
        $this->db->select('fld_CountryName,fld_CountryCode');
        $query = $this->db->get('tbl_country');
        return $query->result();
    }

    function username_exists($username) {
        $sql = "select * from tbl_user where fld_username= '" . $username . "' ";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    function insert_timeslots($uid, $startslots_time, $endslots_time) {
        if (count($startslots_time) > 0) {
            for ($i = 0; $i < count($startslots_time); $i++) {
                $sql = "insert into tbl_schedule_slot(fld_uid,fld_start_time,fld_end_time) values('" . $uid . "','" . $startslots_time[$i] . "','" . $endslots_time[$i] . "')";
                $query = $this->db->query($sql);
            }
        }
    }
	function insert_sme_timeslot($uid, $startslots_time, $endslots_time) {
        $sql = "insert into tbl_schedule_slot(fld_uid,fld_start_time,fld_end_time) values('" . $uid . "','" . $startslots_time. "','" . $endslots_time. "')";
        $query = $this->db->query($sql);
    }

    function delete_user_slottime($uid) {
        $sql = "delete  from tbl_schedule_slot where fld_uid= '" . $uid . "'";
        $query = $this->db->query($sql);
        return $query;
    }

    function delete_selfAssesment($uid) {
        $sql = "delete  from tbl_user_service_tag where fld_uid= '" . $uid . "'";
        $query = $this->db->query($sql);
        return $query;
    }

    function insert_selfAssesment($uid, $servicetags, $rating, $certification_no, $certification_date) {
        $sql = "insert into tbl_user_service_tag(fld_uid, fld_serviceTag_id, fld_rating, fld_certification_no, fld_certification_date) values('" . $uid . "','" . $servicetags . "','" . $rating . "','" . $certification_no . "','" . $certification_date . "')";
        $query = $this->db->query($sql);
    }

    function insert_create_incident($uid, $fld_inci_title, $fld_summary, $fld_email, $fld_notifications, $fld_email_confrm, $fld_plan, $service_level) {
        $sql = "insert into tbl_incident(fld_uid, fld_inci_title, fld_summary, fld_email, fld_notifications, fld_email_confrm, fld_plan, fld_service_level ) values('" . $uid . "','" . $fld_inci_title . "','" . $fld_summary . "','" . $fld_email . "','" . $fld_notifications . "','" . $fld_email_confrm . "','" . $fld_plan . "','" . $service_level . "')";
        $query = $this->db->query($sql);
        return $this->db->insert_id();
    }

    function update_incident($id, $data) {
        $this->db->where('fld_id', $id);
        $this->db->update('tbl_incident', $data);
    }

    function insert_indntsrvice($id, $userServicetags) {
        for ($i = 0; $i < count($userServicetags); $i++) {
            $sql = "insert into tbl_incident_service (fld_incident_id,fld_service_id) values('" . $id . "','" . $userServicetags[$i] . "')";
            $query = $this->db->query($sql);
        }
        return $this->db->insert_id();
    }

    function getincident($id = '', $uid = '', $status = '') {
        //echo $id;

        $this->db->select('*');
        $this->db->from('tbl_incident');
        if ($id != '') {
            $this->db->where('fld_id', $id);
        }
        if ($uid != '') {
            $this->db->where('fld_uid', $uid);
        }
        if ($status != '') {
            $this->db->where('fld_status', $status);
        }
        $query = $this->db->get();
        //echo $this->db->last_query();
        return $query->result();
    }

    function getincidentData($id = '', $uid = '', $status = '', $fld_isDeleted = '') {
        $sql = "select * from tbl_incident where fld_id= '" . $id . "' AND fld_status =0 AND fld_isDeleted =0 ";
        $query = $this->db->query($sql);
        //echo $this->db->last_query();
        return $query->result();
    }

    /* change the user type status after social login */

    function updateSocialUserStatus($id, $status) {
        $sql = "Update tbl_user SET fld_user_type  = '" . $status . "' where fld_id='" . $id . "' ";
        $query = $this->db->query($sql);
        return $query;
    }

    /* Get the Rating from Rating table means customer rating */

    function getRating($id = '') {
        $sql = "SELECT fld_rating FROM tbl_rating where fld_rating_ID = '" . $id . "'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    /* get the rating from the user service tag means self rating */

    function getSelfRating($id = '') {
        $sql = "SELECT fld_rating FROM tbl_user_service_tag where fld_uid = '" . $id . "'";
        $query = $this->db->query($sql);
        return $query;
    }

    function getSMERating($id = '') {
        $sql = "SELECT AVG(`fld_rating`) AS `avrageRating` FROM `tbl_user_service_tag` WHERE fld_uid = '" . $id . "' AND fld_certification_date >= NOW()";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function fatchNotfiCount($UID, $isAdmin = '') {
        if ($isAdmin != '') {
            $sql = "SELECT COUNT(fld_id) as notiCnt FROM `tbl_recent_activity` WHERE fld_status_admin = '0' AND fld_isAdmin = '0'";
        } else {
            $sql = "SELECT COUNT(fld_id) as notiCnt FROM `tbl_recent_activity` WHERE fld_status_user = '0' AND fld_target_id = " . $UID;
        }
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function updateNotReadP($UID, $isAdmin = '') {
        if ($isAdmin != '') {
            $sql = "UPDATE `tbl_recent_activity` SET `fld_status_admin` = '1' WHERE  `fld_status_admin` = '0' AND fld_isAdmin = '0'";
        } else {
            $sql = "UPDATE `tbl_recent_activity` SET `fld_status_user` = '1' WHERE  `fld_status_user` = '0' AND fld_target_id = " . $UID;
        }
        $query = $this->db->query($sql);
    }

    function deleteAllNotify($UID, $isAdmin = '') {
        if ($isAdmin != '') {
            $sql = "UPDATE `tbl_recent_activity` SET `fld_status_admin` = '2' WHERE  `fld_status_admin` = '1' OR   `fld_status_admin` = '0'  AND fld_isAdmin = '0'";
        } else {
            echo $sql = "UPDATE `tbl_recent_activity` SET `fld_status_user` = '2' WHERE  `fld_status_user` = '1'  OR   `fld_status_user` = '0' AND fld_target_id = " . $UID;
        }
        $query = $this->db->query($sql);
    }

    function deleteActivity($UID, $id = '') {
        if ($UID) {
            echo $sql = "UPDATE `tbl_recent_activity` SET `fld_status_user` = '2' WHERE `fld_id` = '$id' AND `fld_status_user` = '1'  OR   `fld_status_user` = '0'";
        } else {
            $sql = "UPDATE `tbl_recent_activity` SET `fld_status_admin` = '2' WHERE `fld_id` = '$id' AND  `fld_status_admin` = '1' OR   `fld_status_admin` = '0'  AND fld_isAdmin = '0'";
        }
        $query = $this->db->query($sql);
    }

    /* Get the ServiceName by the userid */

    function getServiceName($id = '') {
        $sql = "select tbl_user_service_tag.fld_uid, tbl_user_service_tag.fld_serviceTag_id,tbl_service_tag.fld_serviceName from tbl_user_service_tag,tbl_service_tag where tbl_service_tag.fld_id = tbl_user_service_tag.fld_serviceTag_id and tbl_user_service_tag.fld_uid = '" . $id . "'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    /* Get the RM ID */

    function getRmId($id = '') {
        $sql = "select * from tbl_incident_rm where fld_incident_id = '" . $id . "'";
        $query = $this->db->query($sql);
        return $query->result();
    }

    /* Insert The sme */

    function insert_assigned_sme($inci_id, $rm_id, $incident_smeList) {
        for ($i = 0; $i < count($incident_smeList); $i++) {
            $sql = "insert into tbl_incident_sme (fld_incident_id,fld_rm_id,fld_sme_id) values('" . $inci_id . "','" . $rm_id . "','" . $incident_smeList[$i] . "')";
            $query = $this->db->query($sql);
        }
        return $this->db->insert_id();
    }

    /* delete the previous Sme */

    function delete_incident_sme($uid) {
        $sql = "delete  from tbl_incident_sme where fld_incident_id= '" . $uid . "'";
        $query = $this->db->query($sql);
        return $query;
    }

    /* get the user email */

    function getUserEmail($id = '') {
        $sql = "select fld_email,fld_fname from tbl_user where fld_id= '" . $id . "'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    /* RM has accept the incident
      Update the RM status for the incident

     */

    function updateRMStatusToIncident($id = '') {
        $sql = "Update tbl_incident_rm SET fld_rm_status = 1 where fld_id='" . $id . "' ";
        $query = $this->db->query($sql);
        return $query;
    }

    /* Update The Incident Status */

    function updateIncidentStatus($id = '') {
        $sql = "Update tbl_incident SET fld_status = 2 where fld_id='" . $id . "' ";
        $query = $this->db->query($sql);
        return $query;
    }

    /* get incident related service name */

    function getInciRelServiceName($id = '') {
        $sql = "select distinct tbl_incident_service.fld_service_id,tbl_service_tag.fld_serviceName from tbl_incident_service,tbl_service_tag where tbl_service_tag.fld_id = tbl_incident_service.fld_service_id and tbl_incident_service.fld_incident_id = '" . $id . "'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    /* Insert the data Into The Recent Activity table  */

    function insert_into_recent_activity($id, $type, $uid, $rm_id, $subtypeStatus, $status, $message) {
        $date = date("Y-m-d H:i:s");
        $sql = "insert into tbl_recent_activity(fld_type_id, fld_type,fld_uid,fld_rm_id ,fld_subtype_status,fld_status,fld_created_date,fld_message) values ('" . $id . "','" . $type . "','" . $uid . "','" . $rm_id . "','" . $subtypeStatus . "','" . $status . "','" . $date . "','" . $message . "')";
        $query = $this->db->query($sql);
        return !empty($query) ? $query : false;
    }

    /* Get the recent activity of the user */

    function getUserRecentActivity($id = '') {
        $sql = "select * from tbl_recent_activity where fld_uid= '" . $id . "' ORDER BY fld_id DESC LIMIT 5";
        $query = $this->db->query($sql);
        return $query->result();
    }

    /* get the user email */

    function updateUserRecentActivityStatus($id = '') {
        $sql = "Update tbl_recent_activity SET fld_status = 1 where fld_id='" . $id . "' ";
        $query = $this->db->query($sql);
        return $query;
    }

    /* get the complete incident  */

    function getCompleteIncident($id = '') {
        $sql = "select a.fld_inci_title,a.fld_id as incTbl,b.fld_id  as rmTbl,b.fld_rm_id as rmid FROM `tbl_incident` AS a left join `tbl_incident_rm` AS b on a.fld_id = b.fld_incident_id WHERE a.fld_uid='" . $id . "' AND a.fld_status = '0' AND a.fld_isDeleted = '0' AND a.fld_isRating = '1' ORDER BY a.fld_modefied_date DESC 	";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function getFeedbackIncident($id) {
        $sql = "select fld_id FROM `tbl_incident` WHERE fld_status = '0' AND fld_isDeleted = '0' AND fld_uid  = '" . $id . "' AND (fld_isRating = '1' OR fld_isPaid = '1')";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function getRMuser($id = '') {
        $sql = "select fld_id from tbl_user where fld_user_type= '3' and fld_id!='" . $id . "'  ORDER BY fld_id DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    /* RM decline the incident */

    function delete_rm_from_incident($rmid = '', $incident_id = '') {
        $sql = "delete  from tbl_incident_rm where fld_rm_id= '" . $rmid . "' and fld_incident_id= '" . $incident_id . "'";
        $query = $this->db->query($sql);
        return !empty($query) ? $query : false;
    }

    /* RM decline the incident */

    function update_rm_status($rmid = '', $incident_id = '') {
        $sql = "Update tbl_incident_rm SET fld_rm_status = 2 where fld_rm_id='" . $rmid . "' and fld_incident_id='" . $incident_id . "' ";
        $query = $this->db->query($sql);
        return !empty($query) ? $query : false;
    }

    /* get the assigned incident to the SME  */

    function getIncidentAssignedToSME($id = '', $incident_id = '') {
        $sql = "select * from tbl_incident_sme where fld_sme_id='" . $id . "' ";
        if ($incident_id != '') {
            $sql .= " AND fld_incident_id = " . $incident_id;
        }

        $sql .= " ORDER BY fld_id DESC";
        //print_r($sql);
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    /* SME accept the incident.update SME Status for the incident  
      status = 1
      status = 2 (SME reject the incident)

     */

    function sme_accept_incident($id = '', $incident_id = '') {
        $sql = "Update tbl_incident_sme SET fld_sme_status = 1 where fld_sme_id='" . $id . "' and fld_incident_id='" . $incident_id . "' ";
        //print_r($sql);
        $query = $this->db->query($sql);
        return !empty($query) ? $query : false;
    }

    /*  SME reject the incident.
      Update SME Status for the incident status = 2

     */

    function sme_decline_incident($id = '', $incident_id = '') {
        $sql = "Update tbl_incident_sme SET fld_sme_status = 2 where fld_sme_id='" . $id . "' and fld_incident_id='" . $incident_id . "' ";
        //print_r($sql);
        $query = $this->db->query($sql);
        return !empty($query) ? $query : false;
    }

    /* get the incident detail related to RM  */

    function incident_list_to_rm($id = '') {
        $sql = "SELECT inci.*, RM.fld_rm_status FROM tbl_incident inci JOIN tbl_incident_rm RM ON inci.fld_Id = RM.fld_incident_id where RM.fld_rm_id = '" . $id . "'  ORDER BY inci.fld_Id";
        $query = $this->db->query($sql);
        return $query->result();
    }

    /* Insert the strip payment */

    function payment_insert($data = array()) {
        $this->db->insert('tbl_payments', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    /* Get schedule slot */

    function getScheduleslot($id = '') {
        $sql = "select * from tbl_schedule_slot where fld_uid = '" . $id . "' order by fld_id desc   ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function getRmInformation($id) {
        $sql = "select a.fld_incident_id, b.fld_username, b.fld_id,b.fld_fname,b.fld_lname,b.fld_mname from  `tbl_incident_rm` as a left join `tbl_user` as b on a.fld_rm_id  =  b.fld_id  where a.fld_incident_id = '" . $id . "' ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function updateData($key, $id, $data, $table) {
        $this->db->where($key, $id);
        $this->db->update($table, $data);
        return true;
    }

    public function insertTransaction($data = array()) {
        $insert = $this->db->insert('payments', $data);
        return $insert ? true : false;
    }

    function getIncidentTrackToSME($id = '', $rmid = '', $smeid = '') {

        $sql = "select * from tbl_track where `fld_rm_id` IN('$rmid') AND `fld_iid` = '$id' AND  fld_sme_id='" . $smeid . "' ";
        if ($id != '') {
            $sql .= " AND fld_iid = " . $id;
        }
        $sql .= " ORDER BY fld_id DESC";
        // print_r($sql);
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function gettotalActiveIncidentUser($id) {
        $ids = join("','", $id);
        $sql = "SELECT COUNT(fld_id) AS NoOfActiveIncident FROM `tbl_incident` WHERE `fld_id` IN ('$ids') AND `fld_isDeleted` = '0' AND `fld_status` = '5'";
        $query = $this->db->query($sql);

        return $query->result();
    }

    public function gettotalCompleteIncidentUser($id) {
        $ids = join("','", $id);
        $sql = "SELECT COUNT(fld_id) AS NoOfCompleteIncident FROM tbl_incident WHERE fld_status =0 AND fld_isDeleted = 0 AND `fld_id` IN ('$ids')";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function gettotalIncidentUser($id) {
        $ids = join("','", $id);
        $sql = "SELECT COUNT(fld_id) AS NumberOfIncident FROM tbl_incident WHERE `fld_id` IN ('$ids')";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function gettotalActiveIncidentCustomer($id) {
        $sql = "SELECT COUNT(fld_id) AS NoOfActiveIncident FROM `tbl_incident` WHERE `fld_uid` ='$id'  AND `fld_isDeleted` = '0' AND `fld_status` = '5'";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function gettotalCompleteIncidentCustomer($id) {
        $sql = "SELECT COUNT(fld_id) AS NoOfCompleteIncident FROM tbl_incident WHERE fld_status =0 AND fld_isDeleted = 0 AND `fld_uid` ='$id'";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function gettotalIncidentCustomer($id) {
        $sql = "SELECT COUNT(fld_id) AS NumberOfIncident FROM tbl_incident WHERE `fld_uid` ='$id'";
        $query = $this->db->query($sql);
        return $query->result();
    }
	public function getPushNotfiCan($cTime,$uid,$notIn) {
    	$sql = "SELECT * FROM `tbl_recent_activity` WHERE fld_created_date > '".$cTime."' AND fld_target_id = '".$uid."' AND (fld_data_type LIKE '%incident%' OR fld_data_type = 'dropMessage') AND fld_id NOT IN(".$notIn.")";
        $query = $this->db->query($sql);
        return $query->result();
    }
}
