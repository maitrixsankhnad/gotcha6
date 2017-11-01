<?php
class Admin_model extends CI_Model {
	function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
	
	function checkRegister($email) {
		$sql = "select * from tbl_admin where fld_email= '".$email."'"; 
		$query = $this->db->query($sql);
		return $query->result_array();
    }	
	function loginAdmin($email, $password) {
		$sql = "select * from tbl_admin where fld_email = '" . $email . "' and fld_password = '" . md5($password) . "' and fld_status = 0";
		$query = $this->db->query($sql);
		return $query->result_array();
    }
	function getAdmin($aid='') {
		$sql = "select * from tbl_admin where fld_id = '".$aid."' and fld_status = 0";
		$query = $this->db->query($sql);
		return $query->result_array();
    }

    function getUserTypeList($type='', $uid='') {
		$sql = "SELECT a.*,b.fld_id as country_id, b.fld_CountryCode, b.fld_CountryName FROM `tbl_user` AS a LEFT JOIN tbl_country as b ON a.fld_country = b.fld_CountryCode WHERE 0 = 0";
		if($uid != ''){
            $sql .= " AND a.fld_id = ".$uid;
        }
        if($type != ''){
        	$sql .= " AND a.fld_user_type = ".$type;	
        }
		$query = $this->db->query($sql);
		return $query->result_array();
    }

    function getcustomer($type=''){
    	$sql = "SELECT a.*,b.fld_id as country_id, b.fld_CountryCode, b.fld_CountryName FROM `tbl_user` AS a LEFT JOIN tbl_country as b ON a.fld_country = b.fld_CountryCode WHERE a.fld_status = 0 AND a.fld_user_type = '".$type."'";
    	$query = $this->db->query($sql);
		return $query->result_array();
    }


	function getincident($id='', $status=''){
		//echo $status;
		
		$this -> db -> select('*');
        $this->db->from('tbl_incident');
		if($id != '') {
		    $this->db->where('fld_id',$id);
        }
		
        if($status != ''){
            $this->db->where('fld_status',$status);
        }
        $query = $this -> db -> get();

		return $query->result();
    }


    /* get the complete incident  */
    function getCompleteIncident($id=''){
        $sql = "select * from tbl_incident where fld_status= '0' and fld_id='".$id."'  ORDER BY fld_id DESC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    /* Get the RM ID */

    function getRmId($id=''){
        $sql = "select * from tbl_incident_rm where fld_incident_id = '" . $id . "'";
        $query = $this->db->query($sql);
        return $query->result();
    }
	function getRecentActivity($type, $limit){
        $sql = "SELECT * FROM `tbl_recent_activity` WHERE `".$type."` NOT IN(2) LIMIT ".$limit;
        $query = $this->db->query($sql);
        return $query->result();
    }
	function getNotInData($select='*',$table,$where=array(),$notIn='',$notInData=array()){
        $this->db->select($select);
        $this->db->from($table);
		
		if(!empty($where)){
			$data = $this->db->where($where);
		}
		if($notIn !=''){
			$this->db->where_not_in($notIn, $notInData);
		}		
        $query = $this->db->get();
		return $query->result();
    }
}
