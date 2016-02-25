<?php

$conn = new mysqli('localhost' , 'root' , '', 'supletorio');
if ($conn->connect_error) die($conn ->connect_error);

$query = "SELECT * FROM nivel";
$result = $conn ->query($query);
if (!$result) die($conn ->error);

$rows = $result ->num_rows;
$nivel = array();
for ($j = 0 ; $j < $rows ; ++$j){
  $result ->data_seek($j);
  $nivel[] = $result->fetch_array(MYSQLI_ASSOC); 
}
