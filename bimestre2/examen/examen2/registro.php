<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<title>Registro de Estudiantes</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css"> -->
  	<!--<link rel="stylesheet" type="text/css" href="css/estilos.css">-->
</head>

<body>
	<div id="mensaje" class="alert"></div>
	<div class = "container">
		<h1>Registrate para poder matricularte</h1>
		<div class = "row">
			<div class="col-md-offset-1 col-md-4">
				<form id= "formulario_registro">

					<div class="form-group">
                    	<label for="nombre">Nombres</label>
                    	<input type="text" name="nombres" class="form-control" id="nombres" placeholder="Nombres">
                  	</div>

                  	<div class="form-group">
                    	<label for="apellidos">Apellidos</label>
                    	<input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Apellidos">
                  	</div>

                  	<div class="form-group">
	                    <label for="email">Email</label>
	                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                  	</div>

                  	<div class="form-group">
                    	<label for="contrasena">Contraseña</label>
                    	<input type="password" name="contrasena"  class="form-control" id="contrasena" placeholder="contraseña">
                  	</div>

                  	<div class="form-group">
                    	<label for="verif_contrasena">Verificar Contraseña</label>
                    	<input type="password" name="verif_contrasena" class="form-control" id="verif_contrasena" placeholder="Verificar contraseña">
                  	</div>

                  	<div>
                    	<button type="button" class="btn btn-primary" id="registrarme" >Registrarme</button>
                    	<button type="button" class="btn btn-primary" id="cancelar" >Cancelar</button>
                  	</div>

				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/jquery.js"></script>
  	<script type="text/javascript" src="js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="js/jquery.validate.js"></script>
  	<script type="text/javascript" src="js/additional-methods.js"></script>
  	<script type="text/javascript" src="js/main.js"></script>

</body>
</html>