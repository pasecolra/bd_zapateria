<?php
    require 'modelo/conexion.php';

    session_start();

    if(isset($_SESSION['username']) && isset($_SESSION['correo']))

    {
        $nombre_usuario = $_SESSION['username'];
        $correo_usuario = $_SESSION['correo'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricante</title>
</head>
<body>
<div id="contenedor_princiapl">
        <h1>Zapateria la Sangileña</h1>
        <p>Nombre: <?php echo ' ' .$nombre_usuario;?></p>
        <p>Usuario: <?php echo ' ' .$correo_usuario;?></p>
        <h3>Registros de fabricante</h3>
        <div id="reg_fabricante">
        <form  action="modelo/reg_fabricante.php" method="post">
            <label for="">Id: </label>
            <input type="text" name="id_fab" id="" placeholder = "id Fabricante" require>
            <br>
            <label for="">Nombre: </label>
            <input type = "password" name="nombre_fab" id="" placeholder = "Nombre Fabricante" require>
            <br>
            <button type = "submit">Ingresar</button>
        </form> 
    </div>

        

    </div>
    
</body>
</html>