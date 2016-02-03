
<?php

if($_POST){

  $nivel = $_POST['nivel'];

  $conn = new mysqli('localhost' , 'root' , '', 'examen2');
      
      if ($conn->connect_error) die($conn ->connect_error);

      $query = "SELECT * FROM materia WHERE id_nivel= '$nivel'";
      
      $result = $conn ->query($query);
      if (!$result) die($conn ->error);

      $rows = $result ->num_rows;
      $materia = array();
      for ($j = 0 ; $j < $rows ; ++$j){
          $result ->data_seek($j);
          $materia[] = $result ->fetch_array(MYSQLI_ASSOC);
      }

      $options = "";
      foreach ($materia as $mat) {
          $options .= '<div class="checkbox">
                        <label><input name="checkbox[]" type="checkbox" id="checkbox" value="' . $mat['id_materia'] . '">'. $mat["nombre"] .'</label>
                      </div>';
      }

      $mens ='<h4>Listas de materias disponibles en el nivel '.$nivel.'</h4> <br>';

      echo $mens;
      echo $options;

      $result ->close();
      $conn ->close();
} 
else 
{
  echo "No se han recibido datos";
}  

?>