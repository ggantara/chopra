<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chopra | Admin Login</title>
    <link rel="icon" href="assets/img/chopra.jpg" type="image/gif">
    <link rel="stylesheet" href="<?php echo base_url('/assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/-Login-form-Page-BS4-.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/styles.css');?>">
    <script type="text/javascript">
        function closeModal(){
            document.getElementById("GagalLogin").className = "Modal hide";
        }
    </script>
</head>

<body>

           
    <div class="container-fluid">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block" style="padding:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;">
                <div class="justify-content-center align-items-center align-content-center m-auto w-lg-75 w-xl-50" style="width:204px;margin:0px 0px 0px 0px;margin-right:100px;margin-top:20px;margin-bottom:20px;margin-left:100px;">
                    <h4 class="text-center text-info font-weight-light mb-5">Child Care Clinic</h4>
                    <form method="post" action="<?=base_url('cLoginAdmin/verify');?>" method="post">
                        <div class="form-group"><label class="text-secondary">Username Admin</label><input class="form-control" name ="username" type="text" required ="" ></div>
                        <div class="form-group"><label class="text-secondary">Password Admin</label><input class="form-control" name="password" type="password" required=""></div><button class="btn btn-info mt-2" type="submit">Log In</button>
                        <?php
                            if($this->session->flashdata('error')){
                                echo "<br><p><font color='#FF0000'><b><small>Username or password is wrong!</small></b></font></p>";
                            }
                        ?>
                         
                    </form>
                    <p class="mt-3 mb-0">
                        <a href="<?php echo base_url()?>cLandingPage" class="text-info small">Back to Home</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-size:cover;background-position:center center;background-image:url(&quot;assets/img/c4.jpg&quot;);">
                <p class="ml-auto small text-dark mb-2"><em>Chopra | Child Care Clinic&nbsp;</em><br></p>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>