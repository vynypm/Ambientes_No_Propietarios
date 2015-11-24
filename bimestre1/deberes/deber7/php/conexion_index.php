<?php

  if($_POST)
  {
    $email = $_POST['email'];
    $contra = $_POST['contra'];

    $conn = mysql_connect("localhost", "root", "");
     mysql_select_db("sistema", $conn);

   $consulta = mysql_query("SELECT * FROM usuarios where email ='$email'", $conn); //
    if(($email=="")||($contra==""))
    {
    	echo htmlentities('Los campos estan vacios ingrese su email o contraseña');
    }
    else
    {
  	 $filas_email = mysql_num_rows($consulta);
        if($filas_email!=0)
        {
        	$usuarios = mysql_fetch_assoc($consulta);
          $cont= md5($contra);
          if($cont==$usuarios['contra'])
          {
        	 $_SESSION['email'] = $email;
           $_SESSION['contra'] = $contra;
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

  if (isset( $_SESSION['email'])&&isset( $_SESSION['contra'])) {
    http_redirect('inicio.php');
  }

  $msg = (isset($_GET['exito']) ? $_GET['exito'] : '');