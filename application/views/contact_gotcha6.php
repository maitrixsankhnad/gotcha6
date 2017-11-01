<?php include_once('commonFunction.php');?>
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

<!-- Page Content -->
<div class="container"> 
  
  <!-- Marketing Icons Section -->
  <div class="row col-lg-10 col-lg-offset-1">
    <div class="col-lg-12"> <br>
      <center>
        <h1 class="page-header"> About Gotcha-6 </h1>
      </center>
    </div>
    <div id="info_about" class="container col-lg-8 col-lg-offset-2">
      <p>Thank you for your interest in Gotcha-6. We are commited to providing quality service to our clients and consultants, and we strive to answer and questions or concerns in a timely manner.</p>
      <p>Questions about Services</p>
      <p>If you have any questions regarding services, please contact Gotcha-6 using the form below.</p>
      <p>Looking for projects?</p>
      <p>If you are currently a consultant, please sign up and use our form below to answer any questions.</p>
      <p>Looking for a Subject Matter Expert?</p>
      <p>If you are currently looking to fill a need, please sign up and select the service level and also use the ticketing system. Please ensure you populate the services from the catalog depending on your current need.</p>
      <div class="col-sm-8 col-sm-offset-2 contact-form">
        <form id="contact" method="post" class="form" role="form">
          <div class="row">
            <div class="col-xs-6 col-md-6 form-group">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required autofocus />
            </div>
            <div class="col-xs-6 col-md-6 form-group">
              <input class="form-control" id="phone" name="phone" placeholder="Phone" type="phone" required />
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-12 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="text" required autofocus />
            </div>
          </div>
          <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
          <br />
          <center>
            <button class="btn btn-primary" type="submit">Submit</button>
          </center>
          <br>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include('front_include/script.php');?>
</body>
</html>
