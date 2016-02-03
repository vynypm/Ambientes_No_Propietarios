<!DOCTYPE html>
<html lang="es">

<head>
  	<meta charset="utf-8">
  	<title>Inicio Sesíón</title>
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<!-- <link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css"> -->
  	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>

<body>
    <div id="mensaje" class="alert"></div>
    <div class = "container">
		    <h1 class="text-primary col-md-offset-4">Inicia Sesión para Matricularte</h1>
        <br><br>
		    <div class = "row">
            <div class="col-md-offset-4 col-md-4">
				        <form id= "formulario_sesion">

                  	<div class="form-group">
	                    <label for="email">Email</label>
	                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                  	</div>

                  	<div class="form-group">
                    	<label for="contrasena">Contraseña</label>
                    	<input type="password" name="contrasena"  class="form-control" id="contrasena" placeholder="contraseña">
                  	</div>

                  	<div>
                    	<button type="button" class="btn btn-primary" id="inicio_sesion" >Iniciar Sesión</button>
                    	<a href="registro.php">Registrarme</a>
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