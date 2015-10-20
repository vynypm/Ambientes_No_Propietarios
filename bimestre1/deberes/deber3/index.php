<?php
	echo '<html>';
	echo '<head>';
	echo '<meta charset="utf-8">';
	echo '<title>Página 100% PHP</title>';
	echo '<style>';
	echo 'h1{
 		text-align: center;
	}

	th {
		background-color: blue;
		color:#FFFFFF;
		border: 1px solid #000000;
  		border-collapse: collapse;
	}

	table, td{
  		border: 1px solid #000000;
  		border-collapse: collapse;
	}

	table tr:nth-child(even){
  		background-color: #15efe8; 
	}

	table tr:nth-child(odd){
  		background-color: #dddddd; 
	}
	';

	echo '</style>';
	echo '</head>';
	echo '<body bgcolor="#A9A9A9">';
	echo '<h1>Este es el cuerpo de la página.</h1>';
	echo '<p>La siguiente tabla es generada por un while y un for de PHP. Las características que debe tener esta tabla 
			se muestran en la siguiente lista ordenada (elemento <code>&lt;ol&gt;</code>)</p>';
	echo '<ol>';
	echo '<li>La tabla está centrada en la plantilla utilizando CSS.</li>';
	echo '<li>La cabecera tiene un fondo azul oscuro con letra blanca.</li>';
	echo '<li>Las filas pares son celestes y las filas impares son grises.</li>';
	echo '<li>Los numeros en la celda están alineados a la derecha.</li>';
	echo '<li>La tabla tiene un borde solido negro.</li>';
	echo '</ol>';

	echo '<center>';
	echo '<table>';
	echo '<thead>';
	echo '<tr>';
	echo '<th>Columna 1</th>';
	echo '<th>Columna 2</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';

	$i = 0;
	$es_impar = true;
	while($i < 10){
	  echo '<tr class="' . ($es_impar ? 'impar' : 'par') . '">';
	  $es_impar = ( $es_impar ? false : true );
	  for($j = 0; $j < 2; $j++){
	    echo '<td>';
	    echo ++$i;
	    echo '</td>';
	  }
	  echo '</tr>';
	}

	echo '</tbody>';
	echo '</table>';
	echo '</center>';

	echo '<p>A continuación tenemos un formulario HTML con las siguientes características:</p>';
	echo '<ul type = disk>';
		echo '<li>Las etiquetas están enlazadas con sus respectivos campos.</h>';
		echo '<li>Las etiquetas tienen un ancho de 100px y están en negrita.</h>';
		echo '<li>Los input tienen un margen inferior de 10px.</h>';
	echo '</ul>';

	echo '<label for="nombre">Nombre: </label>';
	echo '<input type="text" id="nombre" name="nombre"></input>';
	echo '<br>';
	echo '<br>';
	echo '<label for="apellido">Apellido: </label>';
	echo '<input type="text" id="apellido" name="apellido"></input>';
	echo '<br>';
	echo '<br>';
	echo '<input class="btn" type="submit" value="Enviar">';
	echo '</body>';
	echo '</html>';