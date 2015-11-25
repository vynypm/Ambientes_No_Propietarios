<?php

if($_POST){
  $email = $_POST['email'];
  $contrasena = md5($_POST['contrasena']);
  $verif_contrasena = md5($_POST['verif_contrasena']);

  if($email == "" || $contrasena == "" || $verif_contrasena == ""){
    echo ('Ingrese sus datos por favor'); 
  }
  else
  {
        $conn = new mysqli('localhost' , 'root' , '', 'examen');
        if ($conn-> connect_error) die($conn -> connect_error);
        $query = "INSERT INTO usuarios 
                        (email, 
                          contrasena, 
                          verif_contrasena 
                          )
                      VALUES (
                        '$email',
                        '$contrasena',
                        '$verif_contrasena'
                        )
                  ";
        $result = $conn ->query($query);
        if (!$result) die($conn ->error);
        //require("index.php");
        http_redirect('index.php');
        //http_redirect('index.php?exito=' . urlencode('Datos guardados con exito'));
  }
}
?>