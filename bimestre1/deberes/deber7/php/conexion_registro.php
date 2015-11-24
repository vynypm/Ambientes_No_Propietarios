<?php

if($_POST){
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];
  $correo = $_POST['correo'];
  $contra = md5($_POST['contra']);
  $sexo = $_POST['sexo'];
  $dia = $_POST['dia'];
  $mes = $_POST['mes'];
  $año = $_POST['año'];


  if($email !== $correo){
    echo ('Verifique que coincidan los email'); 
  }
  else
  {

    $conn =new mysqli('localhost','root','','sistema');
    if($conn-> connect_error) die ($conn-> connect_error);
    $email_repetido="SELECT email FROM usuarios WHERE email='$email'";
    $resp=$conn ->query($email_repetido);
    $rows = $resp ->num_rows;
      if ($rows > 0) {
        echo ('El email Ingresado ya existe');
      }
      else {
        $conn = new mysqli('localhost' , 'root' , '', 'sistema');
        if ($conn-> connect_error) die($conn -> connect_error);
        $fecha =$año.'/'.$mes .'/'. $dia ;
        $query = "INSERT INTO usuarios 
                        (nombre, 
                          apellido, 
                          email, 
                          correo, 
                          contra,
                          sexo,
                          fecha  
                          )
                      VALUES (
                        '$nombre',
                        '$apellido',
                        '$email',
                        '$correo',
                        '$contra',
                        '$sexo',
                        '$fecha'
                        )
                  ";
        $result = $conn ->query($query);
        if (!$result) die($conn ->error);
        require ("index.php"); //
      }
  }
}