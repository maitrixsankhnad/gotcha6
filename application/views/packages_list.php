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
            <h3>All Package List</h3>
          </div>
          <?php if($admin[0]['fld_role'] == '0'){?>
          <div class="title_right">
            <a class="pull-right btn btn-primary" href="<?=base_url()?>superadmin/packages_list/add"><i class="fa fa-plus" aria-hidden="true"></i> Add New Package</a>
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
                <h2>View All Package</h2>
                <div class="clearfix"></div>
              </div>
              <!--End: x title --> 
              
              <!--Start: x Panel -->
              <div class="x_content">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Price</th>
                      <th>Duration</th>
                      <th>Detail</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="boxInputFull">
                    <?php foreach ($package as $packageData){
						$duration = $packageData['fld_duration'];
						if($duration == '0'){
							$duration = 'Houry';
						}else if($duration == '1'){
							$duration = 'Daily';
						}else if($duration == '2'){
							$duration = 'Monthly';
						}else if($duration == '3'){
							$duration = 'Yearly';
						}
					?>
                    <tr>
                      <td><?=$packageData['fld_title']?></td>
                      <td>$<?=$packageData['fld_price']?></td>
                      <td><?=$duration?></td>
                      <td><?=trimData($packageData['fld_detail'], 100, true)?></td>
                      <td>
                      <?php if($admin[0]['fld_role'] == '0'){?>
                        <div class="fixShorting">
                          <?=$packageData['fld_status']?>
                        </div>
                        <input type="checkbox" onChange="changeStatus(this,'<?=encode($packageData['fld_id'])?>','package')" data-toggle="toggle" <?=$packageData['fld_status'] == 1 ? '':'checked'?> data-on="Active" data-off="Inactive">
                        <?php }else{
							echo $packageData['fld_status'] == 1 ? 'Inactive':'Active';	
						} ?>
                        </td>
                      <td>
                      	<div class="btn-group">
                      	  <?php if($admin[0]['fld_role'] == '0'){?>
                          <a class="btn btn-sm btn-primary" href="<?=base_url()?>superadmin/packages_list/edit/<?=encode($packageData['fld_id'])?>"><i class="fa fa-pencil"></i> Edit</a>
                          <button class="btn btn-sm btn-default" onClick="deleteCommon(this,'<?=encode($packageData['fld_id'])?>','package')" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></button>
                          <?php }else{?>
							<a class="btn btn-sm btn-primary" href="<?=base_url()?>superadmin/packages_list/edit/<?=encode($packageData['fld_id'])?>"><i class="fa fa-eye"></i> View</a>
						<?php } ?>
                        </div>
                      </td>
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
