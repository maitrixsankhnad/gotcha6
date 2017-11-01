<?php
include_once('commonFunction.php');
$this->load->view('userchat');
$uid = $this->session->userdata('UID');
if(!$uid){
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
		<?php include('include/sidebar.php'); ?>
		<?php include('include/header.php'); ?>
		<div class="right_col" role="main">
			<div class="">
				
				<!--Start: page title -->
				<div class="page-title">
					<div class="title_left">
						<h3>Incident Update</h3>
					</div>
				</div>
				<!--End: page title -->
				
				<div class="clearfix"></div>
				<!--Start: page data -->
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="x_panel">
							<div class="x_title">
								<h2>Update Incident <small>Access to Gotch-6 Resources</small></h2>
								<div class="clearfix"></div>
							</div>
							<div class="x_content"> <br />
								<form  id="inctTicket" data-parsley-validate class="form-horizontal form-label-left" method="get">
									<!--<div class="form-group">
										<div class="col-sm-offset-3 col-sm-6">
											<div class="checkbox">
												<label>
												<input type="checkbox">
												Master Timer </label>
											</div>
										</div>
									</div>-->
                                    
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3" for="first-name">Incident Title <span class="required">*</span> </label>
										<div class="col-md-6">
											<select required class="form-control col-md-5 instList" >
                                            	<option value="">Select Incident</option>
                                                <?php foreach($inci as $inciListAll) : ?>
                                                	<option value="<?=encode($inciListAll['fld_id']);?>"><?=substr($inciListAll['fld_inci_title'],0,50);?></option>
                                                <?php endforeach;?>
                                            </select>
										
									</div>
                                   
                                   <br><br><br>
									<div class="ln_solid"></div>
									<div class="form-group">
										<div class="col-sm-4 col-sm-offset-5"> <a class="btn btn-primary" href="<?=base_url()?>dashboard">Cancel</a>											
											<button type="submit" class="btn btn-success">Ticket</button>
										</div>
									</div>
								
							</div>
                            </form>
            					</div>                
						</div>
					</div>
				</div>
				<!--End: page data -->
			</div>
		</div>
		<?php include('include/footer.php'); ?>
	</div>
</div>
<?php include('include/script.php'); ?>
<script src="<?=base_url() ?>assets/build/js/custom.js"></script>
</body>
</html>
