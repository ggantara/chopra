<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Chopra |Booking</title>
  <link rel="icon" href="assets/img/LogoIA.png" type="image/gif">

  <!-- Mendefinisikan Link CSS, Font, Bootsstrap, dsb -->

  <!-- 1. Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- 2. Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- 3. Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- 4. Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <!-- 5. Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/dist/css/AdminLTE.min.css'); ?>">
  <!-- 6. AdminLTE Skins. Choose a skin from the css/skins -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/dist/css/skins/_all-skins.min.css'); ?>">
  <!-- 7. Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/bower_components/morris.js/morris.css'); ?>">
  <!-- 8. jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/bower_components/jvectormap/jquery-jvectormap.css'); ?>">
  <!-- 9. Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'); ?>">
  <!-- 10. Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css'); ?>">
  <!-- 11. bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>">
  <!-- 12. Google Font -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic'); ?>">

  <link rel="stylesheet" type="text/css" href="styles.css" />




</head>


<body class="hold-transition skin-blue sidebar-mini">


<!--action rubah sandi-->
        
      


<!-- Mendefinisikan Headernya -->

  <div class="wrapper">
    <header class="main-header">

      <!-- 1. Ini adalah bagian Brand -->
      <a class="logo">
        <!-- Tulisan sidebar responsive mini 50x50 pixels -->
        <span class="logo-mini"><b>Chopra</b></span>
        <!-- Tampilan Brand saat pada Desktop -->
        <span class="logo-lg"><b>Child Care Clinic </b>Chopra</span>
      </a>

      <!-- 2. Menambahkan Navbar -->
      <nav class="navbar navbar-static-top">
        <!-- Button untuk menyembunyikan Sidebar -->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
  <!-- Gambar dan Nama User serta Logout dalam bentuk dropdown -->


               

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">

              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url('assets/img/logo.png'); ?>" class="user-image" alt="User Image">
                <!-- Email pengguna -->
                <span class="hidden-xs">Sinta</span>
              </a>

              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="<?php echo base_url('assets/img/logo.png'); ?>" class="img-circle" alt="User Image">
                  <p>
                    Sinta
                    
                  </p>
                </li>
                <li class="user-footer">
                  <div class="pull-right">
                     <a href="<?php echo base_url(''); ?>" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- 3. Membuat Sidebar sebelah kiri yang mengandung logo -->
    <aside class="main-sidebar">
      <section class="sidebar">

        <!-- Sidebar panel User -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo base_url('assets/img/logo.png'); ?>" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Sinta</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        <!-- sidebar menu: -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MENU</li>

          <!-- Halaman Profile-->
          <li>
            <a href="#">
              <i class="fa fa-user"></i> 
              <span>Profile</span>
            </a>
          </li>

          <!-- Halaman Schedule -->
          <li class="active treeview">
            <a href="#">
              <i class="fa fa-calendar"></i> <span>Booking</span>
            </a>
          </li>

          <!-- Halaman Reservation History -->
          <li>
            <a href="#">
              <i class="fa fa-calendar-check-o"></i> <span>Queue</span>
            </a>
          </li>

          
        </ul>
      </section>
    </aside>

    <!-- 4. Halaman Show -->
    <div class="content-wrapper">
      <!-- Menampilkan kontent header yang mengandung Breadcrumb -->
      <section class="content-header">
        <h1>
         Booking Schedule
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Booking</li>
        </ol>
      </section>

 

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
        
    
        
             
       

  <!-- 5. Membuat Footer-->
  <footer class="main-footer">
      <div class="container">
        <strong>Copyright &copy;<?php echo date("Y"); ?> Chopra.</strong> Yogyakarta
      </div>
    </footer>
</div>


<!-- mendefinisikan Link -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('/AdminLTE/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('/AdminLTE/bower_components/jquery-ui/jquery-ui.min.js'); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('/AdminLTE/bower_components/raphael/raphael.min.js'); ?>"></script>
<script src="<?php echo base_url('/AdminLTE/bower_components/morris.js/morris.min.js'); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('/AdminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js'); ?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
<script src="<?php echo base_url('/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('/AdminLTE/bower_components/jquery-knob/dist/jquery.knob.min.js'); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('/AdminLTE/bower_components/moment/min/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('/AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('/AdminLTE/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('/AdminLTE/dist/js/adminlte.min.js'); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('/AdminLTE/dist/js/pages/dashboard.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('/AdminLTE/dist/js/demo.js'); ?>"></script>

<!-- page script mata -->
    <script src="<?=base_url()?>assets/js/validator.js"></script>
    <script>
      function show() {
          var p = document.getElementById('pwd');
          p.setAttribute('type', 'text');
      }

      function hide() {
          var p = document.getElementById('pwd');
          p.setAttribute('type', 'password');
      }

      var pwShown = 0;

      document.getElementById("eye").addEventListener("click", function () {
          if (pwShown == 0) {
              pwShown = 1;
              show();
          } else {
              pwShown = 0;
              hide();
          }
      }, false);
    </script>
</body>

</html>
