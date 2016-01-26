<?php 
	$result="";
	if ($_POST) {
		$valor=$_POST['valor-input'];
		$campo= $_POST['campo'];
		$id=$_POST['id'];

		$conn = new mysqli('localhost','root','','registro');
		if ($conn->connect_error)
			$result="No se puede establecer conexion a la base de datos";
		else{
			$actualizar="update usuario set ".$_POST["campo"]."='".$_POST['valor-input']."where id = ".intval($_POST["id"])."'limit 1";

			$res=$conn -> query($actualizar);

			if (!$res) {
				$result= 'Existi&oacute; un error al insertar.' . $conn->error;
		    } 
		    else {
		    	$result = 'Mensaje enviado con &eacute;xito.';
		    }
		}
	}
?>