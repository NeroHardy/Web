<?php

    require_once('conexion.php');


  class Usuario extends Conexion
  {

    public function login($user, $clave)
    {
   
      parent::conectar();
      $user  = parent::salvar($user);
      $clave = parent::salvar($clave);

  
      $consulta = 'select id, nombre, cargo from usuarios where email="'.$user.'" and clave= "'.$clave.'"';
  
      $verificar_usuario = parent::verificarRegistros($consulta);

  
      if($verificar_usuario > 0){

  
        $user = parent::consultaArreglo($consulta);

  
        session_start();

        $_SESSION['id']     = $user['id'];
        $_SESSION['nombre'] = $user['nombre'];
        $_SESSION['cargo']  = $user['cargo'];
        if($_SESSION['cargo'] == 1){
          echo 'view/admin/index.php';
        }else if($_SESSION['cargo'] == 2){
          echo 'view/user/index.php';
        }




      }else{
        echo 'error_3';
      }


      parent::cerrar();
    }

    public function registroUsuario($name, $email, $clave)
    {
      parent::conectar();

      $name  = parent::filtrar($name);
      $email = parent::filtrar($email);
      $clave = parent::filtrar($clave);


      $verificarCorreo = parent::verificarRegistros('select id from usuarios2 where email="'.$email.'" ');


      if($verificarCorreo > 0){
        echo 'error_3';
      }else{

        parent::query('insert into usuarios2(nombre, email, clave, cargo) values("'.$name.'", "'.$email.'", MD5("'.$clave.'"), 2)');

        session_start();

        $_SESSION['nombre'] = $name;
        $_SESSION['cargo']  = 2;

        echo 'view/user/index.php';

      }

      parent::cerrar();
    }

  }


?>
