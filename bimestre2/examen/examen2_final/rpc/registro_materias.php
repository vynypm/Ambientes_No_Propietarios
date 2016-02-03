
<?
$result="";
  if($_POST) {

    $mats = $_POST['mats'];

    $conn = new mysqli('localhost', 'root','', 'examen2');
    
    if( $conn->connect_error ) { 
      $result = "No se puede establece la conexión con la BDD";
    }
    else {
      $q_insert = "INSERT INTO estudiante_x_materia(id_materia)
                    VALUES ('$mats')";                  
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