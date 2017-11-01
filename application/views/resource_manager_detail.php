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
            <h3>Resource Manager</h3>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="row panel panel-default" style="margin-top:2%;">
                  <div class="panel-heading lead">
                      <div class="row">
                          <div class="col-lg-8 col-md-8"> View Resource Manager Details</div>

                      </div>
                  </div>
                  <div class="panel-body">
                      <div class="row">
                          <div class="col-lg-12 col-md-12">

                              <div class="tab-content">
                                  <div id="Summery" class="tab-pane fade in active">

                                      <div class="table-responsive panel">
                                          <table class="table">
                                              <tbody>

                                              <tr>
                                                  <td class="text-success">Name</td>
                                                  <td><?php echo $user[0]['fld_fname'].'' .$user[0]['fld_mname'].'' .$user[0]['fld_lname'] ;?></td>
                                              </tr>
                                              <tr>
                                                  <td class="text-success">Country</td>
                                                  <td><?=$user[0]['fld_CountryName'];?></td>
                                              </tr>
                                              <tr>
                                                  <td class="text-success"> Email </td>
                                                  <td><?=$user[0]['fld_email'];?></td>
                                              </tr>
                                              <tr>
                                                  <td class="text-success"> Time Zone </td>
                                                  <td><?=$user[0]['fld_time_zone'];?></td>
                                              </tr>
                                              <tr>
                                                  <td class="text-success"> User Type</td>
                                                  <td><?=($user[0]['fld_user_type'] == 3)?'Resource Manager':'';?></td>
                                              </tr>

                                              <tr>
                                                  <td class="text-success"> Market yourself: Tell Us About You</td>
                                                  <td><?=$user[0]['fld_about'];?></td>
                                              </tr>
                                              <tr>
                                                  <td class="text-success"> Facebook Link </td>
                                                  <td><?=$user[0]['fld_facebook'];?></td>
                                              </tr>
                                              <tr>
                                                  <td class="text-success"> Linkedin Link </td>
                                                  <td><?=$user[0]['fld_linkedin'];?></td>
                                              </tr>
                                              <tr>
                                                  <td class="text-success"> Google+ Link </td>
                                                  <td><?=$user[0]['fld_google'] ;?></td>
                                              </tr>
                                              <tr>
                                                  <td class="text-success"> Paypal Payment </td>
                                                  <td><?=$user[0]['fld_paypal'];?></td>
                                              </tr>
                                              <tr>
                                                  <td class="text-success"> Stripe Payment </td>
                                                  <td><?=$user[0]['fld_stripe'];?></td>
                                              </tr>
<!--                                              <tr>-->
<!--                                                  <td class="text-success"> User Status</td>-->
<!--                                                  --><?php
//                                                  $status = '';
//                                                    switch ($user[0]->fld_status) {
//                                                      case 0:
//                                                          $status = "Complete";
//                                                          break;
//                                                      case 1:
//                                                          $status = "Pending";
//                                                          break;
//                                                      case 2:
//                                                          $status = "Approve";
//                                                          break;
//                                                      default:
//                                                          $status = "Pending";
//                                                  }
//
//
//                                                  ?>
<!--                                                  <td>--><?//=$status;?><!--</td>-->
<!--                                              </tr>-->

<!--                                              <tr>-->
<!--                                                  <td class="text-success"> Assign </td>-->
<!--                                                  <td>-->
<!--                                                      Shyama Mall Girls Inter College                                                                 </td>-->
<!--                                              </tr>-->
                                              </tbody>
                                          </table>
                                      </div>
                                  </div>


                              </div>
                          </div>
                      </div>
                      <!-- /.table-responsive -->
<!--                      <center>-->
<!--                          <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>Accept</button>-->
<!--                      </center>-->
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
</body>
</html>