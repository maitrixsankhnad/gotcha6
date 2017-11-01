<?php
include_once('commonFunction.php');
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
    <div class="right_col" role="main">
      <form style="margin:0" id="selfAssesment">
        <div class="container-fluid">
          <section class="container">
            <div class="container-page">
              <!-- <a class="btn btn-primary pull-right" href="<?=base_url()?>dashboard/new_service_request"><i class="fa fa-plus" aria-hidden="true"></i> Open New Service Ticket</a>               -->
              <div class="clearfix"></div>
              <br>
              <div class="row">
                <div class="col-md-4">
                  <div class="topAssesLbl"></div>
                </div>
                <div class="col-md-4">
                  <div class="topAssesLbl"></div>
                </div>
                <div class="col-md-2 col-md-offset-2">
                  <div class="topAssesLbl text-right"></div>
                </div>
              </div>
              <div class="clearfix"></div>
              <h2>All Resource Manager List</h2>
              <br>
              <table class="table selfAssesementTbl table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>User-type</th>
                    <!-- <th>Action</th> -->
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
                    <!-- <td><a href="javascript:;" onClick="removeTRsection(this)" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a></td> -->
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              <br>
              <center>
                <!-- <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button> -->
              </center>
              <br>
              <br>
            </div>
          </section>
        </div>
      </form>
    </div>
    <?php include('include/footer.php'); ?>
  </div>
</div>
<?php include('include/script.php'); ?>
<script src="<?=base_url() ?>assets/vendors/jquery-knob/dist/jquery.knob.min.js"></script> 
<script src="<?=base_url() ?>assets/build/js/custom.js"></script> 
</body>
</html>