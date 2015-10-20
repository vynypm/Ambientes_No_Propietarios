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
				}
				#derecha {
					background: #333333;
					height: 50px;
					width: 500px;
					display: inline-block;
					vertical-align: top;
				}

				p {
					font-weight: bold;
					color: white;
				}

			';
		echo '</style>';
	echo '</head>';

	echo '<body>';
		
		echo '<div id="parte1">';
			echo '<article id="derecha">';
				echo '<p>Página de Prueba</p>';
				echo '<input type="text" value="texto dentro del control" id="texto" /> ';
			echo '</article>';

		echo '</div>';

		echo '<div id="parte2">';
		echo '</div>';

		echo '<div id="parte3">';
		echo '</div>';

	echo '</body>';

	echo '</html>';

?>