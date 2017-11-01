<div id="preloader">
  <div class="spinner">
    <div class="bounce1"></div>
    <div class="bounce2"></div>
    <div class="bounce3"></div>
  </div>
</div>
<div class="container">
  <nav id="landing_nav" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <li style="list-style-type: none;"> <a href="./"><img src="<?=base_url()?>assets/images/<?=$defaultSetting[0]['fld_logo']?>" height="50"></a> </li>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li> <a href="<?=base_url()?>about">Gotcha-6</a> </li>
              <li> <a href="<?=base_url()?>services">Services</a> </li>
              <li> <a href="<?=base_url()?>plan">Plans</a> </li>
              <li> <a href="<?=base_url()?>contract">Contract</a> </li>
            </ul>
          </li>
          <li> <a href="<?=base_url()?>chat">Chat</a> </li>
          <?php if(isset($_SESSION['UID'])): ?>
          <li> <a href="<?=base_url()?>dashboard">Dashboard</a> </li>
          <?php endif; ?>
          <li> <a href="<?=base_url()?>contact">Contact</a> </li>
          <?php if(isset($_SESSION['UID'])): ?>
          <li> <a href="<?=base_url()?>process/logout">Log Out</a> </li>
          <?php else : ?>
          <li> <a href="<?=base_url()?>login">Login</a> </li>
          <?php endif; ?>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container --> 
  </nav>
</div>
