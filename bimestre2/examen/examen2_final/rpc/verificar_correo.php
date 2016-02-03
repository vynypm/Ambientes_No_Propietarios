<?php

  if($_POST){

  	$email=$_POST['email'];
  	
  	$conexion = mysql_connect("localhost", "root", "");
    mysql_select_db("examen2", $conexion);

    //$conexion = new mysqli('localhost', 'root','', 'examen2');

    $consulta= "SELECT * from estudiante where email='$email'";
    $resultado = mysql_query($consulta, $conexion);
       
    $numero_filas= mysql_num_rows($resultado);
    if($numero_filas>0){
      echo "false";
    }
    else{
      echo "true";
    }
  }
      
?>