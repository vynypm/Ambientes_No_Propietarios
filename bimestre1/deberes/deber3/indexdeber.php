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
				h4 {
					color: #3b5998;
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
  				}
				select {
					display: inline-block;
					padding: .2em;
				}
				a {
					font-size:75%;
					padding: .4em;
				}
				.btn {
					background: #4F9E00;
					color: white;
					padding: .2em;
					border: 1px solid #000000;
  					border-collapse: collapse;
  					font-size:medium;
				}
			';
		echo '</style>';
	echo '</head>';

	echo '</html>';
	
	echo '<body background = "#e5e8f1">';
		echo '<section id="registro">';
			echo '<h3>Regístrate</h3>';
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
				echo '<label for="contraseña">Contraseña nueva: </label>';
				echo '<input type="text" id="contraseña" name="contraseña"></input>';
				echo '<br>';
				echo '<label for="nombre">Nombre: </label>';
				echo '<input type="text" id="nombre" name="nombre"></input>';
				echo '<br>';
				echo '<label for="sexo">Sexo: </label>';
				echo '
					<select name="sexo">
						<option>Selecciona el sexo:</option>
						<option>Hombre</option>
						<option>Mujer</option>
					</select>
					';
				echo '<br>';
				echo '<label for="fecha">Fecha de nacimiento: </label>';
				echo '
					<select name="dia">
						<option>Día:</option>
					</select>
					';
				echo '
					<select name="mes">
						<option>Mes:</option>
					</select>
					';
				echo '
					<select name="año">
						<option>Año:</option>
					</select>
					';
				echo '<br>';
				echo'<center>';
				echo'<a href="">¿Por qué debo proporcionar esta información?</a>';
				echo'</center>';
				echo '<br>';
				echo '<br>';
				echo'<center>';
				echo '<input class="btn" type="submit" value="Regístrate">';
				echo'</center>';
		echo '</section>';
	echo '</body>';

?>