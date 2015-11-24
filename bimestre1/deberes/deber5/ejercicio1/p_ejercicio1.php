<?php 
// $dolar=$_POST['dolar'];

	function conver($dolar)
	{
		 $dolar=$_POST['dolar'];
		$conversion = array('euros' => 0.930929 , 'pesos' => 2.890 );
		$moneda = $_POST['moneda'];
		if(empty($dolar))
		{
			echo "<br>"."Ingrese un numero el campo se encuenra vacio"."<br>";
			return false;
		}
		else
		{
			if($dolar=="")
			{
				return false;
			}
			else
			{
				$cantidad = $dolar * $conversion["$moneda"];
				echo "<br>". $dolar. " dolares equivalen a ".$cantidad. $moneda."<br>";
			}
		}
	}
	conver($dolar)
?>