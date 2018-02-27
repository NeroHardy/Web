<?php


  session_start();

  if(isset($_SESSION['id'])){
    header('location: controller/redirec.php');
  }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ingenio San José de Abajo</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="stylesheet" href="css/style.css">
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/small-business.css" rel="stylesheet">
  </head>

  <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
      <div class="container">
    
        
        <a class="navbar-brand" href="#"><font size="5">Ingenio San José de Abajo S.A de C.V</font></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
             
            <li class="nav-item">
              <a class="nav-link" href="index.php"><font size="3" color="white">Regresar</a></font>
            </li>
          </ul>
        </div>
      </div>
    </nav>

   <br>
    
    <br>
     <br>
    
    <br>
    <br>
    <br>
    <br>
    <br>
  <!-- Formulario Login -->

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
          <div class="spacing-1"></div>

          <fieldset>

            <legend class="center"><font size="5">Inicia Sesión</legend></font>

            <label class="sr-only" for="user">Usuario</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-user"></i></div>
              <input type="text" class="form-control" id="user" placeholder="Ingresa tu usuario">
            </div>

            <div class="spacing-2"></div>

            <label class="sr-only" for="clave">Contraseña</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-lock"></i></div>
              <input type="password" autocomplete="off" class="form-control" id="clave" placeholder="Ingresa tu usuario">
            </div>

            <div class="row" id="load" hidden="hidden">
              <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                <img src="img/load.gif" width="100%" alt="">
              </div>
              <div class="col-xs-12 center text-accent">
                <span>Validando información...</span>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-8 col-xs-offset-2">
                <div class="spacing-2"></div>
                <button type="button" class="btn btn-primary btn-block" name="button" id="login">Iniciar sesion</button>
              </div>
            </div>


            <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    

            <section class="text-accent center">
              <div class="spacing-2"></div>
              
              <p>
                Eres trabajador y No tienes una cuenta? <a href="registro.php"> Registrate!</a>
              </p>
            </section>

          </fieldset>
        </div>
      </div>
    </div>


    <br>
    <br>
    <br>
    
    <br>
    <br>
    <!-- / Final Formulario login -->
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">D. R. © 2006 - 2018.
Ingenio San José de Abajo es una empresa de Grupo Perno.</p>
      </div>
      <!-- /.container -->
    </footer>

  

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/operaciones.js"></script>
        <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
