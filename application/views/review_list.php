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
            <h3>All User Review List</h3>
          </div>
          <?php if($admin[0]['fld_role'] == '0'){?>
          <div class="title_right"> <a class="pull-right btn btn-primary" href="<?=base_url()?>review/add"><i class="fa fa-star"></i> Add New Rating</a> </div>
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
                <h2>View All User Review </h2>
                <div class="clearfix"></div>
              </div>
              <!--End: x title --> 
              
              <!--Start: x Panel -->
              <div class="x_content">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Incident Title</th>
                      <th>Rating By</th>
                      <th>Rated To</th>
                      <th>Feedback</th>
                      <th>Rating</th>
                      <th>Status</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="boxInputFull">
                    <?php foreach ($rating as $ratingData){
						if($ratingData['fld_is_solved']=='0'){
							$status = '<span class="label label-success">Satisfied</span>';
						}else{
							$status = '<span class="label label-danger">Dissatisfied</span>';
						}
						$incidentData = incident($ratingData['fld_incident_id']);
						$ratedTO = userInfo($ratingData['fld_uid']);
						$ratedBy = userInfo($ratingData['fld_rating_ID']);
					?>
                    <tr>
                      <td><a href="<?=base_url()?>superadmin/incident_preview/<?=encode($incidentData[0]['fld_id'])?>" target="_blank">
                        <?=trimData($incidentData[0]['fld_inci_title'], 30, true)?>
                        </a></td>
                      <?php if($ratingData['fld_isAdmin']=='1'){?>
                      <td><a data-toggle="tooltip" data-original-title="<?=$ratedBy[0]['fld_fname'].' '.$ratedBy[0]['fld_lname']?>" href="<?=base_url()?>userprofile/<?=encode($ratedBy[0]['fld_id'])?>">
                        <?=$ratedBy[0]['fld_username']?>
                        </a></td>
                      <?php }else{
						  $ratedBy = adminInfo($ratingData['fld_uid']);
						  if(count($ratedBy) > 0){
						  ?>
                      <td><a data-toggle="tooltip" data-original-title="<?=$ratedBy[0]['fld_fname'].' '.$ratedBy[0]['fld_lname']?>" href="<?=base_url()?>superadmin/admin_users/edit/<?=encode($ratedBy[0]['fld_id'])?>">
                        <?=$ratedBy[0]['fld_username']?> (<?=$ratedBy[0]['fld_role'] == 0? 'Super':''?> Admin)
                        </a></td>
                      <?php }else{echo 'Admin';}}?>
                      <td><a data-toggle="tooltip" data-original-title="<?=$ratedTO[0]['fld_fname'].' '.$ratedTO[0]['fld_lname']?>" href="<?=base_url()?>userprofile/<?=encode($ratedBy[0]['fld_id'])?>">
                        <?=$ratedTO[0]['fld_username']?>
                        </a></td>
                      <td><?=trimData($ratingData['fld_feedback'], 50, true)?></td>
                      <td><div class="rateyo disableMouse" data-rateyo-rating="<?=$ratingData['fld_rating']?>"></div>
                        <div class="text_css">
                          <?=$ratingData['fld_rating']?>
                        </div></td>
                      <td><?=$status?></td>
                      <td><div class="text_css">
                          <?=strtotime($ratingData['fld_created_date'])?>
                        </div>
                        <?=date('dS M Y',strtotime($ratingData['fld_created_date']))?></td>
                      <td><div class="btn-group">
                          <?php if($admin[0]['fld_role'] == '0'){?>
                          <button class="btn btn-sm btn-primary" onClick="gotoPage('<?=base_url()?>review/edit/<?=encode($ratingData['fld_id'])?>')" type="button" data-placement="top" data-toggle="tooltip" data-original-title="View / Edit"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-sm btn-default" onClick="deleteCommon(this,'<?=encode($ratingData['fld_id'])?>','rating')" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></button>
                          <?php }else{?>
                          <button class="btn btn-sm btn-primary" onClick="gotoPage('<?=base_url()?>review/preview/<?=encode($ratingData['fld_id'])?>')" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Preview"><i class="fa fa-pencil"></i></button>
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
<script src="<?=base_url() ?>assets/js/jquery.rateyo.min.js"></script> 
<script src="<?=base_url() ?>assets/build/js/custom.js"></script> 
<script>
installRating('rateyo');
</script>
</body>
</html>
