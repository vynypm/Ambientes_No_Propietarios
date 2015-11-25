<?php

  if($_POST)
  {
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    $conn = mysql_connect("localhost", "root", "");
     mysql_select_db("examen", $conn);

   $consulta = mysql_query("SELECT * FROM usuarios where email ='$email'", $conn); //
    if(($email=="")||($contrasena==""))
    {
    	echo htmlentities('Los campos estan vacios ingrese su email o contraseña');
    }
    else
    {
  	 $filas_email = mysql_num_rows($consulta);
        if($filas_email!=0)
        {
        	$usuarios = mysql_fetch_assoc($consulta);
          $cont= md5($contrasena);
          if($cont==$usuarios['contrasena'])
          {
        	 $_SESSION['email'] = $email;
           $_SESSION['contrasena'] = $contrasena;
          }
          else
          {
            echo htmlentities('La contraseña ingresada es incorrecta');
          }
        }
       else
       {
          echo htmlentities('Error.. Ingrese correctamente su email o contraseña');
       }
    }
  }

  if (isset( $_SESSION['email'])&&isset( $_SESSION['contrasena'])) {
    //http_redirect('inicio.php');
    require('inicio.php');
  }

  $msg = (isset($_GET['exito']) ? $_GET['exito'] : '');