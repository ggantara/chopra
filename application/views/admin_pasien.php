<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Chopra | Patient Member</title>
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
        <li>
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
      Patient
      </h1>

<!-- notif  -->
      <section class="content-header">
          <div>
            <?php
              if($this->session->flashdata('sukseskatasandiUbah')){
            ?>
                <div class="alert alert-success fade in">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  New Password :   <strong style="font-size:18px;color:black;"><?php echo $sandi; ?></strong> 
                </div>  
            <?php
              }else if($this->session->flashdata('berhasilHapusPeminjam')){
            ?>
            <div class="alert alert-success fade in">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                   <strong>Successfully delete data !</strong>
                </div>
            <?php
              }else if($this->session->flashdata('berhasil')){
            ?>
                <div class="alert alert-success fade in">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  Change data <strong>Success !</strong>
                </div>
            <?php 
              }else if($this->session->flashdata('tidakBerhasil')){
            ?>
                <div class="alert alert-danger fade in">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  Change data <strong>Failed !</strong>
                </div>
            <?php
              }else if($this->session->flashdata('IdPeminjamAda')){
            ?>
                <div class="alert alert-danger fade in">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 Change data <strong>Failed !</strong> Id number already exists
                </div>
            
             <?php
              }else if($this->session->flashdata('namaAdaUbah')){
            ?>
                <div class="alert alert-danger fade in">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  Change data <strong>Failed !</strong> Username already exists
                </div>

              <?php
              }
            ?>  
          </div>
        </section>


      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Patient Member</li>
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
                  <th>No</th>
                  <th>ID Number</th>
                  <th>Name</th>
                  <th>Gender</th>
                  <th>Date of Birth</th>
                  <th>Letter</th>
                  <!-- <th>Status</th> -->
                  <th>Change Password</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 <?php
                        $i=0;
                        foreach ($pasien->result() as $row) {
                          $i++;
                      ?>
                    <tr>
                      <td><?php echo $i;?></td>
                      <td><?php echo $row->id_pasien; ?></td>
                      <td><?php echo $row->nama_pasien; ?></td>
                      <td><?php echo $row->jk; ?></td>
                      <td><?php echo $row->tgl_lahir; ?></td>
                       <td>
                         <a href="#" target="_blank"></a>
                       </td>
                      <!-- <td>
                     
                            <div class="btn-group">
                              <button type="button" class="btn btn-success">Accept</button>
                              
            
                            </div>

                          

                      </td> -->
                        <td>
                         <div class="btn-group">
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-<?php echo $row->id_pasien; ?>" >Change</button>
                        </div>
                      </td>
                      <td>
                        <div class="btn-group"> 
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModalDetail1<?php echo $row->id_pasien?>"><i class="glyphicon glyphicon-eye-open"></i></button>
                        </div>
                        <div class="btn-group"> 
                         <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#myModal2<?php echo $row->id_pasien?>"><i class="glyphicon glyphicon-pencil"></i></button>
                       </div>
                          
                        
                          <div class="btn-group">  
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?php echo $row->id_pasien?>"><i class="glyphicon glyphicon-trash"></i></button>
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


<!--modal change pass user-->
 <?php
      foreach ($pasien->result() as $row) {
  ?>
  <div class="modal modal-default fade" id="modal-<?php echo $row->id_pasien; ?>" >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  
               
              </div>
              <div class="modal-body">
              <form method="post" action="<?=base_url()?>cAdmin/ubahKataSandiPasien" data-toggle="validator">
              <input type="hidden" name="username" value="<?php echo $row->username?>">
              <input type="hidden" name="id_pasien" value="<?php echo $row->id_pasien?>">
                    <center><p>Are you sure to change password from Patient <?php echo $row->nama_pasien?></p></center>
             
              <div class="modal-footer">
               
                <button type="submit" class="btn btn-success">OK</button>
              
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
         <?php
        }
      ?>

     
     
  
<!-- modal detail -->
      <?php
        foreach ($pasien->result() as $row) {
      ?>
        <div class="modal fade" id="myModalDetail1<?php echo $row->id_pasien?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h4 class="modal-title" id="myModalLabel">Detail Data Patient <?php echo $row->nama_pasien;?></h4></center>
              </div>
              <div class="modal-body">
                <div class="col-xs-12">
                <div class="box">
                   <table class="table">
                    <tr>
                      <td class="col-xs-4">Id Number</td>
                      <td class="col-xs-8"><?php echo $row->id_pasien;?></td>
                    </tr>
                    <tr>
                      <td>Patient Name</td>
                      <td><?php echo $row->nama_pasien;?></td>
                    </tr>
                    <tr>
                      <td>Username</td>
                      <td><?php echo $row->username;?></td>
                    </tr>
                    <tr>
                      <td>Date of Birth</td>
                      <td><?php echo $row->tgl_lahir;?></td>
                    </tr>
                    <tr>
                      <td>Gender</td>
                      <td><?php echo $row->jk;?></td>
                    </tr>
                    <tr>
                      <td>Mother Name</td>
                      <td><?php echo $row->nama_ibu;?></td>
                    </tr>
                    <tr>
                      <td>Address</td>
                      <td><?php echo $row->alamat;?></td>
                    </tr>
                    <tr>
                      <td>Phone</td>
                      <td><?php echo $row->no_hp;?></td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td><?php echo $row->email;?></td>
                    </tr>
                  </table>
              </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
              </div>
            </div>          
          </div>
        </div>
        </div>
      <?php
        }
      ?>
 <!--modal hapus data-->
      <?php
        foreach ($pasien->result() as $row) {
      ?>
        <div class="modal fade" id="hapus<?php echo $row->id_pasien?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h4 class="modal-title" id="myModalLabel">Warning !</h4></center>
              </div>
              <div class="modal-body">
                  <form method="post" action="<?=base_url()?>cAdmin/hapusPasien" data-toggle="validator">
                    <input type="hidden" name="id_pasien" value="<?php echo $row->id_pasien?>">
                    <center><p>Are you sure delete data Patient <?php echo $row->nama_pasien;?> ?</p></center>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Yes</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                  </form>
            </div>          
          </div>
        </div>
        </div>
      <?php
        }
      ?>

      <!-- modal ubah data -->
      <?php
        $i=0;
        foreach ($pasien->result() as $row) {
        $i++;
      ?>
        
        <div class="modal fade" id="myModal2<?php echo $row->id_pasien?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h4 class="modal-title" id="myModalLabel">Change Data Patient <?php echo $row->nama_pasien;?></h4></center>
              </div>
              <div class="modal-body">
                <form method="post" action="<?=base_url()?>cAdmin/ubahDataPasien" data-toggle="validator">
                  <input type="hidden" name="idAwal" value="<?php echo $row->id_pasien?>">
                  <input type="hidden" name="nama_pengguna_awal" value="<?php echo $row->username;?>">
                  <div class="form-group">
                    <label>Id Number</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-credit-card"></i>
                      </div>
                       <input type="number" class="form-control" value="<?php echo $row->id_pasien?>" name="id_pasien" placeholder="Example : 3210987689098765" required autofocus>
                      </div>
                  </div><!-- /.form-group -->
                  <div class="form-group">
                    <label>Name</label>
                     <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-font"></i>
                      </div>
                    <input type="text" class="form-control" value="<?php echo $row->nama_pasien?>" name="nama_pasien" placeholder="Name" required>
                    </div>
                  </div><!-- /.form-group -->
                  <div class="form-group">
                    <label>Username</label>
                     <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                      </div>
                    <input type="text" class="form-control" value="<?php echo $row->username?>" name="username" placeholder="Username" required>
                    </div>
                  </div><!-- /.form-group -->
                  <div class="form-group">
                    <label>Date of Birth</label>
                     <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                      </div>
                    <input type="text" class="form-control" value="<?php echo $row->tgl_lahir?>" name="tgl_lahir" placeholder="Date of Birth" required>
                    </div>
                  </div><!-- /.form-group -->
                  <div class="form-group">
                    <label>Gender</label>
                     <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                      </div>
                    <select class="form-control" name="jk">
                                  <option>Female</option>
                                  <option>Male</option>
                    
                      </select>
                    </div>
                  </div><!-- /.form-group -->
                  <div class="form-group">
                    <label>Mother Name</label>
                     <div class="input-group">
                      <div class="input-group-addon">
                        <i class="glyphicon glyphicon-font"></i>
                      </div>
                    <input type="text" class="form-control" value="<?php echo $row->nama_ibu?>" name="nama_ibu" placeholder="Mother Name" required>
                    </div>
                  </div><!-- /.form-group -->
                  <div class="form-group">
                    <label>Address</label>
                     <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-home"></i>
                      </div>
                    <input type="text" class="form-control" value="<?php echo $row->alamat?>" name="alamat" placeholder="Address" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Phone</label>
                     <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                    <input type="number" data-maxlength="12" class="form-control" value="<?php echo $row->no_hp?>" name="no_hp" placeholder="Example : 081188880000" required>
                    </div>
                  </div><!-- /.form-group -->
                  <div class="form-group">
                    <label>Email</label>
                     <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-envelope-o"></i>
                      </div>
                    <input type="email" class="form-control" value="<?php echo $row->email?>" name="email" placeholder="Email" required>
                    </div>
                  </div><!-- /.form-group -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Change</button>
                  </div>         
                </form>
              </div>          
            </div>
          </div>
        </div>
        
      <?php
        }
      ?>



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
