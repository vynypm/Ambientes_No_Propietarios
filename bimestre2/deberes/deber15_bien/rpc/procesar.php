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
  $provincia=$_POST['provincia'];
  $canton=$_POST['canton'];
  $parroquia=$_POST['parroquia'];
  $usuario=$_POST['usuario'];
  $contrasena=md5($_POST['contrasena']);


  $conn = new mysqli('localhost', 'root','', 'registro');
  if( $conn->connect_error ) 
    $result = "No se puede establece la conexión con la BDD";
  else{
    $q_insert = "INSERT INTO usuarios(nombre,email,telefono,direccion,provincia,canton,parroquia,usuario,contrasena)
                  VALUES ('$nombre', '$email', '$telefono', '$direccion','$provincia','$canton','$parroquia','$usuario','$contrasena')";

    $res = $conn->query($q_insert);

    if(!$res){
      $result = 'Existi&oacute; un error al insertar.' . $conn->error;
    } else {
      $result = 'Datos guardados correctamente';
    }
  }
}

// $query = "SELECT * FROM usuarios";
// $result = $conn ->query($query);

// $rows= $result ->num_rows;
// $usuarios =array();
// for ($j=0; $j <$rows ; $j++) { 
//   $result->data_seek($j);
//   $usuarios[]= $result-> fetch_array(MYSQLI_ASSOC);
// }

// $act_usuario="";

// foreach ($usuarios as $usuario) {
  
//   $act_usuario.='<tr >
//     <td class="id">'.$usuario['id'].'</td>
//     <td class="editable" data-campo="nombre"> <span>'.$usuario['nombre'].'</span></td>
//     <td class="editable" data-campo="email"> <span>'.$usuario['email'].'</span></td>
//     <td class="editable" data-campo="telefono"> <span>'.$usuario['telefono'].'</span></td>
//     <td class="editable" data-campo="direccion"> <span>'.$usuario['direccion'].'</span></td>
//     <td class="editable" data-campo="usuario"> <span>'.$usuario['usuario'].' </span></td>
//     <td class="editable" data-campo="contrasena"><span>'.$usuario['contrasena'].'</span></td>
//   </tr>';
// }

// $salidaJSON=array("result" => $result,"act_usuario" => $act_usuario);

echo json_encode( $result);


?>