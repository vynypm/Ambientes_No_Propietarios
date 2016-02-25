<?php
	if($_POST){

		$nivel=$_POST['nivel'];
		$conn = new mysqli('localhost', 'root',"", "supletorio");
		$query = "SELECT * FROM materia where id_nivel='$nivel'";
		$result = $conn ->query($query);
		if (!$result) die($conn ->error);
		$rows = $result ->num_rows;
		$materias=array();

		for ($j = 0 ; $j < $rows ; ++$j){
		  $result ->data_seek($j);
		  $materias[] = $result ->fetch_array(MYSQLI_ASSOC);
	}

	$cons_mate="";
	foreach ($materias as $mat) {
		$cons_mate.='<h5 name="materias[]" value="'.$mat["id_materia"].'"> '.$mat["nombre"].'</h5>';
	}

	echo  $cons_mate;

}