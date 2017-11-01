<?php
class DB 
{
	function __construct(){
		$this->dbConnect();
		$this->userTable = 'tbl_user';
	}
	
	function dbConnect(){
		// database configuration
		$dbServer = 'localhost';
		//$dbUsername = 'demoma_gotcha6';
		//$dbPassword = 'gotcha6';
		//$dbName = 'demoma_gotcha6';
		
		$dbUsername = 'root';
		$dbPassword = '';
		$dbName = 'db_gotcha6';
		$conn = new mysqli($dbServer,$dbUsername,$dbPassword,$dbName);
		if($conn){
			$this->db = $conn;
		}else{
			die("Database conection error: ".$conn->connect_error);
		}
	}
	
	function checkUser($userdata){
		$oauth_uid = $userdata->id;
		$email = $userdata->emailAddress;
		$check = $this->db->query("SELECT * FROM $this->userTable WHERE fld_oauth_id = '".$oauth_uid."' AND fld_email = '".$email."'");
		if(mysqli_num_rows($check) > 0){
			$result = $check->fetch_array(MYSQLI_ASSOC);
			$query = "UPDATE $this->userTable SET fld_fname = '".$userdata->firstName."', fld_lname = '".$userdata->lastName."', fld_email = '".$userdata->emailAddress."', fld_country = '".$userdata->location->country->code."', fld_picture = '".$userdata->pictureUrl."', fld_modefied_date = '".date("Y-m-d H:i:s")."' WHERE fld_id = ".$result['fld_id'];
			$this->db->query($query);
			return $result['fld_id'];
		}else{
			$query = "INSERT INTO 
						$this->userTable(fld_login_provider,fld_oauth_id,fld_fname,fld_lname,fld_email,fld_password,fld_country,fld_picture,fld_created_date,fld_status, 	fld_user_type ) 
						VALUES('linkedin','".$userdata->id."','".$userdata->firstName."','".$userdata->lastName."','".$userdata->emailAddress."','".$userdata->id."','".$userdata->location->country->code."','".$userdata->pictureUrl."','".date("Y-m-d H:i:s")."','0','4')";
			$this->db->query($query);
			return $this->db->insert_id;
		}
	}
}
?>