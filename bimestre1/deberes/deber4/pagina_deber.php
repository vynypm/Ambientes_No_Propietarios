<?php
	echo '<html>';

	echo '<head>';
		echo '<meta charset="utf-8">';
		echo '<title>Página deber</title>';
		echo '<style>';
			echo '
				#parte1 {
					background: #333333;
					height: 50px;
					width: 1350px;
					padding-top: 10px;
				}
						#encabezado {
							background: #333333;
							height: 40px;
							width: 450px;
							display: inline-block;

						}
						#registro {
							background: #333333;
							height: 30px;
							width: 820px;
							display: inline-block;
							vertical-align: top;
							text-align: right;
							padding-right: 80px; 
							padding-top: 10px;
						}
						.btningresar {
							background: #4F9E00;
							color: white;
							border: 2px solid #4F9E00;
		  					border-collapse: collapse;
		  					font-size:medium;
						}
				#parte2 {
					background: #DCDCDC;
					height: 350px;
					width: 1075px;
					padding-left: 275px;
			 	}
					 	#informacion {
					 		background: #DCDCDC;
							height: 350px;
							width: 850px;
							display: inline-block;
					 	}
						h3, a {
							font-weight: bold;
							color: white;
						}
						h1 {
							font-weight: bold;
							font-size: 225%;
						}
						.btnlearn {
							background: #4169E1;
							color: white;
							border: 2px solid #4169E1;
		  					border-collapse: collapse;
		  					font-size:medium;
						}
				
				#parte3 {
					background: #F5F5F5;
					height: 200px;
					width: 1350px;
					width: 1075px;
					padding-left: 275px;
			 	}
						#cabecera1 {
							background: #F5F5F5;
							height: 200px;
							width: 285px;
							display: inline-block;
							vertical-align: top;
						}
						#cabecera2 {
							background: #F5F5F5;
							height: 200px;
							width: 285px;
							display: inline-block;
							vertical-align: top;
						}
						#cabecera3 {
							background: #F5F5F5;
							height: 200px;
							width: 285px;
							display: inline-block;
							vertical-align: top;
						}
						#textocabecera
						{
							font-size: 75%;
						}
						.btnview {
							background: #F5F5F5;
							color: black;
							border: 1px solid #A9A9A9;
		  					border-collapse: collapse;
		  					font-size: 75%;
						}
			';
		echo '</style>';
	echo '</head>';

	echo '<body>';
		
		echo '<div id="parte1">';
			echo '<article id="encabezado">';
				echo'<center>';
					echo'<h3>Página de Prueba</h3>';
				echo'</center>';
			echo '</article>';
			echo '<article id="registro">';
				echo '<input type="text" id="email" placeholder="email"></input>';
				echo ' ';
				echo '<input type="text" id="contraseña" placeholder="contraseña"></input>';
				echo ' ';
				echo '<input class="btningresar" type="submit" value="Ingresar">';
				echo ' ';
				echo ' ';
				echo'<a href="registro.php">Registrar</a>';
			echo '</article>';
		echo '</div>';

		echo '<div id="parte2">';
			echo '<article id="informacion">';
			echo'<h1>Lorem ipsum dolor sit amet, consectetur 
					<br> 
					adipiscing elit. 
				</h1>';
			echo '<p> 
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean auctor vita eauge eu ornare. Lorem ipsum dolor sit amet,
					<br>
	          		consectur adipiscing elit. Morbi sit amet nec neque congue vulputate sit amet ac dolor. Duis eu quam libero. Etiam 
	          		<br>
	          		egestas id nunc at elmentun. Nullam vitae orci aliquam, lobortis nulla in consectetur leo. Lit eu dolor quis risus vehicula
	          		<br>
	          		faucibus ac convalis sapien. Nulla portitor, ipsum vitae maximus eusimod, metus lectus eusimod ex, ac bibedum erat 
	          		<br>
	        		mauris sit amet magna. Donec lacnia omare molestie. Cras ac eusimod dolor. Mauris voluptad id arcu vitae fementum 
	        		<br>
	         	    Nunc tempus faucibus auctor. Etiam imperdiet erat ex, maecenas congue eget telluis in scelerisque. Nulla eu convalis velit, 
	         	    <br>
			        at rhoncus dui.  
  				</p>';
  			echo '<input class="btnlearn" type="submit" value="Learn more >>">';
			echo '</article>';
		echo '</div>';

		echo '<div id="parte3">';
			echo '<article id="cabecera1">';
				echo '<h4>Cabecera </h4>';
				echo '<p id="textocabecera">
					Donec id elit nom mi porta gravida at eget metus. Fusce
					<br>
      				dapibus, tellus ac cursus commodo tortor mauris
      				<br>
      				condimetum nib, ut fermentum massa justo sit amet 
      				<br>
      				risus. Etiam porfa sem malesuda magna mollis euismod
      				<br>
      				Donec sed odio dui.
				</p>';
				echo '<input class="btnview" type="submit" value="View details >>">';
			echo '</article>';
			echo '<article id="cabecera2">';
				echo '<h4>Cabecera </h4>';
				echo '<p id="textocabecera">
					Donec id elit nom mi porta gravida at eget metus. Fusce
					<br>
      				dapibus, tellus ac cursus commodo tortor mauris
      				<br>
      				condimetum nib, ut fermentum massa justo sit amet 
      				<br>
      				risus. Etiam porfa sem malesuda magna mollis euismod
      				<br>
      				Donec sed odio dui.
				</p>';
				echo '<input class="btnview" type="submit" value="View details >>">';
			echo '</article>';
			echo '<article id="cabecera3">';
				echo '<h4>Cabecera </h4>';
				echo '<p id="textocabecera">
					Donec id elit nom mi porta gravida at eget metus. Fusce
					<br>
      				dapibus, tellus ac cursus commodo tortor mauris
      				<br>
      				condimetum nib, ut fermentum massa justo sit amet 
      				<br>
      				risus. Etiam porfa sem malesuda magna mollis euismod
      				<br>
      				Donec sed odio dui.
				</p>';
				echo '<input class="btnview" type="submit" value="View details >>">';
			echo '</article>';
		echo '</div>';

	echo '</body>';

	echo '</html>';

?>