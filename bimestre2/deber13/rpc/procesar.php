<?php
$result = "";
// print_r($_POST);
if ( $_POST ) {
  $nombre = htmlentities($_POST['nombre']);
  $email = htmlentities($_POST['email']);
  $telefono = htmlentities($_POST['telefono']);
  $direccion = htmlentities( $_POST['direccion'] );
  $usuario = htmlentities( $_POST['usuario'] );
  $contrasena = md5($_POST['contrasena'] );
  $verif_contrasena = md5( $_POST['verif_contrasena'] );
  
  
  $conn =new mysqli('localhost','root','','deber_13');
  if( $conn->connect_error ) 
    $result = "No se puede establece la conexión con la BDD";
  else{
    $q_insert = "INSERT INTO registro(nombre,email,telefono,direccion,usuario,contrasena,verif_contrasena)
                  VALUES ('$nombre', '$email', '$telefono', '$direccion', '$usuario', '$contrasena', '$verif_contrasena')";

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