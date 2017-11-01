<?php
include_once('commonFunction.php');
if(!AID){
  redirect(base_url());
  exit;
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
            <h3>All Admin List</h3>
          </div>
          <?php if($admin[0]['fld_role'] == '0'){?>
          <div class="title_right">
            <a class="pull-right btn btn-primary" href="<?=base_url()?>superadmin/admin_users/add"><i class="fa fa-plus" aria-hidden="true"></i> Add New Admin</a>
          </div>
          <?php } ?>
          
        </div>
        <!--Start: page title -->
        
        <div class="clearfix"></div>
        
        <!--Start: page data -->
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel"> 
              
              <!--Start: x title -->
              <div class="x_title">
                <h2>View All Admins</h2>
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
                      <th>Username</th>
                      <th>Role</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="boxInputFull">
                    <?php foreach ($allUsers as $allUsersData){?>
                    <tr>
                      <td><?=$allUsersData['fld_fname']?> <?=$allUsersData['fld_lname']?></td>
                      <td><?=$allUsersData['fld_email']?></td>
                      <td><a href="mailTo:<?=$allUsersData['fld_username']?>"><?=$allUsersData['fld_username']?></a></td>
                      <td><?=$allUsersData['fld_role'] == '0' ? 'Super Admin':'Admin'?></td>
                      <td>
                      <?php if($admin[0]['fld_role'] == '0'){?>
                      <div class="fixShorting">
                          <?=$allUsersData['fld_status']?>
                        </div>
                        <input type="checkbox" onChange="changeStatus(this,'<?=encode($allUsersData['fld_id'])?>','sAdmin')" data-toggle="toggle" <?=$allUsersData['fld_status'] == 1 ? '':'checked'?> data-on="Active" data-off="Inactive">
                        <?php }else{
							echo $allUsersData['fld_status'] == 1 ? 'Inactive':'Active';	
						} ?>
                        </td>
                      <td><div class="btn-group">
                      	  <?php if($admin[0]['fld_role'] == '0'){?>
                          <a class="btn btn-sm btn-primary" href="<?=base_url()?>superadmin/admin_users/edit/<?=encode($allUsersData['fld_id'])?>"><i class="fa fa-pencil"></i> Edit</a>
                          <button class="btn btn-sm btn-default" onClick="deleteCommon(this,'<?=encode($allUsersData['fld_id'])?>','sAdmin')" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></button>
                          <?php }else{?>
							<a class="btn btn-sm btn-primary" href="<?=base_url()?>superadmin/admin_users/edit/<?=encode($allUsersData['fld_id'])?>"><i class="fa fa-eye"></i> View</a>
						<?php } ?>
                        </div></td>
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
<script src="<?=base_url() ?>assets/build/js/custom.js"></script>
</body>
</html>
