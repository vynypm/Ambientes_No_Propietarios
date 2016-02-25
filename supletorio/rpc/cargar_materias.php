<?php

$conn = new mysqli('localhost' , 'root' , '', 'supletorio');
if ($conn->connect_error) die($conn ->connect_error);

$query = "SELECT * FROM materia";
$result = $conn ->query($query);
if (!$result) die($conn ->error);

$rows = $result ->num_rows;
$materia = array();
for ($j = 0 ; $j < $rows ; ++$j){
  $result ->data_seek($j);
  $materia[] = $result->fetch_array(MYSQLI_ASSOC); 
}