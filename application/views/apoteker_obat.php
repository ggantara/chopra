<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Chopra |Medicine</title>
  <link rel="icon" href="assets/img/chopra.jpg" type="image/gif">

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

                <?php 
                    $row = $this->db->query("SELECT * FROM apoteker where username='".$this->session->username."'")->row_array();
                ?>
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
                <img src="<?php echo base_url('assets/img/logo1.png'); ?>" class="user-image" alt="User Image">
                <!-- Email pengguna -->
                <span class="hidden-xs">Pramascist <?php echo $row['nama_apoteker']; ?></span>
              </a>

              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="<?php echo base_url('assets/img/logo1.png'); ?>" class="img-circle" alt="User Image">
                  <p>
                    Pramascist <?php echo $row['nama_apoteker']; ?>
                    
                  </p>
                </li>
                <li class="user-footer">
                  <div class="pull-right">
                     <a href="<?php echo base_url('cLoginApoteker/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
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
            <img src="<?php echo base_url('assets/img/logo1.png'); ?>" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p> Pramascist <?php echo $row['nama_apoteker']; ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        <!-- sidebar menu: -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MENU</li>

          <!-- Halaman Profile-->
          <li >
            <a href="<?=base_url()?>cApoteker">
              <i class="fa fa-user"></i> 
              <span>Profile</span>
            </a>
          </li>

          
          <li class="active">
            <a href="<?=base_url()?>cApoteker/hal_data_obat">
              <i class="fa fa-calendar"></i> <span>Medicine</span>
            </a>
          </li>
          <li>
            <a href="<?=base_url()?>cApoteker/hal_data_transaksipasien">
              <i class="fa fa-calendar"></i> <span>Transactions Patient</span>
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
          Medicine
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Medicine</li>
        </ol>
      </section>
           <!-- Tampilan untuk mendefinisikan button Daftar PUI -->
    <section class="content">

      <div class="row">
      <!-- Button Daftar PUI -->
        <div class="col-lg-3 col-xs-6">
        
         
        </div>
        <div class="col-lg-7 col-xs-6"></div>
        <div class="col-lg-2 col-xs-6">
          <a href="<?php echo base_url(''); ?>">
            <button type="button" class="btn btn-block btn-success"><i class="fa fa-file-excel-o"> &nbsp;Export</i></button>
          </a>
        </div>
      </div>
      <br>
      
      <!-- Membuat tampilan untuk table -->      
      <section class="content">
             
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <!-- /.box-header -->
            <div class="table-responsive">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Medicine</th>
                  <th>Quantity</th>
                  
                </tr>
                </thead>
                <tbody>
                  <?php
                        $i=0;
                        foreach ($obat->result() as $row) {
                          $i++;
                      ?>
                    <tr>
                      <td><?php echo $i;?></td>
                      <td><?php echo $row->nama_obat; ?></td>
                      <td><?php echo $row->jumlah; ?></td>
                      
                    </tr>
                    <?php
                      }
                    ?>
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
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
