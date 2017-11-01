<?php
include_once('commonFunction.php');
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
        <div class="page-title">
          <div class="title_full">
            <h3>Incident</h3>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="row panel panel-default" style="margin-top:2%;">
                  <div class="panel-heading lead">
                      <div class="row">
                          <div class="col-lg-8 col-md-8"> View Incident Details</div>

                      </div>
                  </div>
                  <div class="panel-body">
                      <form class="form-horizontal form-label-left" id="assigned_sme" novalidate>
                          <div class="row">
                              <div class="col-lg-12 col-md-12">

                                  <div class="tab-content">
                                      <div id="Summery" class="tab-pane fade in active">

                                          <div class="table-responsive panel">
                                              <table class="table">
                                                  <tbody>
                                                  <input type="hidden" name="inci_id" value="<?=$inci[0]->fld_id;?>">
                                                   <?php if(isset($rm_id[0]->fld_rm_id)){?>
                                                  	<input type="hidden" name="rm_id" value="<?php print_r($rm_id[0]->fld_rm_id);?>">
                                                  <?php } ?>
                                                  <tr>
                                                      <td class="text-success">Title</td>
                                                      <td><?=$inci[0]->fld_inci_title;?></td>
                                                  </tr>
                                                  <tr>
                                                      <td class="text-success"> Incident Summary</td>
                                                      <td><?=$inci[0]->fld_summary;?></td>
                                                  </tr>
                                                  <tr>
                                                      <td class="text-success"> Customer Name</td>
                                                      <td>
													  		<?php 
															$customer_name = get_user_name($inci[0]->fld_uid);
															echo $customer_name;
													  		?>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td class="text-success"> Email</td>
                                                      <td><?=$inci[0]->fld_email;?></td>
                                                  </tr>
                                                   <?php if(isset($rm_id[0]->fld_rm_id)){?>
                                                      <tr>
                                                          <td class="text-success"> Resources Manager </td>
                                                          <td><?php echo(get_user_name($rm_id[0]->fld_rm_id));?></td>
                                                      </tr>
                                                  <?php } ?>
                                                  <tr>
                                                      <td class="text-success"> Plan </td>
                                                      <?php
                                                      $plan = '';
                                                      switch ($inci[0]->fld_plan) {
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
                                                      <td><?=$plan;?></td>
                                                  </tr>
                                                  <tr>
                                                      <td class="text-success"> Service Level</td>
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
                                                      <td><?=$level;?></td>
                                                  </tr>
                                                  <tr>
                                                      <td class="text-success"> Incident Status</td>
                                                      <?php
                                                      $status = '';
                                                        switch ($inci[0]->fld_status) {
                                                          case 0:
                                                              $status = "Complete";
                                                              break;
                                                          case 1:
                                                              $status = "Pending";
                                                              break;
                                                          case 2:
                                                              $status = "Approve";
                                                              break;
                                                          default:
                                                              $status = "Pending";
                                                      }


                                                      ?>
                                                      <td><?=$status;?></td>
                                                  </tr>

                                                  <tr>
                                                      <td class="text-success"> Assign SME </td>
                                                      <td>

                                                          <select class="selectpicker" name="smeList[]" data-width="100%" data-live-search="true" data-actions-box="true" multiple data-selected-text-format="count > 3" required>
                                                              <?php
                                                                  foreach ($smeList as $smeListAll){
                                                                  echo '<option value="' . $smeListAll['fld_id'] . '">' . $smeListAll['fld_username'] . '</option>';
                                                                  }
                                                              ?>
                                                          </select>

                                                      </td>
                                                  </tr>
                                                  </tbody>
                                              </table>
                                          </div>
                                      </div>


                                  </div>
                              </div>
                          </div>
                          <!-- /.table-responsive -->
                          <center>
                              <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>Accept</button>
                          </center>
                      </form>
                  </div>
              </div>

          </div>
        </div>
      </div>
    </div>
    <?php include('include/footer.php'); ?>
  </div>
</div>
<?php include('include/script.php'); ?>
<script src="<?=base_url() ?>assets/build/js/custom.js"></script>
<script src="<?=base_url() ?>assets/js/validate.min.js"></script>
</body>
</html>