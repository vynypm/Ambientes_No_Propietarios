<?php

$conn = new mysqli('localhost' , 'root' , '', 'registro');
if ($conn->connect_error) die($conn ->connect_error);

//Conexión a provincias

$query = "SELECT * FROM provincias";
$result = $conn ->query($query);
if (!$result) die($conn ->error);

$rows = $result ->num_rows;
$provincias = array();
for ($j = 0 ; $j < $rows ; ++$j){
  $result ->data_seek($j);
  $provincias[] = $result ->fetch_array(MYSQLI_ASSOC); 
}

// Conexión a Usuarios

$query = "SELECT * FROM usuarios";
$result = $conn ->query($query);

$rows= $result ->num_rows;
$usuarios =array();
for ($j=0; $j <$rows ; $j++) { 
  $result->data_seek($j);
  $usuarios[]= $result-> fetch_array(MYSQLI_ASSOC);
}

$result ->close();
$conn ->close();
?>

<!DOCTYPE html> 
<html lang="es"> 
<head> 
  <meta charset="utf-8"> 
  <title>Registro Usuario</title>

  <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
  <!--<link rel="stylesheet" type="text/css" href="css/estilos.css">-->
</head>

</head>
<body>
  <div id="mensaje" class="alert"></div>

    <div class="container">

      <h3>Registro de Usuarios</h3>
      <div id="success" class="success"></div>
      <div id="error" class="error"></div>

      <div class="row">
          <div class="col-md-offset-1 col-md-4">

              <form id="formulario_usuario">

                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                  </div>

                  <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Telefono">
                  </div>

                  <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Direccion">
                  </div>

                  <div class="form-group">
                    <label for="provincia">Provincia</label>
                    <select id="txtprovincia" name="provincia" class="form-control">
                        <option value="" class="form-control">Seleccione...</option>
                            <?php                         
                              foreach($provincias as $pr)
                              {
                                echo '<option value="' . $pr['cod_provincia'] . '">' . $pr['provincia'] . '</option>';
                              }
                            ?>
                    </select>
                  </div>    

                  <div class="form-group">
                    <label for="canton" >Canton</label>
                    <select id="txtcanton" name="canton" class="form-control">
                        <option value="" class="form-control">Seleccione...</option>               
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="parroquia" >Parroquia</label>
                    <select id="txtparroquia" name="parroquia" class="form-control">
                        <option value="" class="form-control">Seleccione...</option>             
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Usuario">
                  </div>

                  <div class="form-group">
                    <label for="contrasena">Contraseña</label>
                    <input type="password" name="contrasena"  class="form-control" id="contrasena" placeholder="contraseña">
                  </div>

                  <div class="form-group">
                    <label for="confir_contrasena">Verificar contraseña</label>
                    <input type="password" name="confir_contrasena" class="form-control" id="confir_contrasena" placeholder="Verificar contraseña">
                  </div>
                  <br>
                  <div >
                    <button type="button" class="btn btn-primary" id="enviar" >Enviar</button>
                  </div>

              </form>

          </div>


      </div> 
    </div>

  <br>
  <br>

  <!-- Codigo para cargar y buscar nuestra base de datos -->

  <div id="sms_editar" class="alert"></div>

  <div class="col-md-offset-1 col-md-4" id="metodo_buscar">
          <label for="search">BUSCAR</label>
          <input type="text" name="search" class="form-control" id="buscar">
  </div>
  <br><br><br>
  <div id="tabla_bd">
    <h3>Usuarios registrados</h3>
    <form id="usuarios_duardados">
     
      <table id="tabla_usuarios" class="table table-bordered" width="50">
        
          <thead>
            <tr>
              <td>id</td>
              <td>Nombre</td>
              <td>Email</td>
              <td>Telefono</td>
              <td>Direccion</td>
              <td>Usuario</td>
              <td>Contraseña</td>
            </tr> 
          </thead>

          <tbody>
          <?php
              foreach ($usuarios as $usuario) {
              echo'
              <tr >
                <td class="id">'.$usuario['id'].'</td>
                <td class="editable" data-campo="nombre"> <span>'.$usuario['nombre'].'</span></td>
                <td class="editable" data-campo="email"> <span>'.$usuario['email'].'</span></td>
                <td class="editable" data-campo="telefono"> <span>'.$usuario['telefono'].'</span></td>
                <td class="editable" data-campo="direccion"> <span>'.$usuario['direccion'].'</span></td>
                <td class="editable" data-campo="usuario"> <span>'.$usuario['usuario'].' </span></td>
                <td class="editable" data-campo="contrasena"><span>'.$usuario['contrasena'].'</span></td>
              </tr>';
              }
          ?>

          <?php
            
          ?>
          </tbody>

      </table>

    </form>
  </div>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.validate.js"></script>
  <script type="text/javascript" src="js/additional-methods.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

</body>

</html>