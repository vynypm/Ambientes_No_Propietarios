<?php
//echo '<pre>';
//print_r($_POST);
//echo '</pre>';
$result="";
if($_POST){
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$provincia=$_POST['#provincia'];
$canton=$_POST['#canton'];
$parroquia=$_POST['#parroquia'];
$usuario=$_POST['usuario'];
$contrasena=md5($_POST['contrasena']);


$conn = new mysqli('localhost', 'root','', 'registro');
  if( $conn->connect_error ) 
    $result = "No se puede establece la conexión con la BDD";
  else{
    $q_insert = "INSERT INTO usuario(nombre,email,telefono,direccion,provincia,canton,parroquia,usuario,contrasena)
                  VALUES ('$nombre', '$email', '$telefono', '$direccion','$provincia','$canton','$parroquia','$usuario','$contrasena')";

    $res = $conn->query($q_insert);

    if(!$res){
      $result = 'Existi&oacute; un error al insertar.' . $conn->error;
    } else {
      $result = 'Mensaje enviado con &eacute;xito.';
    }
  }
}

echo json_encode( $result );
?>