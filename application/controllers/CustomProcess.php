<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomProcess extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function userPreview($uid){
		$uid = decode($uid);
		$userData = $this->admin_model->getUserTypeList('', $uid);
		
		$timeslot = scheduleSlot($uid);
		
		$dataTimeSlot = '';
		foreach($timeslot as $timeslotData){
			$dataTimeSlot .= '<p class="value-text">'.date('h:i A', strtotime($timeslotData['fld_start_time'])).' to '.date('h:i A', strtotime($timeslotData['fld_end_time'])).'</p>';
		}
		$resume = $userData[0]['fld_resume'] ? '<p class="text-center"> <a download href="'.base_url().'uploads/resume/'.$userData[0]['fld_resume'].'">Download resume <i class="fa fa-download" aria-hidden="true"></i></a></p>':'';
		$facebook = $userData[0]['fld_facebook'] ? '<li><a target="_blank" href="'.$userData[0]['fld_facebook'].'"><i class="fa fa-facebook-square"></i></a></li>':'';
		$linkedin = $userData[0]['fld_linkedin'] ? '<li><a target="_blank" href="'.$userData[0]['fld_linkedin'].'"><i class="fa fa-linkedin-square"></i></a></li>':'';
		$google = $userData[0]['fld_google'] ? '<li><a target="_blank" href="'.$userData[0]['fld_google'].'"><i class="fa fa-google-plus-square"></i></a></li>':'';
		
		
		switch ($userData[0]['fld_user_type']) {
		case 0:
			$userType = "Customer";
			break;
		case 1:
			$userType = "Expert";
			break;
		case 2:
			$userType = "Subject Matter Expert";
			break;
		case 3:
			$userType = "Resources Manager";
			break;
		case 4:
			$userType = "Social Login";
			break;
		default:
			$userType = "";
		}  
			
		$usetData = '<div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                <h4 class="modal-title" id="myModalLabel">'.$userType.' Details</h4>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-3"> <img src="'.base_url().'uploads/profile/thumbs/'.$userData[0]['fld_picture'].'" class="border center-block img-responsive" alt="Avatar" style="margin-bottom: 5px;">
                    <div class="product_social text-center">
                      <ul class="list-inline">
                        '.$facebook.$linkedin.$google.'
                      </ul>
                    </div>
                    '.$resume.'
                  </div>
                  <div class="col-md-9">
                    <div class="form-group">
                      <label class="col-md-3 control-label">Name</label>
                      <div class="col-md-9">
                        <p class="value-text">'.$userData[0]['fld_fname'].' '.$userData[0]['fld_mname'].' '.$userData[0]['fld_lname'].'</p>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-md-3 control-label">Username</label>
                      <div class="col-md-9">
                        <p class="value-text">'.$userData[0]['fld_username'].'</p>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Country</label>
                      <div class="col-md-9">
                        <p class="value-text">'.$userData[0]['fld_CountryName'].'</p>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Email</label>
                      <div class="col-md-9">
                        <p class="value-text">'.$userData[0]['fld_email'].'</p>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="email" class="col-md-3 control-label">Time Zone</label>
                      <div class="col-md-9">
                        <p class="value-text">'.$userData[0]['fld_time_zone'].'</p>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="email" class="col-md-3 control-label">User Type</label>
                      <div class="col-md-9">
                        <p class="value-text">'.$userType.'</p>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Availability </label>
                      <div class="col-md-9">
                        '.$dataTimeSlot.'
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="col-md-12 ">About</label>
                      <div class="col-md-12">
                        <p class="value-text">'.$userData[0]['fld_about'].'<br><br></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>';
		echo $usetData;
	}
	
	
	public function smeListModel($incID){
		$iid = decode($incID);		
		$serviceData = $this->common_model->getAll(array("fld_incident_id" => $iid),'','tbl_incident_service');
		$onlyServiceID = array_column($serviceData, 'fld_service_id');
		$smeList = $this->common_model->getPartial('fld_uid','tbl_user_service_tag',array(),array(),'','fld_uid','fld_serviceTag_id',$onlyServiceID);
		if(count($smeList)>0){
			$allSMEID = array_column($smeList, 'fld_uid');
			$selectedSMEID = $this->common_model->getAll(array('fld_incident_id'=>$iid),'','tbl_incident_sme','all','','fld_status',array(0,1));
                       
			$selectedSMEID = array_column($selectedSMEID, 'fld_sme_id');
			$smeDetail = $this->common_model->getAll(array('fld_approved'=>'0', 'fld_isDeleted'=>'0', 'fld_status'=>'0'),'','tbl_user','all','','fld_id',$allSMEID);
		}else{
			$smeDetail = array();	
		}
		$usetData = '';
		$usetPreview = '<div class="modal-dialog modal-lg">
		<form id="submitSMELIST">
		  <input type="hidden" value="'.$incID.'" class="selectedIID" />
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span> </button>
              <h4 class="modal-title" id="myModalLabel"> Assign SME</h4>
            </div>
            <div class="modal-body">
              <table  id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                  <tr>
					<th class="col-md-1">Select User</th>
					<th>User</th>
					<th>Rating</th>
					<th>Status</th>
					<th class="col-md-1">Action</th>
                  </tr>
                </thead>
                <tbody class="boxInputFull">';
				
				foreach($smeDetail as $smeDetailFULL){
					$avrageRate = getAvgSMERating($smeDetailFULL['fld_id'])?:'0';
					$statusClass = $smeDetailFULL['fld_activity'] == '0'? 'success' : 'default';
					$statusSME = $smeDetailFULL['fld_activity'] == '0'? 'Online' : 'Offline';
					$smeID = "'".encode($smeDetailFULL['fld_id'])."'";
					$isSelected = in_array($smeDetailFULL['fld_id'], $selectedSMEID) ? 'checked':'';
					$profileImg = base_url().'uploads/profile/thumbs/'.$smeDetailFULL['fld_picture'];
                                        $selectSMEData = getSelectedInciSME($iid);
                                        // echo $selectSMEData[0]['fld_sme_id'];  
                                        $usetData .= '<tr class="">
						  <td class="text-center"><div class="radio">
							  <label>
								<input '.$isSelected.' type="checkbox" class="flat smeListCh"  name="sme_id[]"  value="'.encode($smeDetailFULL['fld_id']).'" >
							  </label>
							</div></td>
						  <td><img width="50" src="'.$profileImg.'" />
							'.$smeDetailFULL['fld_username'].'</td>
						  <td><div class="rateyo disableMouse" data-rateyo-rating="'.$avrageRate.'"></div>
							<div class="text_css">
							  '.$avrageRate.'
							</div></td>
						  <td><span class="btn btn-'.$statusClass.' btn-xs">
							'.$statusSME.'
							</span></td>
						  <td><div class="col-md-2">
							  <button type="button" class="btn btn-primary" onClick="getUserDetails('.$smeID.')"> View Profile </button>
							</div></td>
						</tr>';
				}
                $usetPreview .= $usetData.'</tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary assnSME">Choose any SME</button>
            </div>
          </div>
		  </form>
        </div>';
		echo $usetPreview;
	}	
}
?>
