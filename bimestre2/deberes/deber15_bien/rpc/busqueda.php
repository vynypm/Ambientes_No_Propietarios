<?php
$letra=$_POST['search'];
    $conexion = mysql_connect("localhost","root");
  	mysql_select_db("registro",$conexion)or die("no se pudo conectar a la base de datos ");

	$sql=mysql_query("SELECT * FROM usuarios WHERE nombre LIKE '%".$letra."%'");
    $contar=mysql_num_rows($sql); 
    if($contar==0){
		echo "No hay resultados con '<b>".$letra."</b>'.";
    }
    else
	{
    	while($result=mysql_fetch_assoc($sql))
    	{
      		$usuarios[]=$result;
		}

		foreach ($usuarios as $usuario) {
			echo'
			<tr  id="resultado">
				<td   class="id">'.$usuario['id'].'</td>
				<td  class="editable" data-campo="nombre"><span>'.$usuario['nombre'].'</span></td>
				<td class="editable" data-campo="email"><span>  '.$usuario['email'].'</span></td>
				<td class="editable" data-campo="telefono"> <span> '.$usuario['telefono'].'</span></td>
				<td class="editable" data-campo="direccion"> <span> '.$usuario['direccion'].'</span></td>
				<td class="editable" data-campo="usuario"><span>  '.$usuario['usuario'].' </span></td>
				<td class="editable" data-campo="contrasena"><span>'.$usuario['contrasena'].'</span></td>
			</tr>';
		}
	}
/*echo json_encode(  );*/