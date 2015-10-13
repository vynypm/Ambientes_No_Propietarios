<!--
Escuela Politécnica Nacional
			  ESFOT
	 Ambientes No Propietarios
Nombre: Guachamin Vinicio
Deber 2 
-->

<!Doctype html>

<?php
function generar_tabla(){

	
	echo '<table id="tabla">';
	$i = 0;
	while($i < 100)
	{
		echo '<tr>';
		for($j=0; $j < 10; $j++)
		{
			$es_primo = es_primo($i);
			echo '<td'.($es_primo ? ' class="colorprimo"' : '') . '>';
			echo $i++;
			echo '</td>';
		}
		echo '</tr>';
	}
	echo '</table>';
}

function es_primo($num)
{
	if($num > 2)
	{
		$es_primo = true;
		for($i = 2; $i <= $num/2; $i ++) 
		{
			if($num % $i == 0)	
			{
				$es_primo = false;
				break;
			}
		}
		return $es_primo;
	} 
	else
	{
		if($num <= 2) 
		{
			return false;
		}
	}
}

/*function es_primo($num)
{
    $c=0;
    for($i=2; $i<=$num; $i++)
    {
        if($num % $i == 0)
        {
             if($c++ > 1)
                return false;
        }
    }
    return true;
}*/

?>


<html>

	<head>
		<title>Numeros Primos</title>
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	</head>

	<body>
		<center>
			<?php 
				generar_tabla();
			?> 
		</center>
	</body>
	
</html>