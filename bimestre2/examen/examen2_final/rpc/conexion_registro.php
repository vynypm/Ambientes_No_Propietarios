<?php

  $result="";
  if($_POST) {

    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $contrasena = md5($_POST['contrasena']);


    $conn = new mysqli('localhost', 'root','', 'examen2');
    
    if( $conn->connect_error ) { 
      $result = "No se puede establece la conexión con la BDD";
    }
    else {
      $q_insert = "INSERT INTO estudiante(nombres,apellidos,email,contrasena)
                    VALUES ('$nombres','$apellidos','$email','$contrasena')";                  
      $res = $conn->query($q_insert);

      if(!$res) {
        $result = 'Existi&oacute; un error al insertar.'. $conn->error;
      } 
      else {
        $result = 'Datos guardados correctamente';
      }
    }
  }

  echo json_encode( $result);


?>
