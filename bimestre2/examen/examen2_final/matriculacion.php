<?php
$conn = new mysqli('localhost' , 'root' , '', 'examen2');
if ($conn->connect_error) die($conn ->connect_error);

//Conexión a nivel

$query = "SELECT * FROM nivel";
$result = $conn ->query($query);
if (!$result) die($conn ->error);

$rows = $result ->num_rows;
$nivel = array();
for ($j = 0 ; $j < $rows ; ++$j){
  	$result ->data_seek($j);
  	$nivel[] = $result ->fetch_array(MYSQLI_ASSOC); 
}

//Conxion Materia

$query = "SELECT * FROM materia";
$result = $conn ->query($query);
if (!$result) die($conn ->error);

$rows = $result ->num_rows;
$materia = array();
for ($j = 0 ; $j < $rows ; ++$j){
  	$result ->data_seek($j);
  	$materia[] = $result ->fetch_array(MYSQLI_ASSOC); 
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
  	<title>Matriculación de Estudiante</title>
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<!-- <link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css"> -->
  	<!--<link rel="stylesheet" type="text/css" href="css/estilos.css">-->
</head>

<body>
	<div class="container">
		<center><h1 class="text-primary">Bienvenido, en esta pantalla puedes matricularte</h1></center>
		<br><br><br>
		<div class="row">
			<form id="formulario_usuario">

				<div class="col-md-offset-1 col-md-3">
					<div class="form-group">
	                    <label for="nivel">Selecionar Nivel</label>
	                    <select id="txtnivel" name="nivel" class="form-control">
	                        <option value="" class="form-control">Seleccione...</option>
	                            <?php                         
	                              foreach($nivel as $niveles)
	                              {
	                                echo '<option value="' . $niveles['id_nivel'] . '">' . $niveles['nombre'] . '</option>';
	                              }
	                            ?>
	                    </select>
	                </div>        		
				</div>
				<form id="checkbox_formulario">
				<div class="col-md-offset-3 col-md-4" >
					<div class="form-group" id="txtmateria">
	                    <div class="checkbox">
						</div>
	                </div>
				</div>
				</form>
				<div class="col-md-offset-4 col-md-2">
					<button type="button" class="btn btn-primary" id="regis_materia" >Registrar Materias</button>
        		</div>

			</form>
	
		</div>
	</div>

	<div id="materias_registradas">
		<center><h3>Lista de materias en las que se encuentra registrado</h3></center>
	</div>
	<form id="usuarios_duardados">
     
      	<table id="tabla_estudiante" class="table table-bordered" width="50">
        
            <thead>
	            <tr>
	              <td>Materia</td>
	              <td>Nivel</td>
	              <td>Profesor</td>
	            </tr> 
            </thead>

            <tbody>
            <?php
              foreach ($materia as $mate) {
              echo'
              <tr >
                <td> <span>'.$mate['nombre'].'</span></td>
                <td> <span>'.$mate['id_nivel'].'</span></td>
                <td> <span>'.$mate['profesor'].'</span></td>
              </tr>';
              }
          	?>
            </tbody>

     	</table>

    </form>

	<script type="text/javascript" src="js/jquery.js"></script>
  	<script type="text/javascript" src="js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="js/jquery.validate.js"></script>
  	<script type="text/javascript" src="js/additional-methods.js"></script>
  	<script type="text/javascript" src="js/main.js"></script>

</body>
</html>