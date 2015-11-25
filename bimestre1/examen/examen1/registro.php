<?php
    require("conexion_registro.php"); 
 ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro de Usuarios</title>
    </head>
    <body>
        <form action="conexion_registro.php"  method="POST" >
            <p>
	            <label>Email: </label>
	            <input type="text" id="email" name="email">
            </p>
            <p>
	            <label>Contraseña: </label>
	            <input type="password" id="contrasena" name="contrasena">
            </p> 
            <p>
                <label>Verificar Contraseña: </label>
                <input type="password" id="verif_contrasena" name="verif_contrasena">
            </p>            
            <button id="registrar" name="registrar">Registrarme</button>
        </form>
    </body>
</html>