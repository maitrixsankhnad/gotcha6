<?php 
include_once('commonFunction.php');
$aid = $this->session->userdata('AID');
if(!$aid){
	redirect(base_url().'superadmin/login');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Gotcha-6</title>
<?php include('include/style.php');?>
</head>

<body class="nav-md">
<div class="container body">
  <div class="main_container"> 
    <!-- Sidebar Menu -->
    <?php include('include/admin-sidebar.php');?>
    <!-- Sidebar Menu --> 
    
    <!-- top navigation -->
    <?php include('include/admin-header.php');?>
    <!-- /top navigation --> 
    
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="row top_tiles">
          <center>
            <h1>Dashboard</h1>
          </center>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Incident Summary <small>Weekly progress</small></h2>
                <div class="filter">
<!--                  <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc"> <i class="glyphicon glyphicon-calendar fa fa-calendar"></i> <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b> </div>-->
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="col-md-9 col-sm-12 col-xs-12">
                  <div class="demo-container">
<!--                    <div id="chart_plot_02" class="demo-placeholder"></div>-->
                   <div class="upperpanel">
                    <div class="topSumm">

                        <div class="boxRportD">

                            <div class="rightBox"> <strong>
                              <?php if(!empty($total_incident)) {
                           echo $total_incident[0]->NumberOfIncident;
                             }else{
                                echo "Here is no incident.";
                             } ?> 
                                </strong> <br/>
                                <span>&nbsp;</span>
                                <p><a class="homebox" href="<?=base_url()?>dashboard/all_incident">  Total Incident</a></p>
                            </div>
                            <i class="glyphicon glyphicon-tags"></i>

                        </div>


                        <div class="boxRportD">

                            <div class="rightBox"> <strong>
                       <?php if(!empty($total_Complete_incident)) {    
                            echo $total_Complete_incident[0]->NoOfCompleteIncident; 
                        }else{
                            echo "Here is no active incident.";
                        }
                       ?>
                                </strong> <br/>
                                <span>&nbsp;</span>
                                <p><a class="homebox" href="<?=base_url()?>dashboard/all_incident">  Total Active Incident</a></p>
                            </div>
                            <i class="glyphicon glyphicon-tags"></i>
                            </a>  
                        </div>


                        <div class="boxRportD">

                            <div class="rightBox"> <strong>
                       <?php if(!empty($total_Complete_incident)) {  
                        echo $total_Complete_incident[0]->NoOfCompleteIncident;
                        }else{
                            echo "Here is no Complete incident.";
                        }?>
                                </strong> <br/>
                                <span>&nbsp;</span>
                                <p><a class="homebox" href="<?=base_url()?>dashboard/all_incident">  Total Complete Incident</a></p>
                            </div>
                            <i class="glyphicon glyphicon-tags"></i>

                        </div>

                    </div>
                    </div>
                  </div>
<!--                  <div class="tiles">
                    <div class="col-md-4 tile"> <span>Total Incident</span>
                      <h2> </h2>
                      <span class="sparkline11 graph" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                      </span> </div>
                    <div class="col-md-4 tile"> <span>Total Active Incident</span>
                      <h2></h2>
                      <span class="sparkline22 graph" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                      </span> </div>
                    <div class="col-md-4 tile"> <span>Total Complete Incident</span>
                      <h2></h2>
                      <span class="sparkline11 graph" style="height: 160px;">
                      <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                      </span> </div>
                  </div>-->
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                  <div class="inlineBlock">
                    <div class="x_title">
                      <h2>Gotcha-6 Zone </h2>
                      <div class="clearfix"></div>
                    </div>
                      <div class="x_content">
                          <?php
                          foreach($forum as $forumInfo){ ?>
                              <article class="media event"> <a class="pull-left date">
                                      <p class="month"><?=date('M',$forumInfo['post_time']);?></p>
                                      <p class="day"><?=date('d',$forumInfo['post_time']);?></p>
                                  </a>
                                  <div class="media-body"> <a target="_blank" class="title" href="<?=base_url()?>forum/viewtopic.php?f=<?=$forumInfo['forum_id']?>&t=<?=$forumInfo['topic_id']?>#p<?=$forumInfo['post_id']?>"><?=$forumInfo['post_subject']?></a>
                                      <p><?=truncate($forumInfo['post_text'],60)?></p>
                                  </div>
                              </article>
                          <?php } ?>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="x_panel">
              <div class="x_title">
                <h2>Active Incident</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <?php
                if(sizeof($inci_approve) > 0){
                    foreach ($inci_approve as $inciApprove) {
                        $date = change_dateFormat($inciApprove['fld_createdDt'],1);
                        $dateArr = explode(',',$date);?>
                        <article class="media event"> <a class="pull-left date">
                          <p class="month"><?=$dateArr[0]; ?></p>
                          <p class="day"><?=$dateArr[1]; ?></p>
                          </a>
                          <div class="media-body"> <br><a class="title" href="<?=base_url()?>superadmin/incident_preview/<?=encode($inciApprove['fld_id']); ?>"><?=$inciApprove['fld_inci_title']; ?></a>
                          </div>
                        </article>
                  <?php } }else {?>
                        <article class="media event">
                            <div class="media-body"> <br><a class="title">Here is no active incident.</a>
                            </div>
                        </article>

                  <?php } ?>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="x_panel">
              <div class="x_title">
                <h2>Complete Incident</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <?php
                  if(sizeof($inci_complete) > 0){
                      foreach ($inci_complete as $inciComplete) {
                       $date = change_dateFormat($inciComplete['fld_createdDt'],1);
                       $dateArr = explode(',',$date);?>
                          <article class="media event"> <a class="pull-left date">
                                  <p class="month"><?=$dateArr[0]; ?></p>
                                  <p class="day"><?=$dateArr[1]; ?></p>
                              </a>
                              <div class="media-body"> <br><a class="title" href="<?=base_url()?>superadmin/incident_preview/<?=$inciComplete['fld_id']; ?>"><?=$inciComplete['fld_inci_title'] ; ?></a>
                              </div>
                          </article>
                <?php } }else{ ?>
                      <article class="media event">
                          <div class="media-body"> <br><a class="title">Here is no incident to be compeleted. </a></div>
                      </article>

                <?php } ?>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="x_panel">
              <div class="x_title">
                <h2>Resources Manager</small></h2>
                <div class="clearfix"></div>
              </div>
                <ul class="list-unstyled top_profiles scroll-view">
               <?php 
               if(sizeof($inci_rm) > 0){
               foreach ($inci_rm as $inci_RM) {?>
                <li class="media event"> <a class="pull-left border-aero profile_thumb img-circle profile_img" style="background-image:url(<?=base_url()?>/uploads/profile/thumbs/<?= $inci_RM['fld_picture']?>)"> </a>

                  <div class="media-body"> <a class="title" href="#"><?= $inci_RM['fld_fname'].' '.$inci_RM['fld_mname'].' '.$inci_RM['fld_lname']; ?></a>
                    <p><strong></strong> <?= $inci_RM['fld_email']?> </p>
                   <!-- <p> <small>12 Sales Today</small> </p>-->
                  </div>
                </li>

                   <?php } }else{ ?>
                   <li class="media event"> <a class="pull-left border-aero profile_thumb"> <i class="fa fa-user aero"></i> </a>
                       <div class="media-body"> <a class="title" href="#">Here is no Resources Manager</a>
                       </div>
                   </li>
               <?php } ?>
              </ul>
                <a href="<?=base_url()?>superadmin/resource_managers" class="btn btn-sm btn-primary" type="button"><i class="fa fa-eye"></i> View More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /page content -->

    <!-- footer content -->
    <?php include('include/footer.php');?>
    <!-- /footer content -->
  </div>
</div>
<!-- / Default Scripts -->
<?php include('include/script.php');?>

<!-- Chart.js -->
<script src="<?=base_url()?>assets/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- jQuery Sparklines -->
<script src="<?=base_url()?>assets/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- Flot -->
<script src="<?=base_url()?>assets/vendors/Flot/jquery.flot.js"></script>
<script src="<?=base_url()?>assets/vendors/Flot/jquery.flot.pie.js"></script>
<script src="<?=base_url()?>assets/vendors/Flot/jquery.flot.time.js"></script>
<script src="<?=base_url()?>assets/vendors/Flot/jquery.flot.stack.js"></script>
<script src="<?=base_url()?>assets/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="<?=base_url()?>assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="<?=base_url()?>assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="<?=base_url()?>assets/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="<?=base_url()?>assets/vendors/DateJS/build/date.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?=base_url()?>assets/build/js/custom.js"></script>


</body>
</html>
