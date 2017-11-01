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
				<div class="page-title">
					<div class="title_left">
						<h3>All SME List</h3>
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
							
							<!--Start: x title -->
							<div class="x_title">
								<h2>View All Subject Matter Expert</h2>
								
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
											<th>Country</th>
											<th>User-type</th>
											<th>status</th>
											<th class="col-md-2">Action</th>
										</tr>
									</thead>
									<tbody class="boxInputFull">
										<?php foreach ($users as $userData) {

                        switch ($userData['fld_user_type']) {
                        case 0:
                            $status = "Customer";
                            break;
                        case 1:
                            $status = "Expert";
                            break;
                        case 2:
                            $status = "Subject Matter Expert";
                            break;
                        case 3:
                            $status = "Resources Manager";
                            break;
                        case 4:
                            $status = "Social Login";
                            break;
                        default:
                            $status = "Customer";
                    }



                  ?>
										<tr>
										<td><?=$userData['fld_fname'].' '.$userData['fld_mname'].' '.$userData['fld_lname']?></td>
										<td><?=$userData['fld_email'];?></td>
										<td><?=$userData['fld_CountryName'];?></td>
										<td><?=$status;?></td>
																	
									<td><input type="checkbox" data-toggle="toggle" data-on="Enabled" data-off="Disabled"></td>
									<td><div class="btn-group">
											<!--<button class="btn btn-sm btn-primary" type="button"><i class="fa fa-thumb-tack"></i> Track</button>-->	
											<button  data-toggle="modal" data-target=".user-details" class="btn btn-sm btn-primary"  type="button"><i class="fa fa-eye"></i> View</button>
											<button class="btn btn-sm btn-default"  type="button" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></button>							
											<button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></button>
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
				
				<!-- Start:  User Details Modals -->
				<div class="modal fade user-details" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
								<h4 class="modal-title" id="myModalLabel">User Details</h4>
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
				<!-- Ens:  User Details Modals -->
				
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
