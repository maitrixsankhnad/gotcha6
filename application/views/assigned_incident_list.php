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
		
		<!--Start: page content -->
		<div class="right_col" role="main">
			<div class="">
			
				<!--Start: page title -->
				<div class="page-title">
					<div class="title_left">
						<h3>Assigned Incidents List</h3>
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
								<h2>SME Incidents List</h2>
								
								<div class="clearfix"></div>
							</div>
							<!--End: x title -->
							
							<!--Start: x Panel -->
							<div class="x_content">
								<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Title</th>
											<th>ServiceTags</th>
											<th>Description</th>
											<th>Status</th>
											<th class="col-md-2">Action</th>
										</tr>
									</thead>
									<tbody class="boxInputFull">
										<?php
                //print_r($inci);
                $status = '';
                $i=1;
                $incidentData = array();
                foreach ($sme as $smedata){
                  switch ($smedata['fld_sme_status']) {
                        case 0:
                            $status = "Pending";
                            break;
                        case 1:
                            $status = "Accepted";
                            break;
                        case 2:
                            $status = "Decline";
                            break;
                        default:
                            $status = "Pending";
                    }
                  $incidentData =get_assigned_incident_data($smedata['fld_incident_id']);
                  foreach ($incidentData as $inciListAll) {
                ?>
										<tr>
									<td><a href="<?=base_url()?>dashboard/incident_preview/<?=$inciListAll->fld_id; ?>" target="_blank">
										<?=$inciListAll->fld_inci_title;?>
										</a></td>
									<td><?php $arr = array();
                        $arr = get_incident_rel_service_tag_name($inciListAll->fld_id);
                        foreach($arr as $abc){?>
										<p> <small> <?php print_r($abc['fld_serviceName']);?> </small> </p>
										<?php } ?>
									</td>
									<td><?=substr($inciListAll->fld_summary,0,25);?></td>
									<td><?=$status?></td>
									<td><?php if($status == 'Pending'){ ?>
										<a  id="declineid<?=$i;?>" onClick="sme_decline_incident('<?="declineid".$i;?>')" data-attr="<?=$inciListAll->fld_id;?>" class="btn btn-danger btn-xs" style="cursor: pointer;"><i class="fa fa-trash-o"></i> Decline</a> <a  id="acceptid<?=$i;?>" onClick="sme_accept_incident('<?="acceptid".$i;?>')" data-attr="<?=$inciListAll->fld_id;?>"  class="btn btn-success btn-xs"><i class="fa fa-check-circle-o"></i> Accept</a>
										<?php } ?>
										<a href="<?=base_url()?>dashboard/incident_preview/<?=$inciListAll->fld_id; ?>" target="_blank" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> View</a></td>
								</tr>
								<?php } $i++;}?>
								
								
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
<script src="<?=base_url() ?>assets/js/jquery.barrating.min.js"></script>
<script src="<?=base_url() ?>assets/js/validate.min.js">"></script>
<script src="<?=base_url() ?>assets/build/js/custom.js"></script>
</body>
</html>
