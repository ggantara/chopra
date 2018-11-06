<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Chopra | Member Pasien</title>
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
</head>


<body class="hold-transition skin-blue sidebar-mini">

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
      

                
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url('assets/img/logo.png'); ?>" class="user-image" alt="User Image">
                <!-- Email admin -->
                <span class="hidden-xs">Admin</span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="<?php echo base_url('assets/img/logo.png'); ?>" class="img-circle" alt="User Image">
                  <p>
                    Admin
                    <small>Admin</small>
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
            <p>Admin</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

      <!-- sidebar menu: -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>

        <!-- Halaman Dashboard -->
        <li class="active">
          <a href="">
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
                <a href="#">
                <i class="fa fa-circle-o"></i>
                Doctor
               </a>
            </li>
            <!-- Untuk apoteker -->
            <li>
               <a href="#">
                <i class="fa fa-circle-o">
              </i>
               Pharmacist
              </a>
            </li>
            <!-- Untuk pasien -->
            <li>
               <a href="#">
                <i class="fa fa-circle-o">
              </i>
               Pasien
              </a>
            </li>
          </ul>
        </li>

        

        <!-- Halaman untuk data summary -->
        <li>
          <a href="#">
            <i class="fa fa-clipboard"></i> <span>Pasien Registration</span>
          </a>
        </li>

        

        <!-- Halaman untuk data Schedule-->
        <li>
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Pasien Transaction</span>
          </a>
        </li>

        <!-- Halaman untuk Admin Map-->
        <li>
          <a href="#">
            <i class="fa fa-map-marker"></i> <span>Add Schedule</span>
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
      Silver
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
          <a href="<?php echo base_url('admin_Silver/export'); ?>">
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
                  <th>Id Pasien</th>
                  <th>Name</th>
                  <th>Mother Name</th>
                  <th>Letter</th>
                  <th>Letter</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($silver as $item){ ?>
                    <tr>
                      <td><?php echo $item->kode_booking; ?></td>
                      <td><?php echo $item->nama_instansi; ?></td>
                      <td><?php echo $item->nama_ruang; ?></td>
                      <td><?php echo $item->event; ?></td>
                       <td>
                         <a href="<?php echo $item->surat?>" target="_blank"><?php echo substr($item->surat, 46)?></a>
                       </td>
                      <td>
                      <?php if($item->status_pinjam == "accept" || $item->status_pinjam == "Accept"){ ?>
                            <div class="btn-group">
                              <button type="button" class="btn btn-success">Accept</button>
                              <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#">Deny</a></li>
                                  <li><a href="#">Process</a></li>
                                </ul>
                            </div>

                          <?php }else if($item->status_pinjam == "process" || $item->status_pinjam == "Process"){ ?>
                            <div class="btn-group">
                              <button type="button" class="btn btn-success">Process</button>
                              <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#">Accept</a></li>
                                  <li><a href="#">Deny</a></li>
                                </ul>
                            </div>

                          <?php }else if($item->status_pinjam == "deny" || $item->status_pinjam == "Deny"){ ?>
                            <div class="btn-group">
                              <button type="button" class="btn btn-success">Deny</button>
                              <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#">Accept</a></li>
                                  <li><a href="#">Process</a></li>
                                </ul>
                            </div>
                          <?php } ?>
                      </td>
                      <td>
                        <div class="btn-group"> 
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalview-<?php echo $item->kode_booking; ?>"><i class="glyphicon glyphicon-eye-open"></i></button>
                        </div>
                          <!-- 
                          <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#modal-edit"><i class="glyphicon glyphicon-pencil"></i></button> -->
                          <div class="btn-group">  
                          <a href = " <?php echo 
                          base_url('Admin_Silver/hapus1/'.$item->kode_booking); ?>"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete"><i class="glyphicon glyphicon-trash"></i></button></a>
                    </div>
                      </td>
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

  <div class="modal fade" id="modal-add">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add PUI</h4>
              </div>
              <div class="modal-body">
                <div class="box box-primary">
                  <form role="form">
                  <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputName1">Name  </label>
                    <input type="text" class="form-control" placeholder="Name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email </label>
                    <input type="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputIdentity1">Identity </label>
                    <input type="text" class="form-control" placeholder="Identity number">
                  </div>
                  </div>
                  </form>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left btn-danger" data-dismiss="modal">Cancel</button>    
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Submit</button>
              </div>
            </div>
          </div>
    </div>

     <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                <p>Add Success&hellip; Password ... Username ...</p>
              </div>
              <div class="modal-footer">
               <a href="<?php echo base_url('admin_GoldPUI'); ?>">
                <button type="button" class="btn btn-default pull-left" data="modal">Oke</button>
               </a>
              </div>
            </div>
          </div>
      </div>
     <!--modal view-->
<?php foreach ($silver as $item){ ?>
<div class="modal fade" id="modalview-<?php echo $item->kode_booking; ?>">
    <form method="post" action="<?php echo base_url('admin_Silver');?>"> 
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
                    <label>Booking Code:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <input type="text" class="form-control" name="kode_booking" disabled="disabled" value="<?php echo $item->kode_booking; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Name:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <input type="text" class="form-control" name="nama_ruang" disabled="disabled" value="<?php echo $item->nama_instansi; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Room:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <input type="text" class="form-control" name="nama_ruang" disabled="disabled" value="<?php echo $item->nama_ruang; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Start Date:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="date" class="form-control" name="tgl_mulai" disabled="disabled" value="<?php echo $item->tgl_mulai; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>End Date:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="date" class="form-control" name="tgl_selesai" disabled="disabled" value="<?php echo $item->tgl_selesai; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Start Time:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <input type="time" class="form-control" name="jam_mulai" disabled="disabled" value="<?php echo $item->jam_mulai; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>End Time:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <input type="time" class="form-control" name="jam_selesai" disabled="disabled" value="<?php echo $item->jam_selesai; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Event:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <input type="text" class="form-control" name="event" disabled="disabled" value="<?php echo $item->event; ?>">
                    </div>
                </div>
                
              </div>
              <!-- <div class="box-footer">
                <button type="submit" class="btn btn-primary"> <i class="fa fa-print"> Print</i></button>
              </div> -->
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

   <?php
        }
    ?>

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
