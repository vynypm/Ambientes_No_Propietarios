<?php

$conn = new mysqli('localhost' , 'root' , '', 'registro');
if ($conn->connect_error) die($conn ->connect_error);

$query = "SELECT * FROM provincias";
$result = $conn ->query($query);
if (!$result) die($conn ->error);

$rows = $result ->num_rows;
$provincias = array();
for ($j = 0 ; $j < $rows ; ++$j){
  $result ->data_seek($j);
  $provincias[] = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}
// print_r($provincias);

$query = "SELECT * FROM usuario";
$result = $conn ->query($query);

$rows= $result ->num_rows;
$usuarios =array();
for ($j=0; $j <$rows ; $j++) { 
  $result->data_seek($j);
  $usuarios[]= $result-> fetch_array(MYSQLI_ASSOC);
}

$result ->close();
$conn ->close();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Demo</title>
	<!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
	<!--<link rel="stylesheet" type="text/css" href="css/estilos.css">-->
	<!--<link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css"> -->
	<meta charset="utf-8">
</head>
	<body>
		<div class="container">
			<div id="mensaje"></div>
			<div class="form-group">
                <div class="col-xs-4  text-right">
                    <label for="buscar" class="control-label">Buscar:</label>
                </div>
                <div class="col-xs-4">
                    <input  type="text" name="buscar" id="buscar" class="form-control" onkeyup="tabla_registro(this.value);" placeholder="Ingrese nombre o descripcion"/>
                </div>
            </div>
            <br>
			<div class="row">
				<div class="col-md-3">
					<form id="usuario">
				
				    	<div class="form-group">
				    		<label for="nombre">Nombre</label>
					        <input type="text" class="form-control" name="nombre" id="nombre" value="" placeholder="Nombre">
					    </div>

						<div class="form-group">
						    <label for="email">Email</label>
					        <input type="text" class="form-control" name="email" id="email" value="" placeholder="Email">
				        </div>

				        <div class="form-group">
						    <label for="telefono">Telefono</label>
					        <input type="text" class="form-control" name="telefono" id="telefono" value="" placeholder="Telefono">
				        </div>

				        <div class="form-group">
						    <label for="direccion">Direccion</label>
					        <input type="text" class="form-control" name="direccion" id="direccion" value="" placeholder="Direccion">
				        </div>

				        <div class="form-group">
						    <label for="provincia">Provincia</label>
						    <select class="form-control" id="txtprovincia" name="provincia">
						    	<option value="">Seleccione..</option>
						    		<?php
										foreach($provincias as $pr){
									    	echo '<option value="' . $pr['cod_provincia'] . '">' . $pr['provincia'] . '</option>';
									  	}

									?>
						    </select>
			        	</div>

			        	<div class="form-group">
						    <label for="canton">Canton</label>
					        <select class="form-control" id="txtcanton" name="canton">
						    	<option vaue="">Seleccione..</option>
						    	
						    </select>
			        	</div>

			        	<div class="form-group">
						    <label for="parroquia">Parroquia</label>
					        <select class="form-control" id="txtparroquia" name="parroquia">
						    	<option value="">Seleccione..</option>
						    	
						    </select>
			        	</div>

				        <div class="form-group">
						    <label for="usuario">Usuario</label>
					        <input type="text" class="form-control" name="usuario" id="txtusuario" value="" placeholder="Usuario">
				        </div>

				        <div class="form-group">
						    <label for="contrasena">Contraseña</label>
					        <input type="password" class="form-control" name="contrasenia" id="contrasenia" value="" placeholder="Contraseña">
				        </div>

				        <div class="form-group">
						    <label for="conf-contrasena">Confirmar contraseña</label>
					        <input type="password" class="form-control" name="conf_contrasena" id="conf_contrasena" value="" placeholder="Confirmar contraseña">
				        </div>
				    
		   			</form>
		   			<button type="button" class="btn btn-primary" id="btn-enviar">Enviar</button>

			 	</div>
			 	<br>
			 	<div class="col-md-9">
			 
					<div class="table-responsive" >
						<table id="tabla_registro" class="table table-hover table-condensed table-striped">
							<thead>
								<tr class="warning">
									<th>ID</th>
									<th>Nombre</th>
									<th>E-mail</th>
									<th>Direccion</th>
									<th>Telefono</th>
									<th>Usuario</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									$contador=0;
									foreach ($usuarios as $usuario) {
										echo '<tr class="info">';
											echo '<td class="id" data-campo="id">';
												echo $usuario['id'];
											echo '</td>';

											echo '<td id="nombre"' . $contador . 'data-campo="nombre">';
												echo $usuario['nombre'];
											echo '</td>';

											echo '<td id="email"' . $contador . 'data-campo="email">';
												echo $usuario['email'];
											echo '</td>';

											echo '<td id="direccion"' . $contador . 'data-campo="direccion">';
												echo $usuario['direccion'];
											echo '</td>';

											echo '<td id="telefono"' . $contador . 'data-campo="telefono">';
												echo $usuario['telefono'];
											echo '</td>';

											echo '<td id="usuario"' . $contador . 'data-campo="usuario">';
												echo $usuario['usuario'];
											echo '</td>';
											
										echo '</tr>';
										$contador++;
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>    


		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.validate.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/additional-methods.js"></script>

		
	</body>
</html>