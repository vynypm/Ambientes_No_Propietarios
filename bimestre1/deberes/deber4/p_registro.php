<?php

if($_POST){
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];
  $correo = $_POST['correo'];
  $contraseña = md5($_POST['contraseña']);
  $sexo = $_POST['sexo'];
  $fecha = $_POST['fecha'];

  if($email !== $correo){
    echo htmlentities('Las direcciones electronicas no coinciden');
  }
  $conn = new mysqli('localhost' , 'root' , '', 'sistema');
  if ($conn->connect_error) die($conn ->connect_error);
  $query = "INSERT INTO usuario 
                  (nombre, 
                    apellido, 
                    email, 
                    correo, 
                    contraseña, 
                    sexo, 
                    fecha)
                VALUES (
                  '$nombre',
                  '$apellido',
                  '$email',
                  '$correo',
                  '$contraseña',
                  $sexo,
                  $fecha
                  )
  ";
  $result = $conn ->query($query);
  if (!$result) die($conn ->error);
}