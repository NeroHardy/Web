<?php
 //Modulo Administrador
  session_start();


  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){
    
    header('location: ../../index.php');
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ingenio San José de Abajo</title>

    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/sweetalert.css">
    <link rel="stylesheet" href="../../css/style.css">
      <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/small-business.css" rel="stylesheet">
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
              <a class="nav-link" href="../../controller/cerrarSesion.php"><font size="3" color="white">Cerrar Sesión</a></font>
            </li>
          </ul>
        </div>
        <font size="3"><p class="navbar-text navbar-right">Has entrado como: <a href="#" class="navbar-link"><?php echo ucfirst($_SESSION['nombre']); ?></a></p></font>
      </div>
    </nav>
    
      
   <br>
   <br>
   <br>
   <br>   
 
   


    <center>><h1> -Módulo Administrador-</h1></center>


<div class="col-md-4 mb-4">
          <div class="card h-100">
             
            <div class="card-body">
              <h2 class="card-title">Gestionar Usuarios</h2>
               <img class="card-img" src="../../img/usuario.png" height="250" width="250" alt="Usuarios"> 
              <p class="card-text"></p>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-primary btn-lg">Entrar a Usuarios</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
             
            <div class="card-body">
              <h2 class="card-title">Cartera de Trabajadores</h2>
             
                <img class="card-img" src="../../img/trabajadores.png" height="250" width="250" alt="Trabajadores"> 
              <p class="card-text"></p>
            </div>
            <div class="card-footer">
              <a href="buro.php"><button type="button" class="btn btn-primary btn-lg">Entrar a Trabajadores</button></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
             
            <div class="card-body">
              <h2 class="card-title">Informes</h2>
              <p class="card-text">
                <img class="card-img" src="../../img/informes.png" height="250" width="250" alt="Card image cap"></p>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-primary btn-lg">Entrar a Informes</button>
            </div>
          </div>
        </div>

        <br>
        <br>
        <br>
        <br>

<div class="card text-white bg-secondary my-4 text-center">
        <div class="card-body">
          <p class="text-white m-0"></p>
        </div>
      </div>
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
    <script src="js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/operaciones.js"></script>
  </body>
</html>
