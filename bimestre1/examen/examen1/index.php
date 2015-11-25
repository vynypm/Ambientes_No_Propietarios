<?php include ('conexion_index.php'); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio de Sesion</title>
    </head>
    <body>
        <form action="conexion_index.php" method="POST" >
            <p>
	            <label>Email: </label>
	            <input type="text" id="email" name="email">
            </p>
            <p>
	            <label>Contraseña: </label>
	            <input type="password" id="contrasena" name="contrasena">
            </p>            
            <p>
                <button id="inicio" name="inicio">Iniciar Sesion</button>
                <a href="registro.php">Registrarme</a>
            </p>
        </form>
    </body>
</html>