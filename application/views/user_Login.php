<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chopra | Patient Login</title>
    <link rel="icon" href="assets/img/chopra.jpg" type="image/gif">
    <link rel="stylesheet" href="<?php echo base_url('/assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/-Login-form-Page-BS4-.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/styles.css');?>">
    <script type="text/javascript">
        function closeModal(){
            document.getElementById("GagalLogin").className = "Modal hide";
        }
        function closeModal2(){
            document.getElementById("aksesGagal").className = "Modal hide";
        }
    </script>
</head>

<body>

    <div class="container-fluid">

        <div class="row mh-100vh">
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block" style="padding:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;">
                <div class="justify-content-center align-items-center align-content-center m-auto w-lg-75 w-xl-50" style="width:204px;margin:0px 0px 0px 0px;margin-right:100px;margin-top:20px;margin-bottom:20px;margin-left:100px;">

                    <h4 class="text-center text-info font-weight-light mb-5">
                        Child Care Clinic
                    </h4>
                    
                    <form  action="<?=base_url()?>cLoginPasien/cek_login" method="post">
                        <div class="form-group">
                            <label class="text-secondary">Username Patient</label>
                            <input class="form-control" name ="username" type="text" autofocus required value="<?php if($username != null){echo $username;}?>" >
                        </div>
                        <div class="form-group">
                            <label class="text-secondary">Password Patient</label>
                            <input class="form-control" name="password" type="password" required="">
                        </div>
                            <button class="btn btn-primary mt-2" type="submit">Log In</button>
                     
                    </form>

                    <p class="mt-3 mb-0">
                        <a href="#" class="text-info small" data-toggle="modal" data-target="#modal-default">Forgot your email or password?</a>
                    </p>
                    <p class="mt-3 mb-0">
                        <a href="<?php echo base_url()?>cRegistrasiPasien" class="text-info small">Don't have account?</a>
                    </p>
                    <p class="mt-3 mb-0">
                        <a href="<?php echo base_url()?>cLandingPage" class="text-info small">Back to Home</a>
                    </p>
                </div>
            </div>

            <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-size:cover;background-position:center center;background-image:url(&quot;assets/img/c4.jpg&quot;);">
                <p class="ml-auto small text-dark mb-2">
                    <em>Chopra | Child Care Clinic&nbsp;</em><br>
                </p>
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
                <p>Please contact admin . 0876543234567&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Oke</button>
              </div>
            </div>
          </div>
        </div>
<!-- modal gagal login -->
            <?php
              if($this->session->flashdata('GagalLogin')){
            ?>
                <div class="modal show" id="GagalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title" id="myModalLabel" style="text-align: center;"><b>Informasi</b></h3>
                      </div>
                      <div class="modal-body" style="text-align: center;">
                        <h4>Maaf, login gagal !</h4>
                        <h5>Username dan password tidak sesuai.</h5>
                      </div> 
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger pull-right" onclick="closeModal()">Tutup</button>
                      </div>
                    </div>          
                  </div>
                </div>
            <?php
              }
            ?>

<!-- modal akses gagal -->
            <?php
              if($this->session->flashdata('aksesGagal')){
            ?>
                <div class="modal show" id="aksesGagal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title" id="myModalLabel" style="text-align: center;"><b>Informasi</b></h3>
                      </div>
                      <div class="modal-body" style="text-align: center;">
                        <h4>Maaf, login gagal !</h4>
                        <h5>Akun anda masih belum diaktifasi, silahkan hubungi pengelola.
                        <h5> No. Telp : <b>(0274) 549-659</b> atau email : <b>gsp@ugm.ac.id</b></h5>
                        <h5>Terimakasih</h5>
                      </div> 
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger pull-right" onclick="closeModal2()">Tutup</button>
                      </div>
                    </div>          
                  </div>
                </div>
            <?php
              }
            ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      function closeModal(){
        document.getElementById("suksesregistrasi").className = "Modal hide";
      }
    </script>
</body>

</html>