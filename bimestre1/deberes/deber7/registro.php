<?php 
	include 'conexion_registro.php';
 ?>

<?php
	echo '<html>';

	echo '<head>';
		echo '<meta charset="utf-8">';
		echo '<title>Deber 3</title>';
		echo '<style>';
			echo '
				body{
					background: #e5e8f1;
				}
				p {
					font-weight: bold;
					color: #3b5998;
				}
				#registro {
					background: #e5e8f1;
					height: 350px;
					width: 400px;
					margin-right: auto;
					margin-left: auto;
					color: #3b5998;
				}
				label {
					display: inline-block;
					width:140px;
					text-align: right;
					padding: .2em;
					color: #3b5998;
					border: 1px solid #e5e8f1;
					font-size: 110%;
					vertical-align: middle;
  				}
				select {
					display: inline-block;
					padding: .2em;
				}
				a {
					font-size:75%;
					padding: .4em;
				}
				#registrar {
					background: #4F9E00;
					color: white;
					width: 120px;
					padding: .2em;
					border: 1px solid #4F9E00;
  					border-collapse: collapse;
  					font-size:medium;
				}

			';
		echo '</style>';
	echo '</head>';

	echo '</html>';
	
	echo '<body background = "#e5e8f1">';

	echo '<form action="php/conexion_registro.php" method="POST" >';

		echo '<section id="registro">';
			echo '<br>';
			echo '<br>';
			echo '<h2>Regístrate</h2>';
			echo '<p>Es gratis (y lo seguirá siendo).</p>';
				echo '<label for="nombre">Nombre: </label>';
				echo '<input type="text" id="nombre" name="nombre"></input>';
				echo '<br>';
				echo '<label for="apellido">Apellidos: </label>';
				echo '<input type="text" id="apellido" name="apellido"></input>';
				echo '<br>';
				echo '<label for="email">Tu email: </label>';
				echo '<input type="text" id="email" name="email"></input>';
				echo '<br>';
				echo '<label for="correo">Escribe de nuevo el correo electrónico: </label>';
				echo '<input type="text" id="correo" name="correo"></input>';
				echo '<br>';
				echo '<label for="contra">Contraseña nueva: </label>';
				echo '<input type="password" id="contra" name="contra"></input>';
				echo '<br>';
				echo '<label for="sexo">Sexo: </label>';
				echo '
					<select name="sexo">
						<option>Selecciona el sexo:</option>
						<option value="h">Hombre</option>
						<option value="m">Mujer</option>
					</select>
					';
				echo '<br>';
				echo '<label for="fecha">Fecha de nacimiento: </label>';
				echo '<select name="dia">';
				echo '<option value="">Día:</option>';
						for($i=1; $i<=31; $i++)
						{
							echo "<option value='$i'>$i</option>";
						}
						
				echo '</select>';
				echo '
					<select name="mes">
						<option value="">Mes:</option>
						<option value="1">Enero</option> 	<option value="2">Febrero</option>    <option value="3">Marzo</option>
						<option value="4">Abril</option> 	<option value="5">Mayo</option>       <option value="6">Junio</option>
						<option value="7">Julio</option> 	<option value="8">Agosto</option>  	  <option value="9">Septiembre</option>
						<option value="10">Octubre</option> <option value="11">Noviembre</option> <option value="12">Diciembre</option>
					</select>
					';
				echo '<select name="año">';
				echo '<option value="">Año:</option>';
						for($j=1950; $j<=2015; $j++)
						{
							echo "<option value='$j'>$j</option>";
						}
				echo '</select>';
				echo '<br>';
				echo'<center>';
				echo'<a href="pagina_deber.php">¿Por qué debo proporcionar esta información?</a>';
				echo'</center>';
				echo '<br>';
				echo '<br>';
				echo'<center>';
				echo '<button id="registrar" name="registrar">Registrar</button>';
				echo'</center>';
		echo '</section>';

	echo '</form>';

	echo '</body>';

?>