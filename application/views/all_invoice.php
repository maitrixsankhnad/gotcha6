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
						<h3>Invoice</h3>
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
								<h2>View All Invoice</h2>
								<div class="clearfix"></div>
							</div>
							<!--End: x title -->
							
							<!--Start: x Panel -->
							<div class="x_content">
								<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>InvoiceNumber</th>
											<th>User</th>
											<th>Email</th>
											<th>Status</th>
											<th class="col-md-2">Action</th>
										</tr>
									</thead>
									<tbody class="boxInputFull">
										<tr>
											<td>75152-479042</td>
											<td><a data-toggle="modal" data-target=".user-details" href="#" >Arti Nair</a></td>	
											<td>admin@gmail.com</td>									
											<td> <span class="btn btn-info btn-xs">In Process<span></span></span></td>
											<td><div class="btn-group">
<button  data-toggle="modal" data-target=".user-details" class="btn btn-sm btn-primary"  type="button"><i class="fa fa-eye"></i> View</button>
<button data-toggle="modal" data-target=".send" class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Send"><i class="fa fa-paper-plane"></i></button>											
<button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></button>
												</div>
										</tr>
									</tbody>
								</table>
							</div>
							<!--End: x Panel -->
						</div>
					</div>
				</div>
				<!--End: page data -->
				
				<!-- Start:  Invoice Modals -->
				<div class="modal fade user-details" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
								<h4 class="modal-title" id="myModalLabel">Invoice</h4>
							</div>
							<div class="modal-body">
								<section class="content invoice">
									<!-- title row -->
									<div class="row">
										<div class="col-xs-12 invoice-header">
											<h1> <i class="fa fa-globe"></i> Invoice. <small class="pull-right">Date: 16/08/2016</small> </h1>
										</div>
										<!-- /.col -->
									</div>
									<!-- info row -->
									<div class="row invoice-info">
										<div class="col-sm-4 invoice-col"> From
											<address>
											<strong>Iron Admin, Inc.</strong> <br>
											795 Freedom Ave, Suite 600 <br>
											New York, CA 94107 <br>
											Phone: 1 (804) 123-9876 <br>
											Email: ironadmin.com
											</address>
										</div>
										<!-- /.col -->
										<div class="col-sm-4 invoice-col"> To
											<address>
											<strong>John Doe</strong> <br>
											795 Freedom Ave, Suite 600 <br>
											New York, CA 94107 <br>
											Phone: 1 (804) 123-9876 <br>
											Email: jon@ironadmin.com
											</address>
										</div>
										<!-- /.col -->
										<div class="col-sm-4 invoice-col"> <b>Invoice #007612</b> <br>
											<br>
											<b>Order ID:</b> 4F3S8J <br>
											<b>Payment Due:</b> 2/22/2014 <br>
											<b>Account:</b> 968-34567 </div>
										<!-- /.col -->
									</div>
									<!-- /.row -->
									<!-- Table row -->
									<div class="row">
										<div class="col-xs-12 table">
											<table class="table table-striped">
												<thead>
													<tr>
														<th>Qty</th>
														<th>Product</th>
														<th>Serial #</th>
														<th style="width: 59%">Description</th>
														<th>Subtotal</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>Call of Duty</td>
														<td>455-981-221</td>
														<td>El snort testosterone trophy driving gloves handsome gerry Richardson helvetica tousled street art master testosterone trophy driving gloves handsome gerry Richardson </td>
														<td>$64.50</td>
													</tr>
													<tr>
														<td>1</td>
														<td>Need for Speed IV</td>
														<td>247-925-726</td>
														<td>Wes Anderson umami biodiesel</td>
														<td>$50.00</td>
													</tr>
													<tr>
														<td>1</td>
														<td>Monsters DVD</td>
														<td>735-845-642</td>
														<td>Terry Richardson helvetica tousled street art master, El snort testosterone trophy driving gloves handsome letterpress erry Richardson helvetica tousled</td>
														<td>$10.70</td>
													</tr>
													<tr>
														<td>1</td>
														<td>Grown Ups Blue Ray</td>
														<td>422-568-642</td>
														<td>Tousled lomo letterpress erry Richardson helvetica tousled street art master helvetica tousled street art master, El snort testosterone</td>
														<td>$25.99</td>
													</tr>
												</tbody>
											</table>
										</div>
										<!-- /.col -->
									</div>
									<!-- /.row -->
									<div class="row">
										<!-- accepted payments column -->
										<div class="col-xs-6">
											<p class="lead">Payment Methods:</p>
											<img src="<?=base_url()?>assets/images/visa.png" alt="Visa"> <img src="<?=base_url()?>assets/images/mastercard.png" alt="Mastercard"> <img src="<?=base_url()?>assets/images/american-express.png" alt="American Express"> <img src="<?=base_url()?>assets/images/paypal.png" alt="Paypal">
											<p class="text-muted well well-sm no-shadow" style="margin-top: 10px;"> Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra. </p>
										</div>
										<!-- /.col -->
										<div class="col-xs-6">
											<p class="lead">Amount Due 2/22/2014</p>
											<div class="table-responsive">
												<table class="table">
													<tbody>
														<tr>
															<th style="width:50%">Subtotal:</th>
															<td>$250.30</td>
														</tr>
														<tr>
															<th>Tax (9.3%)</th>
															<td>$10.34</td>
														</tr>
														<tr>
															<th>Shipping:</th>
															<td>$5.80</td>
														</tr>
														<tr>
															<th>Total:</th>
															<td>$265.24</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<!-- /.col -->
									</div>
									<!-- /.row -->
									<!-- this row will not appear when printing -->
									<div class="row no-print">
										<div class="col-xs-12">
											<button class="btn btn-default" onClick="window.print();"><i class="fa fa-print"></i> Print</button>
											<button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
											<button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
				<!-- Ens:  Invoice Modals -->
				
				<!-- Start:  Send Modals -->
				<div class="modal fade send" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
								<h4 class="modal-title" id="myModalLabel">Send Invoice By Email</h4>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="col-md-3 control-label text-right">To : </label>
											<div class="col-md-9">
												<p>admin@gmail.com</p>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label text-right">Subject : </label>
											<div class="col-md-9">
												<input type="email" class="form-control" />
											</div>
										</div>										
									</div>
									
									<div class="col-md-12"><hr/></div>
									
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" rows="8"></textarea>
											</div>
										</div>
										
									<div class="col-md-12 text-right">
										<div class="btn-group">
								<button class="btn btn-sm btn-success"  type="button"><i class="fa fa-paper-plane"></i> Send</button>											
								<button class="btn btn-sm btn-danger" type="button"><i class="fa fa-times"></i> Cancel</button>
												</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Ens:  Send Modals -->
				
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
