<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Chopra | Pasien Registration</title>
  <link rel="icon" href="assets/img/LogoIA.png" type="image/gif">
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
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/plugins/iCheck/all.css'); ?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/bower_components/select2/dist/css/select2.min.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/dist/css/skins/_all-skins.min.css'); ?>">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <script type="text/javascript">
      function closeModal(){
        document.getElementById("suksesregistrasi").className = "Modal hide";
      }
      function closeModal1(){
        document.getElementById("gagalregistrasi").className = "Modal hide";
      }
    </script>

</head>

<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

<!-- Header -->

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand"><b>Chopra</b> Child Care Clinic</a>
        </div>
      </div>
    </nav>
  </header>

<!-- Content -->

  <div class="content-wrapper">
    <div class="container">
        <div class="box">
            <div class="row">
                <div class="col-md-12">
                <div class="small-box" style="background-color: #e8c86b; margin-left: 10px; margin-top: 10px; margin-right: 10px;">
                  <div class="inner">
                    <h3>Pasien</h3>
                    <p>Registrations</p>
                  </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                  <a href="#" class="small-box-footer">
                   
                  </a>
                </div>
              </div>
            </div>

            <div class="row" style="background-color: #e8c86b; margin-left: 10px; margin-right: 10px;">
            &nbsp;
            <div class="col-md-12">
                <div class="box box-warning">
                    <div class="box-body">
                      <form method="post" action="<?php echo base_url('')?>">

                        <div class="form-group">
                            <label>ID Number Pasien:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-pencil"></i>
                                </div>
                                <input type="text" class="form-control" placeholder="KK" name="no_kk" required="" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pasien Name:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-pencil"></i>
                                </div>
                                <input type="text" class="form-control" placeholder="Pasien Name" name="nama_pasien" required="" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mother Name:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-pencil"></i>
                                </div>
                                <input type="text" class="form-control" placeholder="Mother Leader" name="nama_ibu" required="" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Date of Birth:</label>
                               <div class="input-group date">
                            <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                          </div>
                            <input min="<?php echo date('Y-m-d') ?>" type="date"  data-format="dd/MM/yyyy" class="form-control pull-right" id="datepicker" name="ttl" required>
                          </div>
                        </div>
                        <div class="form-group">
                            <label>Gender:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-pencil"></i>
                                </div>
                                <select class="form-control">
                                  <option>Female</option>
                                  <option>Male</option>
                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Address:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <textarea class="form-control" rows="3" placeholder="Addres"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Phone:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input type="text" class="form-control" placeholder="Phone" name="nohp" required="" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Username:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-pencil"></i>
                                </div>
                                <input type="text" class="form-control" placeholder="Username" name="username"  value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-pencil"></i>
                                </div>
                                <input type="password" for="pawssword-input-field" class="form-control" placeholder="Password" name="pass" required="" id="pass">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Retype Password:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-pencil"></i>
                                </div>
                                <input type="password" for="repeat-pawssword-input-field" class="form-control" placeholder="Retype Password" name="repass" required="" id="repass"><span id="message"></span>
                            </div>
                        </div>
                         <div class="form-group">
                         
                            <label>Scan Identity:</label>
                            <div class="input-group">
                              
                                <input type="file" id="exampleInputFile" name="scan">
                                <p class="help-block">Input file .pdf</p>
                            </div>
                        </div>
                        
                        <button class="btn btn-warning" type="submit" data-toggle="modal" data-target="#modal-submit">Submit</button>
                      </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
  </div>







  <!-- <div class="modal show" id="gagalregistrasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          
          <h3 class="modal-title" id="myModalLabel" style="text-align: center;"><b>Information</b></h3>
        </div>
        <div class="modal-body" style="text-align: center;">
          <img src="<?=base_url()?>assets/img/sedih.png" style="width:150px;"><br><br>
          <h4>Sorry, Your Registration Failed !</h4>
          <h5>Email already used, please use another email</h5>
        </div> 
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-right" onclick="closeModal1()">Tutup</button>
        </div>
      </div>          
    </div>
  </div> -->




<!-- Footer -->

  <footer class="main-footer">
    <div class="container">
      <strong>Copyright &copy;<?php echo date("Y"); ?> Chopra.</strong> Yogyakarta
    </div>
  </footer>
</div>




<script src="<?=base_url()?>assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?=base_url()?>assets/plugins/iCheck/icheck.min.js"></script>
<script src="<?=base_url()?>assets/js/validator.js"></script>
<script type="text/javascript">
  $('#repass').on('keyup', function () {
      if ($(this).val() == $('#pass').val()) {
          $('#message').html('password cocok').css('color', 'green');
      } else $('#message').html('password tidak cocok').css('color', 'red');
  });
</script>

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
<!-- Select2 -->
<script src="<?php echo base_url('AdminLTE/bower_components/select2/dist/js/select2.full.min.js'); ?>"></script>
<!-- InputMask -->
<script src="<?php echo base_url('AdminLTE/plugins/input-mask/jquery.inputmask.js'); ?>"></script>
<script src="<?php echo base_url('AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js'); ?>"></script>
<script src="<?php echo base_url('AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js'); ?>"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url('AdminLTE/plugins/iCheck/icheck.min.js'); ?>"></script>
</body>
</html>
