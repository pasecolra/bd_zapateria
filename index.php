<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zapateria</title>
</head>
<body>
    <h1>Zapateria la sangil</h1>
    <?php
    echo "hola";
    ?>
    <div id="div_inicio_sesion">
        <form  action="modelo/loguear.php" method="post">
            <input type="text" name="usuario" id="" placeholder = "Usuario" require>
            <br>
            <input type = "password" name="clave" id="" placeholder = "Contraseña" require>
            <br>
            <button type = "submit">Ingresar</button>
        </form> 
    </div>
</body>
</html>