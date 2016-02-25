<?php

if($_POST){

  $id_nivel = $_POST['id_nivel'];
  $conn = new mysqli('localhost' , 'root' , '', 'supletorio');
      
      if ($conn->connect_error) die($conn ->connect_error);

      $query = "SELECT * FROM nivel WHERE id_nivel = '$id_nivel'";
      
      $result = $conn ->query($query);
      
      if (!$result) die($conn ->error);

      $rows = $result ->num_rows;
      
      $nivel = array();

      for ($j = 0 ; $j < $rows ; ++$j){
        $result ->data_seek($j);
        $nivel[] = $result ->fetch_array(MYSQLI_ASSOC);
  }

  $options = "";
  if(isset($nivel[0]['id_nivel']))
  {
    switch ($nivel[0]['id_nivel'])
      {
         case 1:
             $options .= "<h4>Lista de Materias Disponibles en Primer Nivel</h4>";
             break;
         case 2:
             $options .= "<h4>Lista de Materias Disponibles en Segundo Nivel</h4>";
             break;
         case 3:
             $options .= "<h4>Lista de Materias Disponibles en Tercer Nivel</h4>";
             break;
         case 4:
             $options .= "<h4>Lista de Materias Disponibles en Cuarto Nivel</h4>";
             break;
         case 5:
             $options .= "<h4>Lista de Materias Disponibles en Quinto Nivel</h4>";
             break;
         case 6:
             $options .= "<h4>Lista de Materias Disponibles en Sexto Nivel</h4>";
             break;
             default:0;
      }
  }
  

  echo $options;

  $result ->close();
  $conn ->close();

  
} else {
  echo "No se han recibido datos";
}  

?>