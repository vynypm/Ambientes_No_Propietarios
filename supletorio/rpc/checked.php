<?php
$result = "";

if($_POST) {

    $id_materia = $_POST['id_materia'];

    $conn = new mysqli('localhost' , 'root' , '', 'supletorio');
      if($conn->connect_error)
      {
        $result = "No se puede establecer la conexión con la BDD";
      } 
      else
      {
        $query="SELECT * FROM materia where id_materia ='$id_materia'";
        $result = $conn->query($query);
        if(!$result) die($conn->error);
        $rows = $result->num_rows;
        $result->data_seek(0);
        $row=$result->fetch_array(MYSQLI_ASSOC);

        if($rows!=0){
            echo 'true';
        }else{
            echo 'false';
        }
      }
}
?>