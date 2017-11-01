<?php
class User {
	private $dbHost     = "localhost";
    private $dbUsername = "demoma_gotcha6";
    private $dbPassword = "gotcha6";
    private $dbName     = "demoma_gotcha6";
    private $userTbl    = 'tbl_user';
	
	function __construct(){
        if(!isset($this->db)){
            // Connect to the database
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
            if($conn->connect_error){
                die("Failed to connect with MySQL: " . $conn->connect_error);
            }else{
                $this->db = $conn;
            }
        }
    }
	
	function checkUser($userData = array()){
        if(!empty($userData)){
            //Check whether user data already exists in database
            $prevQuery = "SELECT * FROM ".$this->userTbl." WHERE fld_login_provider = '".$userData['oauth_provider']."' AND fld_oauth_id = '".$userData['oauth_uid']."'";
            $prevResult = $this->db->query($prevQuery);
            if($prevResult->num_rows > 0){
                //Update user data if already exists
                $query = "UPDATE ".$this->userTbl." SET fld_fname = '".$userData['first_name']."', fld_lname = '".$userData['last_name']."', fld_email = '".$userData['email']."', fld_picture = '".$userData['picture']."'";
                $update = $this->db->query($query);
            }else{
                //Insert user data
                $query = "INSERT INTO ".$this->userTbl." SET fld_login_provider = '".$userData['oauth_provider']."', fld_oauth_id = '".$userData['oauth_uid']."', fld_fname = '".$userData['first_name']."', fld_lname = '".$userData['last_name']."', fld_email = '".$userData['email']."', fld_picture = '".$userData['picture']."', fld_password = '".$userData['oauth_uid']."', fld_created_date = '".date("Y-m-d H:i:s")."', fld_status = '0', fld_user_type  = '4'";
                $insert = $this->db->query($query);
            }
			 //Get user data from the database
            $result = $this->db->query($prevQuery);
            $userData = $result->fetch_assoc();
            
        }
        //Return user data
        return $userData;
    }
}
?>