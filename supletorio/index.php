<?php 
	include('rpc/niveles.php'); 
	include('rpc/cargar_materias.php'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Matriculación de Estudiantes</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

	<div class = "container-fluid"><br><br>

		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
                	<label for="nivel">Seleccione el Nivel : </label>
                		<select class="form-control" name="nivel" id="sltnivel">
                			<option value="">Seleccione:</option>
                  			<?php
                  			  foreach($nivel as $niv){
                     		  echo '<option value="' . $niv['id_nivel'] . '">' . $niv['nombre'] . '</option>';
                    			}
                 			 ?>
              		    </select>
                </div>
			</div>

			<div class="col-md-4">
				<div id="materias">

					
					
		      	</div>
			</div>

			<div class="col-md-4">
				<div class="form-group">
					<div class="checkbox" id="ch_materias">
						<?php
							foreach ($materia as $mat) {
		  						echo '<label><input name="checkbox[]" type="checkbox" id="checkbox" value="' . $mat['id_materia'] . '">'. $mat["nombre"] .'</label>';
		  					}
						?>
					</div>
                </div>
			</div>
		</div>

		<div class="row">
			<center>
       			<button type="button" class="btn btn-primary" id="btn_guardar">Guardar</button>
       			<button type="button" class="btn btn-primary" id="btn_cancelar">Cancelar</button>
       		</center>
 	    </div>


	</div>
  	
  	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.js"></script>
	<script type="text/javascript" src="js/additional-methods.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>
</html>