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

            <!--Start: page content -->
            <div class="right_col" role="main">
                <div class=""> 

                    <!--Start: page title -->
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Payment History</h3>
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
                                    <?php
                                    $userData = userInfo($invoice[0]['fld_uid']);
                                    $incidentData = get_assigned_incident_data($invoice[0]['fld_incident_id']);
                                    ?> 
                                    <h2>Invoice: <?= str_pad($invoice[0]['fld_incident_id'], 10, 0, STR_PAD_LEFT) ?></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <!--End: x title --> 

                                <!--Start: x Panel -->
                                <div class="x_content">
                                    <section class="content invoice"> 
                                        <!-- title row -->
                                        <div class="row">
                                            <div class="col-xs-12 invoice-header">
                                                <h1> <img width="200px" src="<?= base_url('assets/images/logo.png') ?>" /> <small class="pull-right">Payment Date: <?= date('dS M Y', strtotime($invoice[0]['fld_createdDt'])) ?></small> </h1>
                                            </div>
                                            <!-- /.col --> 
                                        </div>
                                        <!-- info row -->
                                        <div class="row invoice-info">
                                            <div class="col-sm-4 invoice-col"> To
                                                <address>
                                                    <strong><?= $userData[0]['fld_fname'] ?>
                                                    <?= $userData[0]['fld_mname'] ?>
                                                        <?= $userData[0]['fld_lname']; ?>
                                                    </strong> <br>

                                                    Email: <?= $userData[0]['fld_email']; ?>

                                                </address>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-4 invoice-col"> From
                                                <address>
                                                    <strong>Admin</strong> <br>
                                                <?php
                                                $adminAddress = getDefault();
                                                $countryData = getCountryName($adminAddress[0]['fld_country']);

                                                if (!empty($adminAddress)) {
                                                    ?> 
                                                        <?= $adminAddress[0]['fld_address1']; ?> <br>
                                                        <?= $adminAddress[0]['fld_address2']; ?><br>
                                                        <?= $adminAddress[0]['fld_city']; ?>  <?= $countryData[0]['fld_CountryName'] ?>  <?= $adminAddress[0]['fld_zip']; ?><br>
                                                        Phone: <?= $adminAddress[0]['fld_phone']; ?><br>
                                                        Email: <?= $adminAddress[0]['fld_email']; ?>
                                                <?php } ?>
                                                </address>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-4 invoice-col"> <b>Invoice : <?= str_pad($invoice[0]['fld_incident_id'], 10, 0, STR_PAD_LEFT) ?></b> <br>
                                                <br>
                                                <b>Payment ID:</b> <?= $invoice[0]['fld_payment_id'] ?><br>
                                                <b>Payment Status:</b> <?= $invoice[0]['fld_payment_status'] ?> <br>
                                                <!--                      <b>Account:</b> 968-34567 -->
                                            </div>
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
                                                            <th>Job</th>
                                                            <th>Plan</th>
                                                            <th style="width: 59%">Description</th>
                                                            <th>Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td><?= $incidentData[0]->fld_inci_title; ?></td>
                                                            <td><?= $incidentData[0]->fld_plan_name; ?> </td>
                                                            <td><?= truncate($incidentData[0]->fld_summary, 100); ?> </td>
                                                            <td><?= $invoice[0]['fld_total'] ?> <small><?= $invoice[0]['fld_currency'] ?></small></td>
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
                                                <img src="<?= base_url() ?>assets/images/visa.png" alt="Visa"> <img src="<?= base_url() ?>assets/images/mastercard.png" alt="Mastercard"> <img src="<?= base_url() ?>assets/images/american-express.png" alt="American Express"> <img src="<?= base_url() ?>assets/images/paypal.png" alt="Paypal">
                                                <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;"><?= $invoice[0]['fld_description'] ?> </p>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-xs-6">
                        <!--                      <p class="lead">Amount Due 2/22/2014</p>-->
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>

<!--                            <tr>
                              <th>Tax (9.3%)</th>
                              <td>$0.00</td>
                            </tr>
                            <tr>
                              <th>Shipping:</th>
                              <td>$0.00</td>
                            </tr>-->
                                                            <tr>
                                                                <th>Total:</th>
                                                                <td><?= $invoice[0]['fld_total'] ?> <small><?= $invoice[0]['fld_currency'] ?></small></td>
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
                                              <!--<button class="btn btn-default" onClick="window.print();"><i class="fa fa-print"></i> Print</button>-->
                        <!--                      <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>-->
                                                <button class="btn btn-primary pull-right" onClick="window.print();" style="margin-right: 5px;"><i class="fa fa-print"></i> Print Invoice</button>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!--End: x Panel --> 
                            </div>
                        </div>
                    </div>
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
