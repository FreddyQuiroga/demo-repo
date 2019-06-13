<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SafeTax-Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?=base_url()?>/bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?=base_url()?>/bootstrap/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<?php echo form_open('usuario/validarusuario'); ?>

<body class="bg-gradient-warning">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0 ">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block ">
                <img src="<?=base_url()?>/bootstrap/images/taxi2.png" width="480" height="540"> 
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bienvenido!</h1>
                  </div>
                  <br>
                  <form class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="txtUser" value="<?= set_value('txtuser'); ?>" aria-describedby="emailHelp" placeholder="Ingrese su nombre de Usuario...">

                    </div>


                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="txtPassword" value="<?= set_value('txtpassword'); ?>"  placeholder="Contraseña">
                  
                      <div class="LoginUsuariosError"><?= form_error('txtpassword');?></div>
      <?php
      if(isset($error)){
         echo "<p>".$error."</p>";
      }
      echo form_error('txtUser');
      ?>
      </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Recordar Contraseña</label>
                      </div>
                    </div>
                    <br>
                    <br>
                    <div class="g-recaptcha" data-sitekey="6LfXwaUUAAAAAMu0x5GV6Lpg1qBSTuvdxuRJ6kYH"></div>


                    <input class="btn btn-primary btn-user btn-block" type="submit" value="Ingresar">
                    
                    
                  </form>
                  <br>
                  <br>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Olvidaste tu contraseña?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Crear nueva cuenta!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url()?>/bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url()?>/bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=base_url()?>/bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?=base_url()?>/bootstrap/js/sb-admin-2.min.js"></script>

</body>

</html>
