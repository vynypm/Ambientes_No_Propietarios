<!DOCTYPE <!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Registro de Clientes</title>
</head>

<body>
	<form action="" method="post">
		<div>
			<label for="ingre_nombre">Nombre: </label>
			<input type="text" id="nombre" name="nombre" value="">

			<label for="ingre_apelli">Apellido: </label>
			<input type="text" id="apellido" name="apellido" value="">

			<label for="ingre_edad">Edad: </label>
			<select id="edad" name="edad">
     	 		<option value="">Seleccione...</option>
      			<option value="1">Menos de 20 años</option>
      			<option value="2">Entre 20 y 39 años</option>
      			<option value="3">Entre 40 y 59 años</option>
      			<option value="4">Mas de 60 años</option>
   			</select>
		</div>
		<br>
		<br>
		<div>
			<label for="ingre_peso">Peso: </label>
			<input type="text" id="peso" name="peso" value="">
			&nbsp; &nbsp; &nbsp;
			<label for="ingre_genero">Género: </label>
			<input type="radio" value="hombre" name="hombre" title="hombre">Hombre
			<input type="radio" value="mujer" name="mujer" title="mujer">Mujer
			&nbsp; &nbsp; &nbsp;
			<label for="ingre_estado">Estado civil: </label>
			<input type="radio" value="soltero" name="soltero" title="soltero">Soltero
			<input type="radio" value="casado" name="casado" title="casado">Casado
			<input type="radio" value="otro" name="otro" title="otro">Otro
		</div>
		<br>
		<br>
		<div>
			<button id="registrar" name="registrar">Registrar</button>
		</div>

	</form>

</body>
</html>