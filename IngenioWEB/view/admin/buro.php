<?php
 //Modulo Administrador

include "../../controller/config.php";
include_once ("../../model/consulta.php");
$consulta=consultaBD();
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
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/sweetalert.css">
    <link rel="stylesheet" href="../../css/style.css">
    <!-- link rel="stylesheet" href="../../css/stylepagi.css"> -->
      <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


   
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
        <font size="3"><p class="navbar-text navbar-right">Has entrado como: <a href="#" class="navbar-link"><?php echo ucfirst($_SESSION['nombre']); ?></a></p></font>
      </div>
    </nav>
    
      
   <br>
   <br>
   <br>
   <br>   

   


    <center>><h1> -Módulo Administrador-</h1></center>


<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home"><font size="3">ESTADO DE CUENTA</a></li></font>
  <li><a data-toggle="tab" href="#menu1"> <font size="3">SALDO DE TERCEROS</a></li></font>
  <li><a data-toggle="tab" href="#menu2"><font size="3">INFORMES</a></li></font>
  <li><a data-toggle="tab" href="#mantenimiento"><font size="3">MANTENIMIENTO</a></li></font>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>Estados de cuenta</h3>
    <p>Trabajadores</p>

    <div class="row">
      <div class="col-xs-12">
       <table class="table">
            <thead>
                <tr>
                    <th>clave_cañero</th>
                    <th>zona</th>
                    <th>grupo</th>
                    <th>nombre_grupo</th>
                    <th>superficie</th>
                    <th>produccion</th>
                    <th>variedad</th>
                </tr>
            </thead>
            <tbody>
                <?php for( $i = 0; $i < count( $results->data ); $i++ ) : ?>
                        <tr>
                                <td><?php echo $results->data[$i]['clave_canero']; ?></td>
                                <td><?php echo $results->data[$i]['zona']; ?></td>
                                <td><?php echo $results->data[$i]['grupo']; ?></td>
                                <td><?php echo $results->data[$i]['nombre_grupo']; ?></td>
                                <td><?php echo $results->data[$i]['superficie']; ?></td>
                                <td><?php echo $results->data[$i]['produccion']; ?></td>
                                <td><?php echo $results->data[$i]['variedad']; ?></td>
                        </tr>
                <?php endfor; ?>
            </tbody>
        </table>
        <center>
        <?php echo $paginator->createLinks($links); ?> 
      </center>
        
      </div>
    </div>
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>---</h3>
    <p>Saldo de Terceros.</p>


        <div class="row">
          <div class="col-xs-12">
            
            <table class="table table-striped">
              <thead>
                <tr>
                  <th width="100">Clave</th>
                  <th width="100">Concepto</th>
                  <th width="100">Organización</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php 
                  while ($persona = $consulta->fetch_assoc()) {
                    ?>
                    <tr>
                    <td><?php echo $persona['clave']; ?></td>
                    <td><?php echo $persona['concepto']; ?></td>
                    <td><?php echo $persona['organizacion']; ?></td>
                  </tr>
                  <?php
                }
                 ?>
              </tbody>
            </table>
          </div>
        </div>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>
  <div id="mantenimiento" class="tab-pane fade">
    <h3>Mantenimiento</h3>
    <p>***********Modulo de mantenimiento*************</p>
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
    <footer class="container-fluid text-center>
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
        <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/operaciones.js"></script>
  </body>
</html>
