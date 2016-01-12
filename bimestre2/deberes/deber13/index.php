<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Deber 13</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<!-- <link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css"> --> 
</head>
<body>
	<form id="formulario" action="rcp/procesar.php" method="post">
		<h2>Registro de Usuarios</h2>

		<div id="success" class="success"></div>
    	<div id="error" class="error"></div>

		<label for="nombre">Nombre: </label>
		<input type="text" id="nombre" name="nombre"></input>
		<br>
		<label for="email">Email: </label>
		<input type="text" id="email" name="email"></input>
		<br>
		<label for="telefono">Telefono: </label>
		<input type="text" id="telefono" name="telefono"></input>
		<br>
		<label for="direccion">Dirección: </label>
		<input type="text" id="direccion" name="direccion"></input>
		<br>
		<label for="usuario">Usuario: </label>
		<input type="text" id="usuario" name="usuario"></input>
		<br>
		<label for="contrasena">Contraseña: </label>
		<input type="password" id="contrasena" name="contrasena"></input>
		<br>
		<label for="verif_contrasena">Verificar Contraseña: </label>
		<input type="password" id="verif_contrasena" name="verif_contrasena"></input>
		<br><br>
		<center> <button type="button" id="btn_registrar" class="btn btn-primary">Registrarse</button> </center>

		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/main.js"></script> 
		<script src="js/messages_es.js"></script>
		<script src="js/additional-methods.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.validate.js"></script>
		<script type="text/javascript" src="js/additional-methods.js"></script>

		<script type="text/javascript" src="js/main.js"></script>



	</form>
	
</body>
</html>