
<!DOCTYPE <!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title></title>
</head>

<body>
	<form action="" method="post">
		<div>
			<label for="lbldolar">Ingrese el valor en USD: </label>
			<input type="text" id="dolar" name="dolar" value="">

			<label for="lblmoneda">Convertir a: </label>
			<select id="moneda" name="moneda">
     	 		<option value="">Seleccione...</option>
      			<option value="euros">Euros</option>
      			<option value="pesos">Pesos Colombianos</option>
   			</select>
		</div>
		<br>
		<br>
		<div>
			<button id="convertir" name="convertir">Convertir</button>
				<?php require("p_ejercicio1.php"); ?>
		</div>

	</form>

</body>
</html>

