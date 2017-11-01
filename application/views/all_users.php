<?php
include_once('commonFunction.php');
$aid = $this->session->userdata('AID');
if(!$aid){
	redirect(base_url());
	exit;
}
if($lebelType == 0){
	$lblType = 'Customer';
}else if($lebelType == 2){
	$lblType = 'Subject Matter Expert';
}else if($lebelType == 3){
	$lblType = 'Resource Manager';
}else{
	$lblType = 'User';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Gotcha-6</title>
<?php include('include/style.php'); ?>
</head>
<body class="nav-md">
<div class="container body">
  <div class="main_container">
    <?php include('include/admin-sidebar.php'); ?>
    <?php include('include/admin-header.php'); ?>
    
    <!--Start: page content -->
    <div class="right_col" role="main">
      <div class=""> 
        
        <!--Start: page title -->
        <div class="page-title">
          <div class="title_left">
            <h3>All
              <?=$lblType?>
              List</h3>
          </div>
        </div>
        <!--Start: page title -->
        
        <div class="clearfix"></div>
        
        <!--Start: page data -->
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel"> 
              
              <!--Start: x title -->
              <div class="x_title">
                <h2>View All
                  <?=$lblType?>
                </h2>
                <div class="clearfix"></div>
              </div>
              <!--End: x title --> 
              
              <!--Start: x Panel -->
              <div class="x_content">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>User Name</th>
                      <th>User Type</th>
                      <?php if($lebelType!=0){?>
                      <th>Approval</th>
                      <?php } ?>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="boxInputFull">
                    <?php foreach ($users as $userData) {
                        switch ($userData['fld_user_type']) {
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
                            $userType = "Customer";
                    	}
                  ?>
                    <tr>
                      <td>
                        <?php if($lebelType ==3){?> 
                         <a href="<?=base_url()?>superadmin/allDetails/<?=encode($userData['fld_id']); ?>" target="_blank">
                        <?=$userData['fld_fname'].' '.$userData['fld_mname'].' '.$userData['fld_lname']?>
                        </a>
                         <?php }else {?>
                        <?=$userData['fld_fname'].' '.$userData['fld_mname'].' '.$userData['fld_lname']?>
                           <?php }?>
                      </td>
                      <td><a href="mailTo:<?=$userData['fld_email'];?>">
                        <?=$userData['fld_email'];?>
                        </a></td>
                      <td><?=$userData['fld_username'];?></td>
                      <td><?=$userType;?></td>
                      <?php if($lebelType!=0){?>
                      <td><?php if($userData['fld_user_type'] != 0){?>
                        <input type="checkbox" onChange="changeApproval(this,'<?=encode($userData['fld_id'])?>','usersList')" data-toggle="toggle" <?=$userData['fld_approved'] == 1 ? '':'checked'?> data-on="Approved" data-off="Pending Approval">
                        <?php }?></td>
                      <?php }?>
                      <td><div class="fixShorting">
                          <?=$userData['fld_status']?>
                        </div>
                        <input type="checkbox" onChange="changeStatus(this,'<?=encode($userData['fld_id'])?>','usersList')" data-toggle="toggle" <?=$userData['fld_status'] == 1 ? '':'checked'?> data-on="Active" data-off="Inactive"></td>
                      <td><div class="btn-group">
                          <button  onClick="getUserDetails('<?=encode($userData['fld_id'])?>')" class="btn btn-sm btn-primary"  type="button"><i class="fa fa-eye"></i> View</button>
                          <a class="btn btn-sm btn-default" href="<?=base_url()?>userprofile/<?=encode($userData['fld_id'])?>"  type="button" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                          <button class="btn btn-sm btn-default" type="button" data-placement="top" onClick="deleteCommon(this,'<?=encode($userData['fld_id'])?>','usersList')" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></button>
                        </div>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!--End: x Panel --> 
              
            </div>
          </div>
        </div>
        <!--End: page data --> 
      </div>
    </div>
    <!--End: page content -->
    
    <?php include('include/footer.php'); ?>
  </div>
</div>
<?php include('include/script.php'); ?>
<script src="<?=base_url() ?>assets/vendors/jquery-knob/dist/jquery.knob.min.js"></script> 
<script src="<?=base_url() ?>assets/build/js/custom.js"></script>
</body>
</html>
