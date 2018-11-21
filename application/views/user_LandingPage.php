<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Chopra | Landing Page</title>
  <link rel="icon" href="assets/img/chopra.jpg" type="image/gif">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/dist/css/AdminLTE.min.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/dist/css/skins/_all-skins.min.css'); ?>">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

<!-- Header -->

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand"><b>Chopra</b> Child Care Clinic</a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu" id="menukanan">
            <ul class="nav navbar-nav">
              <!-- Login -->
              <li class="dropdown user user-menu">
                <a href="<?php echo base_url() ?>cLoginPasien">
                  <i class="glyphicon glyphicon-log-in"></i>
                  <span class="hidden-xs">Login</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>

<!-- Content -->
  <div class="content-wrapper">
    <div class="container"><br>
      <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
              <li><a href="#queue" data-toggle="tab">Queue</a></li>
              
            </ul>

            <div class="tab-content">

              <div class="active tab-pane" id="home" >
                <div class="row">
                  <div class="row" style="margin-left: 10px; margin-right: 10px;">
                  <center><em><h1>Chopra System</h1></em>
                  <p><b>Child Care Clinic</b></p></center><br>
                  <center>
                  <div class="box-body">
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                  </ol>
                  <div class="carousel-inner">
                  <div class="item active">
                    <img class="img-responsive" alt="First slide" src="assets/img/c6.jpg">
                  </div>
                  <div class="item">
                       <img class="img-responsive" alt="Second slide" src="assets/img/c6.jpg">
                  </div>
                  <div class="item">
                     <img class="img-responsive" alt="Third slide" src="assets/img/c6.jpg"> 
                  </div>
                  </div>
                  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="fa fa-angle-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="fa fa-angle-right"></span>
                  </a>
                  </div>
                  </div>
                  </center>
                  </div>

                  <center>
                    <a href="<?php echo base_url(''); ?>">
                    <button type="button" class="btn btn-block btn-primary btn-lg" style="width: auto;"><i class="fa fa-calendar"> Queue Reservation Schedule</i></button>
                    </a>
                  </center>
                  
                  <center><h5><a href="" data-toggle="modal" data-target="#modal-rule"><u>Show Rule of Reservation</u></a></h5></center>
                </div>
              </div>

              <div class="modal modal-info fade" id="modal-rule">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Rule of Reservation</h4>
                    </div>
                    <div class="modal-body">
                      <p>1. Click button "Room Reservation Schedule" to show schedule room used.</p>
                      <p>2. Click button booking in page "Room Reservation Shedule".</p>
                      <p>3. You can't do procedure reservation before you login inthis system. If you don't have account, you can sign up your account.</p>
                      <p>4. To sign up your account, we have 3 category user. You can sign up only 1 category you must choice. The rule of categories will be declare in there.</p>
                    </div>
                  </div>
                </div>
              </div>
              

                <div class="active tab-pane" id="queue">
                    <div class="row" id="starts" style="margin-left: 10px; margin-right: 10px;">
                     <center>
                          <div class="box-body">
                            <p> Queue Now </p>
                           <font size="7">10</font>
                          </div>
                        </center>
                    </div>
              </div>


            

            </div>
          </div>
        </div>
    </div>
  </div>

<!-- Footer -->

  <footer class="main-footer">
    <div class="container">
      <strong>Copyright &copy;<?php echo date("Y"); ?> Chopra.</strong> Yogyakarta
    </div>
  </footer>
</div>

<!-- jQuery 3 -->
<script src="<?php echo base_url('AdminLTE/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('AdminLTE/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('AdminLTE/dist/js/adminlte.min.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('AdminLTE/dist/js/demo.js'); ?>"></script>
</body>
</html>
