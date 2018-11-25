<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Chopra | Pasien Member</title>
  <link rel="icon" href="assets/img/chopra.jpg" type="image/gif">

   <!-- 1. Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/dist/css/AdminLTE.min.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/dist/css/skins/_all-skins.min.css'); ?>">

</head>


<body class="hold-transition skin-blue sidebar-mini">
                <?php 
                    $row = $this->db->query("SELECT * FROM admin where username='".$this->session->username."'")->row_array();
                ?>
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
                <!-- Email admin -->
                <span class="hidden-xs"><?php echo $row['name_admin']; ?></span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="<?php echo base_url('assets/img/logo1.png'); ?>" class="img-circle" alt="User Image">
                  <p>
                    <?php echo $row['name_admin']; ?>
                    
                  </p>
                </li>
                <li class="user-footer">
                  <div class="pull-right">
                      <a href="<?php echo base_url('cLoginAdmin/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
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
            <p><?php echo $row['name_admin']; ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

       <!-- sidebar menu: -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>

        <!-- Halaman Dashboard -->
        <li>
          <a href="<?=base_url()?>cAdmin">
            <i class="fa fa-dashboard"></i> 
            <span>Dashboard</span>
          </a>
        </li>

        <!-- Halaman Gold -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> 
            <span>Member</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <!-- Terdiri 3 Jenis -->
          <ul class="treeview-menu">
            <!-- Untuk dokter -->
            <li>
                <a href="<?=base_url()?>cAdmin/hal_data_dokter">
                <i class="fa fa-circle-o"></i>
                Doctor
               </a>
            </li>
            <!-- Untuk apoteker -->
            <li>
               <a href="<?=base_url()?>cAdmin/hal_data_apoteker">
                <i class="fa fa-circle-o">
              </i>
               Pharmacist
              </a>
            </li>
            <!-- Untuk pasien -->
            <li>
               <a href="<?=base_url()?>cAdmin/hal_data_pasien">
                <i class="fa fa-circle-o">
              </i>
               Patient
              </a>
            </li>
          </ul>
        </li>

 

        <!-- Halaman untuk data Schedule-->
        <li  class="active">
          <a href="<?=base_url()?>cAdmin/hal_data_transaksipasien">
            <i class="fa fa-calendar"></i> <span>Patient Transaction</span>
          </a>
        </li>

        <!-- Halaman untuk Admin Map-->
        <li>
          <a href="<?=base_url()?>cAdmin/hal_data_schedule">
            <i class="fa fa-map-marker"></i> <span>Schedule</span>
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
      Pasien Transaction
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pasien</li>
      </ol>
    </section>

    <!-- Tampilan untuk mendefinisikan button Daftar PUI -->
    <section class="content">

      <div class="row">
      <!-- Button Daftar PUI -->
        <div class="col-lg-3 col-xs-6"></div>
        <div class="col-lg-7 col-xs-6"></div>
        <div class="col-lg-2 col-xs-6">
          <a href="#">
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
                  <th>Queue</th>
                  <th>ID Number</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                     
                            <div class="btn-group">
                              <button type="button" class="btn btn-success">Accept</button>
                            
                            </div>

                      </td>
                      <td>
                        <div class="btn-group"> 
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalview"><i class="glyphicon glyphicon-eye-open"></i></button>
                        </div>
                        
                          <div class="btn-group">  
                          <a href = " "><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete"><i class="glyphicon glyphicon-trash"></i></button></a>
                    </div>
                      </td>
                    </tr>
                  
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>



     
     <!--modal view-->

<div class="modal fade" id="modalview">
    <form method="post" action=""> 
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">View</h4>
              </div>
              <div class="modal-body">
                <div class="box box-primary">
            <form role="form">
              <div class="box-body">
                <!-- <div class="form-group">
                    <label>No:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <input type="text" class="form-control" name="" disabled="disabled">
                    </div>
                </div> -->
                <div class="form-group">
                    <label>Id Number:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <input type="text" class="form-control" name="kk" disabled="disabled" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label>Name:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <input type="text" class="form-control" name="nama" disabled="disabled" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label>Date of Birth:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <input type="text" class="form-control" name="ttl" disabled="disabled" value="">
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Gender:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <input type="text" class="form-control" name="jk" disabled="disabled" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label>Mother Name:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <input type="text" class="form-control" name="jk" disabled="disabled" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label>Phone:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <input type="text" class="form-control" name="nohp" disabled="disabled" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <input type="text" class="form-control" name="email" disabled="disabled" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label>Address:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <input type="text" class="form-control" name="alamat" disabled="disabled" value="">
                    </div>
                </div>

                
              </div>
              
            </form>
          </div>
              </div>
              <div class="modal-footer">
               <button type="button" class="btn btn-primary pull-right" data-dismiss="modal">Ok</button>
              </div>
            </div>
          </div>
        </form>
        </div>

  

<!--modal delete -->
        <div class="modal fade" id="modal-delete">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
               
              </div>
              <div class="modal-body">
              <label name="">Delete Success
              </label>
              </div>
              <div class="modal-footer">
            <!-- 

             -->
                </a>
              </div>
            </div>
          </div>
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
<script src="<?php echo base_url('AdminLTE/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('AdminLTE/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('AdminLTE/dist/js/adminlte.min.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('AdminLTE/dist/js/demo.js'); ?>"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>

</html>
