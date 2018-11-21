<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Chopra | Schedule</title>
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
          <a class="navbar-brand"><b>Child Care Clinic</b> Chopra</a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu" id="menukanan">
            <ul class="nav navbar-nav">
              <!-- Login -->
              <li class="dropdown user user-menu">
                <a href="<?php echo base_url(''); ?>">
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
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Queue Reservation Schedule</h3>
            </div>
         
<!--sebelumnya pakai modal tpkan kalau pesen login dulu dan tadi ada modal kalau belum logout-->
            

            <div class="box-body">
              <div class="table-responsive">
                <section class="content">
          <div class="row">
           <section class="content">
            <div class="box box-default">
              <div class="box-body" >
                  <div class="row" style="margin-left: 10px; margin-right: 10px;" >
                    <div class="col-md-12">
                      <center><strong><h2>Select Your Check Shedule
                      </h2></strong></center> 
                      <br>
                      <center>
                        <!-- radio -->
                <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      08.00-08.15 WIB
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                       08.15-08.30 WIB
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                      08.30-08.45 WIB
                    </label>
                  </div>
                </div>
                <div class="col-md-5">
                            
                </div>
                <div class="col-md-2">
                       <button type="submit" class="btn btn-block btn-primary" style="margin-top: 24px;">Choose</button>       
                </div>
                <div class="col-md-5">
                           
                </div>
                      
                    </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </section>

            </div>
            </div>
          </div>
      </div>
    </div>
  </div>

  <div class="modal modal-danger fade" id="modal-login">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Information</h4>
        </div>
        <div class="modal-body">
          <p>You are not loged!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">OK</button>
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
