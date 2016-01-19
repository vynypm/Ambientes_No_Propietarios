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
	<meta charset="utf-8">
	<title>Demo</title>
	<link href="css/bootstrap.min.css" rel="stylesheet"> 
	<!--<link rel="stylesheet" type="text/css" href="css/estilos.css">-->
	<link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">
</head>
	<body>
		<div id="success" class="has-success"></div>
		<div id="error" class="has-error"></div>
		<div class="row">
			<div class="col-md-3 col-md-offset-1">
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
					    <select class="form-control" id="provincia" name="provincia">
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
				        <select class="form-control" id="canton" name="canton">
					    	<option vaue="">Seleccione..</option>
					    	
					    </select>
		        	</div>

		        	<div class="form-group">
					    <label for="parroquia">Parroquia</label>
				        <select class="form-control" id="parroquia" name="parroquia">
					    	<option value="">Seleccione..</option>
					    	
					    </select>
		        	</div>

			        <div class="form-group">
					    <label for="usuario">Usuario</label>
				        <input type="text" class="form-control" name="usuario" id="usuario" value="" placeholder="Usuario">
			        </div>

			        <div class="form-group">
					    <label for="contrasena">Contraseña</label>
				        <input type="password" class="form-control" name="contrasena" id="contrasena" value="" placeholder="Contraseña">
			        </div>

			        <div class="form-group">
					    <label for="conf-contrasena">Confirmar contraseña</label>
				        <input type="password" class="form-control" name="conf_contrasena" id="conf_contrasena" value="" placeholder="Confirmar contraseña">
			        </div>
			    
	   			</form>
	   			<button type="button" class="btn btn-primary" id="btn-enviar">Enviar</button>
		 	</div>
		</div>     


		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.validate.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/additional-methods.js"></script>

		
	</body>
</html>