<?php
  session_start();


  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
    header('location: ../../index.php');
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User</title>

    
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Inicio</a>
    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li><a href="#">Nosotros</a></li>
        <li><a href="#">Contáctenos</a></li>
        <li><a href="../../controller/cerrarSesion.php">
      Cerrar sesión
    </a></li>
      </ul>
      
      <p class="navbar-text navbar-right">Has entrado como: <a href="#" class="navbar-link"><?php echo ucfirst($_SESSION['nombre']); ?></a></p>
    </div>
    
  </div>
</nav>
   


    <center>><h1> -Módulo Usuario-</h1></center>

    Hola usuario estandar <?php echo ucfirst($_SESSION['nombre']); ?>
   




    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/operaciones.js"></script>
  </body>
</html>
