<?php

  if(isset($_POST['email']) && isset($_POST['contrasena'])){

 	  $email = $_POST['email'];
    $contrasena = md5($_POST['contrasena']);

  	$conexion = mysql_connect("localhost", "root", "");
    $base = mysql_select_db("examen2", $conexion);

    $consulta= "SELECT * from estudiante where email='$email' and contrasena='$contrasena'";
    $resultado = mysql_query($consulta, $conexion);

    if(mysql_num_rows($resultado)>0) {
        echo "Usuario correcto";
    }
    else {
        echo "Datos Incorrectos";
    }

  }
 
?>