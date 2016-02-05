<?php
 
// $campo=$_POST['campo'];
// $valor=$_POST['valor'];
// $id=$_POST['id'];
//  $conexion = mysql_connect("localhost","root");
//   mysql_select_db("registro",$conexion)or die("no se pudo conectar a la base de datos ");
		
// 		$query ="UPDATE usuarios SET $campo='$valor' WHERE id='$id'";
// 		mysql_query($query,$conexion);
// if($query){
// $query='Modificado con exito';
// }
// else
// {
// $query='El dato no fue Modificado';
// }
// echo json_encode( $query );
?>
<?php 
	$result="";
	if ($_POST) {
		$valor=$_POST['campo'];
		$campo= $_POST['valor'];
		$id=$_POST['id'];

		$conn = new mysqli('localhost','root','','registro');
		if ($conn->connect_error)
			$result="No se puede establecer conexion a la base de datos";
		else{
			$actualizar="update usuario set ".$_POST["campo"]."='".$_POST['valor']."where id = ".intval($_POST["id"])."'limit 1";

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