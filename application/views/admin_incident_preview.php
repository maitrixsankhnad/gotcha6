<?php
include_once('commonFunction.php');
$this->load->view('userchat');
$aid = $this->session->userdata('AID');
if(!$aid){
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
				<div class="page-title hide">
					<div class="title_left">
						<h3>View Incident Details </h3>
					</div>
					<div class="title_right hide">
						<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search for...">
								<span class="input-group-btn">
								<button class="btn btn-default" type="button">Go!</button>
								</span> </div>
						</div>
					</div>
				</div>
				<!--Start: page title -->
				<div class="clearfix"></div>
				
				<!--Start: page data -->
				<div class="row">	
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="x_panel">
						
							<!--Start:  x title -->
							<div class="x_title">
								<h2>View Incident Details</h2>
<!--								<ul class="navbar-right">
									<li><a class="btn btn-info btn-sm" href="#"> Track Incident</a></li>
									<li><a class="btn btn-danger btn-sm" href="#"> Decline</a></li>
									<li><a class="btn btn-success btn-sm" data-toggle="modal" data-target=".bs-example-modal-lg" > Asign SME</a></li>
								</ul>-->
								<div class="clearfix"></div>
							</div>
							<!--End:  x title -->
							
							<!--Start: x Content -->
							<div class="x_content">
							
								<!--Start: Incidents -->
								<div class="row">
									<div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
										<label>Incident Title</label>
										<p class="value-text"><?=$inci[0]->fld_inci_title;?></p>
									</div>
									<div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
										<label>Email</label>
										<p class="value-text"><?=$inci[0]->fld_email;?></p>
									</div>
									<div class="form-group col-xs-6 col-sm-6 col-md-2">
										<label>Incident Status</label>
										<?php
                                                      $status = '';
                                                        switch ($inci[0]->fld_status) {
                                                          case 0:
                                                              $status = "<span class='btn btn-success btn-xs'>Complete</span>";
                                                              break;
                                                          case 1:
                                                              $status = "<span class='btn btn-warning btn-xs'>Pending</span>";
                                                              break;
                                                          case 2:
                                                              $status = "<span class='btn btn-info btn-xs'>Approved</span>";
                                                              break;
                                                          case 3:
                                                              $status = "<span class='btn label label-cancel btn-xs'>Cancelled</span>";
                                                              break;
                                                          case 4:
                                                              $status = "<span class='btn label label-danger btn-xs'>Declined</span>";
                                                              break;
                                                          default:
                                                              $status = "<span class='btn btn-warning btn-xs'>In Progress</span>";
                                                      }


                                                      ?>
										
										<p><?=$status;?></p>
									</div>
									<div class="form-group col-xs-6 col-sm-6 col-md-2">
										<label>Push Notifications</label>
										<p><span class="btn btn-success btn-xs">Enable</span></p>
									</div>
									<div class="form-group col-xs-12 col-md-8">
										<label>Incident Summary</label>
										<p class="value-text"> <?=$inci[0]->fld_summary;?></p>
									</div>
									<div class="form-group col-xs-12  col-sm-12 col-md-4">
										<label>Service Tags</label>
                                                                                <p class="value-text">
                                                                                    <?php $arr = array();
                                                                                        $arr = get_incident_rel_service_tag_name($inci[0]->fld_id);												
                                                                                        foreach($arr as $serviceTag){ 
                                                                                    ?>
										<span class="btn btn-info btn-xs"><?php echo $serviceTag['fld_serviceName'];?></span>
									            <?php } ?>
                                                                                </p>
                                                                        </div>
								</div>
								<!--End: Incidents -->
								
								<!--Start: hr -->
								<div class="row">
									<div class=" col-lg-12">
										<hr/>
									</div>
								</div>
								<!--End: hr -->
								
								<!--Start: Service Level Selection  -->
								<div class="row">
									<div class="form-group col-xs-12 col-sm-6 col-md-6">
										<label>Customer Name</label>
										<p class="value-text"><a href="#" onClick="getUserDetails('<?=encode($inci[0]->fld_uid)?>')"  data-target=".user-details"><?php 
															$customer = get_user_name($inci[0]->fld_uid);
															echo $customer;
													  		?></a></p>
									</div>
									<div class="form-group col-xs-12 col-sm-6 col-md-6">
										<label>Selected Service Level</label>
										<?php
                                                      $level = '';
                                                      switch ($inci[0]->fld_service_level) {
                                                          case 0:
                                                              $level = "Incident Manager";
                                                              break;
                                                          case 1:
                                                              $level = "Project Manager";
                                                              break;
                                                          case 2:
                                                              $level = "IT/Director";
                                                              break;
                                                          default:
                                                              $level = "Incident Manager";
                                                      }
                                                      ?>
										<p class="value-text"><?=$level;?></p>
									</div>
									<div class="form-group col-xs-12 col-sm-6 col-md-4">
										<label>Plan Name</label>
										 <?php
                                                      $plan = '';
                                                      switch ($inci[0]->fld_plan_name) {
                                                          case 0:
                                                              $plan = "Bronze";
                                                              break;
                                                          case 1:
                                                              $plan = "Gold";
                                                              break;
                                                          case 2:
                                                              $plan = "Platinum";
                                                              break;
                                                          default:
                                                              $plan = "Bronze";
                                                      }
                                                      ?>
										<p class="value-text"><?=$plan;?></p>
									</div>
									<div class="form-group col-xs-12 col-sm-6 col-md-4">
										<label>Pricing</label>
										<p class="value-text">$18,500 / hours</p>
									</div>
									<div class="form-group col-xs-12 col-sm-6 col-md-4">
										<label>Assigned Resources Manager</label>
										<?php if(isset($rm_id[0]->fld_rm_id)){?>
										<p class="value-text"><?php echo(get_user_name($rm_id[0]->fld_rm_id));?></p>
										  <?php } ?>
									</div>
								</div>
								<!--End: Service Level Selection -->
								
							</div>
							<!--End: x Content -->
						</div>
					</div>
				</div>
				<!--End: page data -->
				
				<!-- Start:  Assign SME Modals -->
				<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span> </button>
								<h4 class="modal-title" id="myModalLabel"> Assign SME</h4>
							</div>
							<div class="modal-body">
								<table  id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th class="col-md-1"></th>
											<th>Image</th>
											<th>Name</th>
											<th>Rating</th>
											<th class="col-md-1">Action</th>
										</tr>
									</thead>
									<tbody class="boxInputFull">
										<tr>
											<td><input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required /></td>
											<td><div class="img-circle profile_img" style="background-image:url(<?=$profilePic;?>); margin:0;"></div></td>
											<td><a class="title" href="#" style="color: #000;">Ajay Singh</a></td>
											<td><p class="ratings"> <a href="#"><span class="fa fa-star"></span></a> <a href="#"><span class="fa fa-star"></span></a> <a href="#"><span class="fa fa-star"></span></a> <a href="#"><span class="fa fa-star"></span></a> <a href="#"><span class="fa fa-star-o"></span></a> </p></td>
											<td><div class="col-md-2">
													<button type="button" class="btn btn-primary" style="padding: 5px 15px;" data-toggle="modal" data-target="#myModal"> view </button>
												</div></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>
				<!-- End:  Assign SME Modals -->
				
				<!-- Start:  Resource Manager Details Modals -->
				<div class="modal fade user-details" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
								<h4 class="modal-title" id="myModalLabel">Resource Manager Details</h4>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-3"> <img src="http://localhost/gotcha6/assets/images/img.jpg" class="border center-block img-responsive" alt="Avatar" style="margin-bottom: 5px;">
										<div class="product_social text-center">
											<ul class="list-inline">
												<li><a href="https://www.facebook.com/"><i class="fa fa-facebook-square"></i></a></li>
												<li><a href=""><i class="fa fa-linkedin-square"></i></a></li>
												<li><a href="https://plus.google.com"><i class="fa fa-google-plus-square"></i></a></li>
											</ul>
										</div>
										<p class="text-center"> <a href="#">Download resume <i class="fa fa-download" aria-hidden="true"></i></a> </p>
									</div>
									<div class="col-md-9">
										<div class="form-group">
											<label class="col-md-3 control-label">Name</label>
											<div class="col-md-9">
												<p class="value-text">snehagupta</p>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Country</label>
											<div class="col-md-9">
												<p class="value-text">American Samoa</p>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Email</label>
											<div class="col-md-9">
												<p class="value-text">sneha@customer.com</p>
											</div>
										</div>
										<div class="form-group">
											<label for="email" class="col-md-3 control-label">Time Zone</label>
											<div class="col-md-9">
												<p class="value-text">+05:30,0</p>
											</div>
										</div>
										<div class="form-group">
											<label for="email" class="col-md-3 control-label">User Type</label>
											<div class="col-md-9">
												<p class="value-text">Resource Manager</p>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Availability </label>
											<div class="col-md-9">
												<p class="value-text">9:00 AM to 8:PM</p>
												<p class="value-text">9:00 AM to 8:PM</p>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label class="col-md-12 ">Market yourself: Tell Us About You</label>
											<div class="col-md-12">
												<p class="value-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Ens:  Resource Manager Details Modals -->
				
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
