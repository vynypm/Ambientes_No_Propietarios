<?php
 require('p_registro.php');
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
				echo '<label for="contraseña">Contraseña nueva: </label>';
				echo '<input type="text" id="contraseña" name="contraseña"></input>';
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
						<option>1</option> <option>2</option> <option>3</option> <option>4</option>
						<option>5</option> <option>6</option> <option>7</option> <option>8</option>
						<option>9</option> <option>10</option> <option>11</option> <option>12</option>
						<option>13</option> <option>14</option> <option>15</option> <option>16</option>
						<option>17</option> <option>18</option> <option>19</option> <option>20</option>
						<option>21</option> <option>22</option> <option>23</option> <option>24</option>
						<option>25</option> <option>26</option> <option>27</option> <option>28</option>
						<option>29</option> <option>30</option> <option>31</option>
					</select>
					';
				echo '
					<select name="mes">
						<option>Mes:</option>
						<option>Enero</option> <option>Febrero</option> <option>Marzo</option>
						<option>Abril</option> <option>Mayo</option> <option>Junio</option>
						<option>Julio</option> <option>Agosto</option> <option>Septiembre</option>
						<option>Octubre</option> <option>Noviembre</option> <option>Diciembre</option>
					</select>
					';
				echo '
					<select name="año">
						<option>Año:</option>
						<option>1985</option> <option>1986</option> <option>1987</option>
						<option>1988</option> <option>1989</option> <option>1990</option>
						<option>1991</option> <option>1992</option> <option>1993</option>
						<option>1994</option> <option>1995</option> <option>1996</option>
						<option>1997</option> <option>1998</option> <option>1999</option>
						<option>2000</option>
					</select>
					';
				echo '<br>';
				echo'<center>';
				echo'<a href="pagina_deber.php">¿Por qué debo proporcionar esta información?</a>';
				echo'</center>';
				echo '<br>';
				echo '<br>';
				echo'<center>';
				echo '<button id="registrar" name="registrar">Resgistrar</button>';
				echo'</center>';
		echo '</section>';
	echo '</body>';

?>