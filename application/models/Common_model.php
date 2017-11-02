<?php
class Common_model extends CI_Model {
	function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
	
	//insert into user table
    function addContact($data) {
        $this->db->insert('tbl_contact', $data);
		return $this->db->insert_id();
    }
	
    public function getRmIdWithStatus($id=''){
        $sql = "select * from tbl_incident_rm where fld_incident_id = '" . $id . "' and fld_rm_status != '2' ";
        $query = $this->db->query($sql);
        return $query->result();
    }
	
	
	public function getAll($array,$order=array(),$table='ci_posts',$first='all',$limit='',$inTarget='',$inData=array())
	{
		$ret = array();
		if($inTarget!=''){
			$data = $this->db->where_in($inTarget,$inData);
		}
		if(!empty($array)){
			$data = $this->db->where($array);
		}
		
		if(!empty($order)){
			$this->db->order_by($order[0], $order[1]); 
		}
		
		if($limit!=''){
			$this->db->limit($limit);
		}	
		
		$data = $this->db->get($table);
		
		if($data->num_rows()>=1){
			foreach($data->result_array() as  $row){
				$ret[] = $row;	
			}
			
			if($first=='first'){
				$ret = $ret[0];
			}
		}
                //echo $this->db->last_query();
		return $ret;
		
	} 
	
	function getNotInData($select='*',$table,$where=array(),$notIn='',$notInData=array(),$order=array(),$limit=''){
        $this->db->select($select);
        $this->db->from($table);
		
		if(!empty($where)){
			$data = $this->db->where($where);
		}
		if($notIn !=''){
			$this->db->where_not_in($notIn, $notInData);
		}
		if(!empty($order)){
			$this->db->order_by($order[0], $order[1]); 
		}
		if($limit!=''){
			$this->db->limit($limit);
		}	
        $query = $this->db->get();
		//return $this->db->last_query();
		return $query->result();
    }
	
	public function getPartial($select='*',$table='',$where=array(),$order=array(),$limit='',$groupBy='',$inTarget='',$inData=array())
	{
		$ret = array();
		$this->db->select($select);
		if($inTarget!=''){
			$this->db->where_in($inTarget,$inData);
		}
		if(isset($where)){
			$this->db->where($where);
		}
		if($groupBy!=''){
			$this->db->group_by($groupBy);
		}
		if(!empty($order)){
			$this->db->order_by($order[0], $order[1]); 
		}	
		if($limit!=''){
			$this->db->limit($limit);
		}			
		$data = $this->db->get($table);
		
		if($data->num_rows()>=1){
			foreach($data->result_array() as  $row){
				$ret[] = $row;	
			}
		}
		return $ret;
		//return $this->db->last_query();
	} 
	public function getLimitRecord($select='*',$table,$where=array(),$order=array(),$limit=array())
	{
		$this->db->select($select);
		if(!empty($where)){
			$this->db->where($where);
		}
		if(!empty($order)){
			$this->db->order_by($order[0], $order[1]); 
		}
		if(!empty($limit)){
			$this->db->limit($limit[0], $limit[1]); 
		}
		$query = $this->db->get($table);
		return $query->result();
		//return $this->db->last_query();
	}
	public function updateData($key,$id,$data,$table)
	{
		$this->db->where($key,$id);
		$this->db->update($table,$data);
		//return true;
		return $this->db->last_query();die;
	}
	
	public function saveData($table,$data)
	{
		$this->db->insert($table,$data);
		return $this->db->insert_id();
		//return $this->db->last_query();
	}
	
	public function deleteData($table,$data)
	{
		$this->db->delete($table,$data);
		return true;
		//return $this->db->last_query();
	}
	
	public function bulkSaveData($table,$data)
	{
		$this->db->insert_batch($table,$data);
		return true;
		//return $this->db->last_query();
	}
	
	public function record_count($tbl)
	{
        return $this->db->count_all($tbl);
    }
	
	public function countResults($tbl, $where=array())
	{
		if(isset($where)){
			$this->db->where($where);
		}
		$this->db->from($tbl);
		return $this->db->count_all_results();
    }

    public function fetch_pagination($table, $limit, $start, $order=array())
	{
        $this->db->limit($limit, $start);
		if(!empty($order)){
			$this->db->order_by($order[0], $order[1]); 
		}
        $query = $this->db->get($table);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
   
    public function getAvrage($tbl, $target, $where=array())
	{		
		$sql = 'SELECT AVG(`'.$target.'`) AS `avrage` FROM `'.$tbl.'` WHERE 1=1 ';
		if(isset($where)){
			foreach ($where as $key => $value) {
                $sql .= ' AND '. $key.' = '.$value;
            }
		}
		$query = $this->db->query($sql);
		return $query->result_array();
		//return $this->db->last_query();
   }
   public function getSum($tbl, $target, $where=array())
	{		
		$sql = 'SELECT sum(`'.$target.'`) AS `sum` FROM `'.$tbl.'` WHERE 1=1 ';
		if(isset($where)){
			foreach ($where as $key => $value) {
                $sql .= ' AND '. $key.' = '.$value;
            }
		}
		$query = $this->db->query($sql);
		return $query->result_array();
		//return $this->db->last_query();
   }
   public function getIncidenttotalTime($sid = '', $rid = '', $iid = ''){
        $currentDate =date("Y-m-d H:i:s", time());
        $sql = "SELECT SEC_TO_TIME(SUM( TIMESTAMPDIFF(SECOND, (fld_start_time),IF(fld_end_time > 0, fld_end_time,'$currentDate') ))) AS TotalTime   FROM `tbl_track` WHERE `fld_rm_id` IN('$rid') AND `fld_iid` = '$iid' AND `fld_sme_id` = '$sid'";
        $query = $this->db->query($sql);
        return $query->result();
      
    }
    
     public function gettotalIncident(){
        $sql = "SELECT COUNT(fld_id) AS NumberOfIncident FROM tbl_incident"; 
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    public function gettotalActiveIncident(){
        $sql = "SELECT COUNT(fld_id) AS NoOfActiveIncident FROM tbl_incident WHERE fld_status =5 AND fld_isDeleted = 0"; 
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    public function gettotalCompleteIncident(){
        $sql = "SELECT COUNT(fld_id) AS NoOfCompleteIncident FROM tbl_incident WHERE fld_status =0 AND fld_isDeleted = 0"; 
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    public function updateRmPaid($iid , $rmid){
       $sql = "UPDATE tbl_incident_rm SET fld_isPaid = 0 WHERE fld_incident_id = '" . $iid . "' AND fld_rm_id = '". $rmid ."' AND fld_isDeleted = 0";
       $query = $this->db->query($sql);
       return $query;
    }
    
    public function updateSMEPaid($iid , $smeid){
       $sql = "UPDATE tbl_incident_sme SET fld_isPaid = 0 WHERE fld_incident_id = '". $iid ."' AND fld_sme_id = '". $smeid ."' AND fld_isDeleted = 0";
       $query = $this->db->query($sql);
       return $query;
    }
    
    function getCountryName($cCodeName= '') {
        $sql = "select * from tbl_country where fld_CountryCode= '" . $cCodeName . "' ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
