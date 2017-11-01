<?php include('commonFunction.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Gotcha-6</title>
<meta name="description" content="">
<meta name="author" content="">
<?php include('front_include/style.php');?>
</head>

<body class="bgCover">
<!-- Navigation -->
<?php include('front_include/header.php');?>


<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide"> 
      <!-- Indicators -->
      <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
      
      <!-- Wrapper for slides -->
      
      <div class="carousel-inner">
    <div class="item active">
          <div class="fill" style="background-image:url('<?=base_url()?>assets/img/backgroundGlobe.png');"></div>
          <div style="color:black" class="carousel-caption">
        <center >
              <h2>How long does it take a company to find an SME</h2>
              <h4>Finding a good SME is a time demanding Process</h4>
            </center>
        <h5>I. Identifying, Hiring, Training and sustaining solid Information Technology resources takes extraordinary amounts of time and money.</h5>
        <h5>II. It may take a new employee 1-2 years of lost productivity to reach the production of an existing employee</h5>
        <h5>III. One false step in the hiring process, whether by hiring the wrong resource or missing key service components for support can put a company at risk</h5>
        <br>
        <center>
              <a href="register">
          <button id="plans_darkbtn" class="btn btn-default">Sign in or Sign up Now</button>
          </a>
            </center>
      </div>
        </div>
    <div class="item">
          <div class="fill" style="background-image:url('<?=base_url()?>assets/img/backgroundPixel.jpg');"></div>
          <div class="carousel-caption">
        <center style="color:black">
              <h3 style="color:black">Most Contracts require long term commitment</h3>
            </center>
        <h5 style="color:black">I. Hardware and software contracts are typically annualized and require:</h5>
        <p style="color:black"> -Maintaining Hardware from the date of purchase - any lapse requires a "true up" prior to any support.<br>
              -Software contracts typically require specific revisions support and potentially require upgrades to ensure supportability</p>
        <h5 style="color:black">II. Companies are constantly looking for the proper support approach that is:</h5>
        <p style="color:black">-Cost Effective<br>
              -Utilizes a mix between onsite support and contracted subject matter</p>
        <br>
        <center>
              <a href="plan">
          <button id="plans_darkbtn" class="btn btn-default">Veiw Offerings</button>
          </a>
            </center>
      </div>
        </div>
    <div class="item">
          <div class="fill" style="background-image:url('<?=base_url()?>assets/img/backgroundCircuit.jpg');"></div>
          <div style="color:black" class="carousel-caption">
        <center>
              <h4>Growing Service Catalog creates the challenge of supporting IS/IT infrastructure with potentially declining or stagnant IS/IT budgets</h4>
            </center>
        <h5>I. Every year Information Systems/Technology budgets continue to face growth due to industry changes and increased service catalog support</h5>
        <p>-Smaller companies (less than $50M in revenue) spend 6.9% of their revenue on IT<br>
              -Mid-sized companies (between $50M-$2B spend 4.1% of their revenue on IT)</p>
        <h5>II. The most successful companies are more effective with their IT spending. Most top performers are conservative in their approach to IT avoiding large projects and demanding quick investment payback</h5>
        <h5>III. Acheiving more while spending less or the same but more strategically is the goal</h5>
      </div>
        </div>
    <div class="item">
          <div class="fill" style="background-image:url('<?=base_url()?>assets/img/backgroundCircuit.jpg');"></div>
          <div style="color:black" class="carousel-caption">
        <div class="col-lg-4">
              <center>
            <img src="<?=base_url()?>assets/img/building.jpg" class="img-responsive" width="30%">
          </center>
              <center>
            <h3>Companies</h3>
          </center>
              <p>-Instant access to resource managers and SMEs <br>
            -Non-committed contracts offer flexibility</p>
            </div>
        <div class="col-lg-4">
              <center>
            <img src="<?=base_url()?>assets/img/users.jpg" class="img-responsive" width="30%">
          </center>
              <center>
            <h3>SMEs</h3>
          </center>
              <p>-Access to large amount of clients <br>
            -Trusted Mediator<br>
            -Working Time Flexibility</p>
            </div>
        <div class="col-lg-4">
              <center>
            <img src="<?=base_url()?>assets/img/market.jpg" class="img-responsive" width="30%">
          </center>
              <center>
            <h3>Market</h3>
          </center>
              <p>-New Approach to aquiring workforce in IT industry <br>
            -Benefit for growing businesses</p>
            </div>
      </div>
        </div>
  </div>
      
      <!-- Controls --> 
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="icon-prev"></span> </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="icon-next"></span> </a> </header>

<!-- Page Content -->
<div id="services-info" class="container">
      <div class="row">
    <div class="col-md-4">
          <div id="on_demand_sme" class="panel panel-default">
        <div class="panel-heading">
              <center>
            <h4> Bronze Tier Service</h4>
          </center>
            </div>
        <div class="panel-body">
              <p>This is best used when the issue is not critical in nature and you have time to start and stop the engagement without impacting the users or clients. 
            </div>
      </div>
        </div>
    <div class="col-md-4">
          <div id="contracts_panel" class="panel panel-default">
        <div class="panel-heading">
              <center>
            <h4>Gold Tier Service</h4>
          </center>
            </div>
        <div class="panel-body">
              <p>If you have a little more time to fix the issue then choose the gold option.</p>
              <center>
            <a href="plan">
                <button id="plans_darkbtn" class="btn btn-default">Veiw Offerings</button>
                </a>
          </center>
            </div>
      </div>
        </div>
    <div class="col-md-4">
          <div id ="resource_sme_panel" class="panel panel-default">
        <div class="panel-heading">
              <h4>Platinum Tier Service</h4>
            </div>
        <div class="panel-body">
              <p>If your issues are critical and require immediate attention, platinum tier is for you.</p>
            </div>
      </div>
        </div>
  </div>
    </div>
<!-- /.container --> 

<?php include('front_include/script.php');?>
</body>
</html>
